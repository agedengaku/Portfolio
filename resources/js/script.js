$(document).ready(function(){
  
  $(window).scroll(function(){
    if ($(this).scrollTop() > 500) {
      $('#portfolio-block').css('opacity','1');
//      $('.card').css('opacity','1');
    }
  });
  
  function bodyColor() {
    
        if ($(window).scrollTop() > 500) {
      $('#portfolio-block').css('opacity','1');
//      $('.card').css('opacity','1');
    }
    
    if ($(window).scrollTop() < 300) {
      $('body').removeClass('changeColor1');
    }   
    if ($(window).scrollTop() > 300) {
      $('body').addClass('changeColor1');
    }
    if ($(window).scrollTop() > 350) {
      $('body').addClass('changeColor2');
      $('body').removeClass('changeColor1');
    }
    if ($(window).scrollTop() > 400) {
      $('body').addClass('changeColor3');
      $('body').removeClass('changeColor2');
    }
    if ($(window).scrollTop() > 450) {
      $('body').addClass('changeColor4');
      $('body').removeClass('changeColor3');
    }
    if ($(window).scrollTop() > 500) {
      $('body').addClass('changeColor5');
      $('body').removeClass('changeColor4');
    }
    if ($(window).scrollTop() > 550) {
      $('body').addClass('changeColor6');
      $('body').removeClass('changeColor5');
    }
    if ($(window).scrollTop() > 600) {
      $('body').addClass('changeColor7');
      $('body').removeClass('changeColor6');
    }
    if ($(window).scrollTop() > 650) {
      $('body').addClass('changeColor8');
      $('body').removeClass('changeColor7');
    }  
    if ($(window).scrollTop() < 650) {
      $('body').removeClass('changeColor8');
    }
    if ($(window).scrollTop() < 600) {
      $('body').removeClass('changeColor7');
    }
    if ($(window).scrollTop() < 550) {
      $('body').removeClass('changeColor6');
    }
    if ($(window).scrollTop() < 500) {
      $('body').removeClass('changeColor5');
    }
    if ($(window).scrollTop() < 450) {
      $('body').removeClass('changeColor4');
    }
    if ($(window).scrollTop() < 400) {
      $('body').removeClass('changeColor3');
    }
    if ($(window).scrollTop() < 350) {
      $('body').removeClass('changeColor2');
    }
  }
  
  bodyColor();
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  $('.test1').hide();
$('.btn-test').click(function(){
  $('.test1').toggle(500);
});  
  
  
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

 $(window).scroll(function () {
   bodyColor();
 });	

//SOURCE: https://bootsnipp.com/snippets/PEkG1
$('.navbar-toggler').click(function(){
       // alert("open");
	if (!$('.navbar-collpase').hasClass('show')) {
			$('#nav-icon0').addClass('open');
		  $('.nav-item').addClass('active-collapsed');
    }
	if ($('.navbar-collapse').hasClass('show')) {
	    $('#nav-icon0').removeClass('open');
			$('.nav-item').removeClass('active-collapsed');
	}
});
//END SOURCE
	





});