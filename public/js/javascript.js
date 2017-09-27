$(document).ready(function(){
        $("#circular_sell").mouseenter(function() {
            $(this).css({"background-color" : "#062F4F", "height" : "200px", "width" : "200px", "border-radius" : "100px"});
            $(".icon", this).css("font-size", "10em");
            $("#circular-text-sell").css("font-size", "7em");
         })
        
        $("#circular_sell").mouseleave(function() {
            $(this).css({"background-color" : "cyan", "height" : "150px", "width" : "150px", "border-radius" : "75px"});
            $(".icon", this).css("font-size", "8em");
            $("#circular-text-sell").css("font-size", "5em");
         })
        
        $("#circular_sell").click(function() {
            $('html, body').animate({
        scrollTop: $("#sell").offset().top
            }, 1000);
        })
        
        $("#circular_call").mouseenter(function() {
            $(this).css({"background-color" : "#062F4F", "height" : "200px", "width" : "200px", "border-radius" : "100px"});
            $(".icon", this).css("font-size", "10em");
            $("#circular-text-call").css("font-size", "7em");
         })
        
        $("#circular_call").mouseleave(function() {
            $(this).css({"background-color" : "cyan", "height" : "150px", "width" : "150px", "border-radius" : "75px"});
            $(".icon", this).css("font-size", "8em");
            $("#circular-text-call").css("font-size", "5em");
         })
        
        $("#circular_call").click(function() {
            $('html, body').animate({
        scrollTop: $("#call").offset().top
            }, 1000);
        })
        
        $("#circular_buy").mouseenter(function() {
            $(this).css({"background-color" : "#062F4F", "height" : "200px", "width" : "200px", "border-radius" : "100px"});
            $(".icon", this).css("font-size", "10em");
            $("#circular-text-buy").css("font-size", "7em");
         })
        
        $("#circular_buy").mouseleave(function() {
            $(this).css({"background-color" : "cyan", "height" : "150px", "width" : "150px", "border-radius" : "75px"});
            $(".icon", this).css("font-size", "8em");
            $("#circular-text-buy").css("font-size", "5em");
         })
        
        $("#circular_buy").click(function() {
            $('html, body').animate({
        scrollTop: $("#buy").offset().top
            }, 1000);
        })
        
        
     });
    
    $(document).ready(function(){
        $("#circular_sell").mouseleave(function() {
            $(this).css({"background-color" : "aqua", "height" : "150px", "width" : "150px", "border-radius" : "75px"});
            $(".icon", this).css("font-size", "8em");
        })
     });

//buy.html

$(document).scroll(function() {
  var documentScrollTop = $(document).scrollTop();
  if (documentScrollTop > $('#header').height()) {
    $('.navigation_bar').addClass('fixedattop');
    var shiftContent = $('.navigation_bar').height();
    $('#content').css('margin-top', shiftContent + 'px');
  }
  else if ($('.navigation_bar').hasClass('fixedattop')) {
    $('.navigation_bar').removeClass('fixedattop');
    $('#content').css('margin-top', '0px');
  }
});

function onClickBuy() {
    var r = confirm("Are you sure you want to buy this book?");
    if(r == true)
        {
            alert("Your response has been recorded. Your contact details have been sent to the seller. Thanks for using this portal!");
        }
}



