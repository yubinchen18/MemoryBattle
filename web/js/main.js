var goodPicks = [];
var goodPicksPics = [];
var badPicks = [];
var badPicksPics = [];

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

//List goodPicks badPicks
function listPicks()
{
    //Parse picks to scoreboard, create lists
        //var goodUl = document.createElement("ul");
        var goodUl = document.createElement("div");
        goodUl.setAttribute("class", "scoreListDiv")
        var badUl = document.createElement("ul");
               
        for (item in goodPicksPics) {
            //create list element
            //var goodLi = document.createElement("li");
            var goodLiPic = document.createElement("img");
            goodLiPic.src = goodPicksPics[item];
            goodLiPic.setAttribute("class",  "scoreboardPicks");
            //goodLi.appendChild(goodLiPic);
            //add to list
            goodUl.appendChild(goodLiPic);
        };
        for (item in badPicksPics) {
            //create list element
            var badLi = document.createElement("li");
            var badLiPic = document.createElement("img");
            badLiPic.src = badPicksPics[item];
            badLiPic.setAttribute("class",  "scoreboardPicks");
            badLi.appendChild(badLiPic);
            //add to list
            badUl.appendChild(badLi);
        };
        
        //Show the lists on scoreboard
        $('#goodScoreList').html(goodUl);
        $('#badScoreList').html(badUl);
}

//Post goodPicks badPicks
function postPicks()
{
    var goodPicksObj = {items: goodPicks, count: goodPicks.length};
    var badPicksObj = {items: badPicks, count: badPicks.length};    
    $('#goodPicks').attr('value', JSON.stringify(goodPicksObj));
    $('#badPicks').attr('value', JSON.stringify(badPicksObj));
    $('#picks').submit();
}

//Screen Timer Countdown script, post picks automatically after time expires
function screenTimerCountdown (seconds) 
{
    var second = 0;
    frame();
    var timerBar = setInterval(frame, 1000);
    function frame()
    {
        var elId = String('#timerBar'+second);
        if (second == (seconds))
        {
            clearInterval(timerBar);
            //redirect to next level
            
            //postPicks();
        } else {
            $(elId).animate({
                background: 'red',
                opacity: '0'
            }, 800);
            second++;   
        };
    };
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
        //postPicks();
        listPicks();
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


