var goodPicks = [];
var badPicks = [];

//Interface functions


//Timer Countdown then hide screen panel
function timerLoop (i) {
    setTimeout(function () {
        var timer = $('#timer');
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
                    screenTimerCountdown (10);
                }, 500);
                
            },1000);        
        }
    }, 1000);
};

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
        } else {
            $(elId).animate({
                opacity: '0'
            }, 800);
            second++;   
        };
    };
}


// Functions after document ready
$(function(){
    //testing buttons
    $("#timerBar0").click(function(){
        screenTimerCountdown (10);
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

    //Highlight items
    $(".thumbnailContainer").mouseenter(function(){
        $(this).animate({
            height: '115%',
            width: '276px',
            //boxShadow: '0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)'
            //borderStyle: 'dashed',
            //borderColor: '#99ff00',
            //borderWidth: '5px',
        });
    });

    $(".thumbnailContainer").mouseleave(function(){
        $(this).animate({
            height: '100%',
            width: '240px',
            //borderStyle: 'solid',
            //borderColor: '#99ff00',
            //borderWidth: '0px',
        });
    });

    //Select items and register picks
    $(".thumbnailContainer").click(function(){
        $(this).toggleClass('selected');
        var pattern = /fake/;
        var currentId = $(this).attr('id');
        var goodText = '';
        var badText = '';

        if ($(this).hasClass('selected')) {
            if (pattern.test(currentId)) {
                badPicks.push(currentId);
            } else {
                goodPicks.push(currentId);
            };                 
        } else {
            if (pattern.test(currentId)) {
                badPicks.pop(currentId);
            } else {
                goodPicks.pop(currentId);
            }
        };

        for (item in goodPicks) {
            goodText += goodPicks[item] + ', ';
        };
        for (item in badPicks) {
            badText += badPicks[item] + ', ';
        };

        $('#goodPicks').text(goodText);
        $('#badPicks').text(badText);

        console.log(goodPicks);
        console.log(badPicks);
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
    
    //screenTimer animation
    /*
    for*/ 
    
        

});        


