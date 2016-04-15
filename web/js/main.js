var goodPicks = [];
var badPicks = [];

//Interface functions


//Timer Countdown
function timerLoop (i) {
    setTimeout(function () {
        //var num = Number($('#timer').text());
        //var label = String(num-i);
        $('#timer').fadeOut(500);
        setTimeout(function(){
            $('#timer').text(i).fadeIn(500);
        }, 500);
        //console.log(label);
        if (--i) {          // If i > 0, keep going
            timerLoop(i);       // Call the loop again, and pass it the current value of i
        } else {
            setTimeout(function(){
                $('#modelPanel').animate({
                height: '150%',
                width: '150%',
                left: '-25%',
                top: '-25%',
                opacity: '0'
                }, 500, 'easeInQuart', function(){
                    $(this).hide();
                }); 
            },1000);        
        }
    }, 1000);
};



// Functions after document ready
$(function(){
    //testing buttons
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

    //modelPanel Appear
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
        
    //countdown timer
    setTimeout(function(){
        timerLoop(Number($('#timer').text()));
    }, 1500);
    
        

});        


