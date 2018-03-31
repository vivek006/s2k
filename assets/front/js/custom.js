// $(document).ready(function(){
// 	 $(".button-collapse").sideNav();
// });

$(document).ready(function(){
	$(".button-collapse").sideNav();
    $('.slider').slider({full_width: true});
    $('.parallax').parallax();
    // $('#textarea1').val('New Text');
	$('#textarea1').trigger('autoresize');
    });
    var count_flag = 1;


    $('#mobile-demo').on('click',function(e){
           $("#wrapper").css("margin: 0; padding: 0;font-size: 14px;line-height: 20px;}");
           $("#mobile-demo").css('left: -250px !important;');
    });
   
    $(".jumper").on("click", function( e ) {
        
        e.preventDefault();

        $("body, html").animate({ 
            scrollTop: $( $(this).attr('href') ).offset().top 
        }, 600);
    
});


    $(document).ready(function(){

    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });    
        
    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });

    $('#media').carousel({
        pause: true,
        interval: false,
    });


    $(".whatwedo-btn").click(function() {
        $('html,body').animate({
            scrollTop: $(".wedo").offset().top},
            'slow');
    });

    });