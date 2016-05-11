//Global variables
var goodPicks = [];
var goodPicksPics = [];
var badPicks = [];
var badPicksPics = [];
var bonusList = [];
var timerBar = '';
var endScore = 0;
//var screenTimerLeft = 0;

//Interface functions


//Intro sequence, timer Countdown then hide screen panel
function timerLoop (i) {
    setTimeout(function () {
        var timer = $('#timer');
        //Number countdown, TODO rework
        timer.fadeOut(500);
        setTimeout(function(){
            timer.text(i).fadeIn(500);
        }, 500);
        //console.log(label);
        if (--i) {          // If i > 0, keep going
            timerLoop(i);       // Call the loop again, and pass it the current value of i
        } else {
            setTimeout(function(){
                //hide model
                var model = $('#model');
                var modelPanel = $('#modelPanel');
                var modelItems = $('#modelItems');
                var thumbnailContainer = $('.thumbnailContainer');
                var screenTimer = $('#screenTimer');
                //var modelStyle = model.css('width');
                //console.log (modelStyle);
                model.animate({
                    height: '150%',
                    left: '0',
                    top: '-25%',
                    opacity: '0'
                }, 500, 'easeInQuart', function(){
                    $(this).css({
                        'left': '20%',
                        'top': '2.5%',
                        'height': '95%',
                        'opacity': '100'
                    });
                });
                //hide timer
                timer.animate({
                    height: '80%',
                    right: '0%',
                    top: '10%',
                    fontSize: '80vh',
                    opacity: '0'
                }, 500, 'easeInQuart', function(){
                    $(this).css({
                        'top': '30%',
                        'right': '29%',
                        'height': '40%',
                        'font-size': '40vh',
                        'opacity': '100'
                    });
                });
                
                //hide modelPannel, modelItems appear
                setTimeout(function(){
                    modelPanel.hide();                       
                    modelItems.fadeIn(500);
                    screenTimer.fadeIn(500);
                    thumbnailContainer.css({
                        height: '80%',
                        width: '192px'
                    }).animate({
                        height: '100%',
                        width: '240px'
                    },500);
                    setTimeout(function(){
                        screenTimerCountdown (10);
                    }, 1000);
                }, 500);
                
            },1000);        
        }
    }, 1000);
};

//List goodPicks badPicks and calculate bonus
function listScores()
{
    //Parse picks to scoreboard, create lists        
        var goodScoreList = $('#goodScoreList');
        var badScoreList = $('#badScoreList');
        var bonusScoreList = $('#bonusScoreList');
        var totalScoreList = $('#totalScoreList');
        
        goodScoreList.empty();
        badScoreList.empty();
        bonusScoreList.empty();
        totalScoreList.empty();
        bonusList = [];
        
        //Stops timer
        stopScreenTimerCountdown();
               
        //Fill good and bad scores
        for (item in goodPicksPics) {
            //create list element
            var goodLi = document.createElement("div");
            goodLi.setAttribute("class", "scoreboardPicksContainer");
            var goodLiPic = document.createElement("img");
            goodLiPic.src = goodPicksPics[item];
            goodLiPic.setAttribute("class",  "scoreboardPicks");
            goodLi.appendChild(goodLiPic);
            //add to list
            goodScoreList.append(goodLi);
        };
        
        for (item in badPicksPics) {
            //create list element
            var badLi = document.createElement("div");
            badLi.setAttribute("class", "scoreboardPicksContainer");
            var badLiPic = document.createElement("img");
            badLiPic.src = badPicksPics[item];
            badLiPic.setAttribute("class",  "scoreboardPicks");
            badLi.appendChild(badLiPic);
            //add to list
            badScoreList.append(badLi);
        };
        
        //Determine bonus list based on conditions
        // Only good picks
        if (goodPicks.length == nbOfRealItems && badPicks.length == 0)
        {
            bonusList.push('- Flawless memory! (' + goodPicks.length + ' out of ' + nbOfRealItems + ')');
            console.log(bonusList);
        }
        
        // Only good picks and within time limit
        if (goodPicks.length == nbOfRealItems && badPicks.length == 0 && screenTimerLeft > 0)
        {
            bonusList.push('- Within timelimit! (' + screenTimerLeft + ((screenTimerLeft > 1)? ' seconds': ' second') + ' left)');
        }
        
        // Fill bonus list
        var bonusDiv = document.createElement("div");
        bonusDiv.setAttribute("class", "bonusListContainer");
        var bonusUl = document.createElement("ul");
        for (bonus in bonusList) {
            //create list element
            var bonusLi = document.createElement("li");
            var bonusLiSpan = document.createElement("span");
            bonusLiSpan.appendChild(document.createTextNode(bonusList[bonus]));
            bonusLi.appendChild(bonusLiSpan);
            bonusUl.appendChild(bonusLi);
        }
        bonusDiv.appendChild(bonusUl);
        //add to list
        bonusScoreList.append(bonusDiv);
        
        
        //Sums up scores
        var goodSum = document.createElement("div");
        goodSum.setAttribute("class", "scoreSum");
        var goodSumContent = document.createElement("h2");
        goodSumContent.setAttribute("class", "scoreSumContent");
        goodSumContent.appendChild(document.createTextNode("+"+goodPicks.length));
        goodSum.appendChild(goodSumContent);
        goodScoreList.append(goodSum);        
        
        var badSum = document.createElement("div");
        badSum.setAttribute("class", "scoreSum");
        var badSumContent = document.createElement("h2");
        badSumContent.setAttribute("class", "scoreSumContent");
        badSumContent.appendChild(document.createTextNode("-"+badPicks.length));
        badSum.appendChild(badSumContent);
        badScoreList.append(badSum);
        
        var bonusSum = document.createElement("div");
        bonusSum.setAttribute("class", "scoreSum");
        var bonusSumContent = document.createElement("h2");
        bonusSumContent.setAttribute("class", "scoreSumContent");
        bonusSumContent.appendChild(document.createTextNode("+"+bonusList.length));
        bonusSum.appendChild(bonusSumContent);
        bonusScoreList.append(bonusSum);
        
        //Calculate total score
        var totalScoreContent = goodPicks.length - badPicks.length + bonusList.length;
        var totalScore = document.createElement("div");
        totalScore.setAttribute("class", "totalScoreSum");
        totalScore.appendChild(document.createTextNode(totalScoreContent));
        totalScoreList.append(totalScore);
        endScore = totalScoreContent;
        console.log (endScore);
        //totalScoreList
        
        //Animation sequence
        //modelItems and timer disappear
        var modelItems = $('#modelItems');
        var screenTimer = $('#screenTimer');
        var scoreboard = $('#scoreboard');
        var scoreboardPic = $('#scoreboardPic');
        var scoreboardPanel = $('#scoreboardPanel');
        
        modelItems.fadeOut(500);
        screenTimer.fadeOut(500);
        scoreboard.show().css({
            top: '-50%',
            opacity: '0',
        }).
        animate({
            top : '50%',
            opacity: '1'
        }, 1000, 'easeOutQuart');
        
        setTimeout(function(){
            scoreboardPic.animate({
                left: '-22%'
            }, 1000, 'easeOutQuint');
            scoreboardPanel.animate({
                left: '30%'
            }, 1000, 'easeOutQuint');
        }, 1000);
        
        setTimeout(function(){
            $('.scoreDivs').each(function(index) {
                $(this).delay(1000*index).fadeIn(500);
            });
            
            $('#totalScore').delay(3300).fadeIn(1000);
            
        }, 2000);
}

//Post goodPicks badPicks
function postPicks()
{
    var goodPicksObj = {items: goodPicks, count: goodPicks.length};
    var badPicksObj = {items: badPicks, count: badPicks.length};    
    $('#goodPicks').attr('value', JSON.stringify(goodPicksObj));
    $('#badPicks').attr('value', JSON.stringify(badPicksObj));
    $('#endScore').attr('value', endScore);
    $('#level').attr('value', levelId);
    $('#picks').submit();
}

//Screen Timer Countdown script, post picks automatically after time expires
function screenTimerCountdown (seconds) 
{
    var second = 0;
    frame();
    timerBar = setInterval(frame, 1000);
    function frame()
    {
        var elId = String('#timerBar'+second);
        if (second == (seconds))
        {
            clearInterval(timerBar);
            //redirect to next level
            listScores();
            //postPicks();
        } else {
            $(elId).animate({
                background: 'red',
                opacity: '0'
            }, 800);
            screenTimerLeft--;
            //console.log(screenTimerLeft);
            second++;   
        };
    };
}

function stopScreenTimerCountdown()
{
    clearInterval(timerBar);
}

//Get viewport
function getViewport() {
    var viewPortWidth;
    var viewPortHeight;

    // the more standards compliant browsers (mozilla/netscape/opera/IE7) use window.innerWidth and window.innerHeight
    if (typeof window.innerWidth != 'undefined') {
      viewPortWidth = window.innerWidth,
      viewPortHeight = window.innerHeight
    }

   // IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)
    else if (typeof document.documentElement != 'undefined'
    && typeof document.documentElement.clientWidth !=
    'undefined' && document.documentElement.clientWidth != 0) {
       viewPortWidth = document.documentElement.clientWidth,
       viewPortHeight = document.documentElement.clientHeight
    }

    // older versions of IE
    else {
      viewPortWidth = document.getElementsByTagName('body')[0].clientWidth,
      viewPortHeight = document.getElementsByTagName('body')[0].clientHeight
    }
    //return [viewPortWidth, viewPortHeight];
    $('#viewport').text('h: '+ viewPortHeight + ', w: ' + viewPortWidth);
}


// Functions after document ready, load sequence
$(function(){
    //testing buttons
    /*
    $("#timerBar0").click(function(){
        screenTimerCountdown (10);
    });*/
    
    //submit picks scoreboard appear
    $("#submitPicks").click(function(){
        listScores();
    });
    
    $("#hide").click(function(){
        $("#modelPanel").hide();
    });
    $("#show").click(function(){
        $("#modelPanel").show();
    });

    $("#button1-hide").click(function(){
        $('#modelItems').toggle();
        $(this).text(function(i,text){
            return text === "Hide" ? "Show" : "Hide";
        });
    });
    
    
    //Submit button
    
    $("#go").click(function(){
        postPicks();
        //listScores();
    });

    //Highlight items
    $(".thumbnailContainer").mouseenter(function(){
        $(this).animate({
            height: '115%',
            width: '276px',
            boxShadow: '5px 5px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)'
            //borderStyle: 'dashed',
            //borderColor: '#99ff00',
            //borderWidth: '5px',
        });
    });

    $(".thumbnailContainer").mouseleave(function(){
        if (!$(this).hasClass('selected'))
        {
            $(this).animate({
                height: '100%',
                width: '240px',
                boxShadow: '0px 0px 0px 0 rgba(0, 0, 0, 0.2), 0 0px 0px 0 rgba(0, 0, 0, 0.19)'
                //borderStyle: 'solid',
                //borderColor: '#99ff00',
                //borderWidth: '0px',
            });
        }
    });

    //Select items and register picks
    $(".thumbnailContainer").click(function(){
        $(this).toggleClass('selected');
        var pattern = /fake/;
        var currentId = $(this).attr('id');
        var currentPic = $(this).attr('data-pic-src');
        var goodText = '';
        var badText = '';
        
        // on selection insert to arrays
        if ($(this).hasClass('selected')) {
            $(this).animate({
                height: '115%',
                width: '276px',
                boxShadow: '5px 5px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)'
                //borderStyle: 'dashed',
                //borderColor: '#99ff00',
                //borderWidth: '5px',
            });
            
            if (pattern.test(currentId)) {
                badPicks.push(currentId);
                badPicksPics.push(currentPic);
            } else {
                goodPicks.push(currentId);
                goodPicksPics.push(currentPic);
            };
        // on deselection remove from arrays
        } else {
            $(this).animate({
                height: '100%',
                width: '240px',
                boxShadow: '0px 0px 0px 0 rgba(0, 0, 0, 0.2), 0 0px 0px 0 rgba(0, 0, 0, 0.19)'
                //borderStyle: 'solid',
                //borderColor: '#99ff00',
                //borderWidth: '0px',
            });
            
            if (pattern.test(currentId)) {
                badPicks.pop(currentId);
                badPicksPics.pop(currentPic);
            } else {
                goodPicks.pop(currentId);
                goodPicksPics.pop(currentPic);
            }
        };
        
        //Showing picks for testing
        for (item in goodPicks) {
            goodText += goodPicks[item] + ', ';
        };
        for (item in badPicks) {
            badText += badPicks[item] + ', ';
        };
        $('#gPicks').text(goodText);
        $('#bPicks').text(badText);

        //console.log(goodPicks);
        //console.log(badPicks);
    });

    //evaluate picks
    
    //Start animation sequence
    //modelPanel appear
    $('#modelPanel').fadeIn(1400);
    //model appear
    $('#model').css('left', '-800px').
        animate({
            left: '20%'
        }, 1000, 'easeOutQuart');
    //timer appear
    $('#timer').css('right', '-800px').
        animate({
            right: '29%'
        }, 1000, 'easeOutQuart');
        
    //countdown timer, modelPanel disappear, modelItems appear
    setTimeout(function(){
        timerLoop(Number($('#timer').text()));
    }, 1000);
    
    
    //show viewport
    var viewport = setInterval(getViewport, 1000);
    

});        


