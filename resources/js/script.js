$(document).ready(function(){
  
  //navbar link navigation
  $('.intro-link').click(function(){ 
    $('html, body').animate({scrollTop: $('#intro-block').offset().top - 120}, 1000);
    });
  
  $('.portfolio-link').click(function(){ 
    $('html, body').animate({scrollTop: $('#portfolio-block').offset().top - 120}, 1000);
  });
  
  $('.contact-link').click(function(){ 
    $('html, body').animate({scrollTop: $('#contact-block').offset().top - 120}, 1000);
  });

  //label animation
  $('.js-name-input').keypress(function(direction){
    $('.js-name-label').css('display', 'block')
    $('.js-name-label').addClass('animated fadeInUp');
  }); 

  $('.js-email-input').keypress(function(direction){
    $('.js-email-label').css('display', 'block')
    $('.js-email-label').addClass('animated fadeInUp');
  });
  
  $('.js-phone-input').keypress(function(direction){
    $('.js-phone-label').css('display', 'block')
    $('.js-phone-label').addClass('animated fadeInUp');
  });
  
  $('.js-message-input').keypress(function(direction){
    $('.js-message-label').css('display', 'block')
    $('.js-message-label').addClass('animated fadeInUp');
  });  

  //Submit button animation
  $('#contact-block').waypoint(function(direction){
    $('.submit-button').addClass('animated pulse');
  }, {
    offset: '20%'
  });
//SOURCE: https://embed.plnkr.co/plunk/HLqrJ6  
//  $('[data-toggle="popover"]').popover({trigger: "manual", html: true, animation: false})
//    .on("mouseenter", function (){
//      let that = this;
//      $(this).popover("show");
//      $(".popover").on("mouseleave", function (){
//        $(that).popover('hide');
//      });
//    }).on("mouseleave", function(){
//      let that = this;
//      setTimeout(function(){
//        if (!$(".popover:hover").length) {
//          $(that).popover("hide");
//        }
//    },200);
//}); 
//END SOURCE  
//  $(document).on('click touchstart', '.close-popover', function() {
//    $('.popover').popover('hide');
//  });
//SOURCE: https://stackoverflow.com/questions/7069458/prevent-touchstart-when-swiping  
//    let touchmoved;
//    $('body div:not(.popover)').on('touchend', function(){
//      if(!touchmoved){
//        $('.popover').popover('hide');
//      }
//    }).on('touchmove', function(){
//          touchmoved = true;    
//    }).on('touchstart', function(){
//          touchmoved = false;
//    }); 
//END SOURCE

//SOURCE: https://bootsnipp.com/snippets/PEkG1
$('.navbar-toggler').click(function(){
       // alert("open");
    if (!$('.navbar-collpase').hasClass('show')) {
        $('#nav-icon0').addClass('open');    
    }
	if ($('.navbar-collapse').hasClass('show')) {
	    $('#nav-icon0').removeClass('open');    
	}
});
//END SOURCE


});