/*jslint browser: true*/
/*global $, jQuery*/

$(document).ready(function () {

  'use strict';

  function inViewport(element){
    var bb = element.getBoundingClientRect();
    return !(bb.top>innerHeight-200||bb.bottom<200);
  }
  
  var intro = document.querySelector('#intro-block');
  var portfolio = document.querySelector('#portfolio-block');
  var education = document.querySelector('#education-block');
  
  $(window).scroll(function(){
    if(inViewport(intro)){
      $('#intro-block').css('opacity','1');
      $('#portfolio-block').css('opacity', '0');
      $('#education-block').css('opacity', '0');      
      $('body').removeClass('changeColor8');    
    }     
    if(inViewport(portfolio)){
      $('#intro-block').css('opacity','0');      
      $('#portfolio-block').css('opacity', '1');
      $('#education-block').css('opacity', '0');       
      $('body').addClass('changeColor8');    
    } 
    if(inViewport(education)){
      $('#intro-block').css('opacity','0');       
      $('#portfolio-block').css('opacity','0');
      $('#education-block').css('opacity', '1');      
      $('body').removeClass('changeColor8');    
    } 

       
  });
//  document.addEventListener('scroll', event => {
//
//  });
  
//function isScrolledIntoView(elem){
//  var $elem = $(elem);
//  var $window = $(window);
//
//  var docViewTop = $window.scrollTop();
//  var docViewBottom = docViewTop + $window.height();
//
//  var elemTop = $elem.offset().top;
//  var elemBottom = elemTop + $elem.height();
//
//  return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
//}
//
//$(window).scroll(function(){
//    if(isScrolledIntoView($('#portfolio-block'))){
//      $('#portfolio-block').css('opacity', '1');
//      $('body').addClass('changeColor8');
//    } else {

//    }
//});
  
  
  
  function bodyColor() {

//    if ($(window).scrollTop() > 500) {
//      $('#portfolio-block').css('opacity', '1');
//      $('body').addClass('changeColor8');
//    }
//    if ($(window).scrollTop() < 500) {
//      $('#portfolio-block').css('opacity', '0');
//      $('body').removeClass('changeColor8');
//    }
//    
    
    
    
    
    
    
//    if ($(window).scrollTop() < 300) {
//      $('body').removeClass('changeColor1');
//    }
//    if ($(window).scrollTop() > 300) {
//      $('body').addClass('changeColor1');
//    }
//    if ($(window).scrollTop() > 350) {
//      $('body').addClass('changeColor2');
//      $('body').removeClass('changeColor1');
//    }
//    if ($(window).scrollTop() > 400) {
//      $('body').addClass('changeColor3');
//      $('body').removeClass('changeColor2');
//    }
//    if ($(window).scrollTop() > 450) {
//      $('body').addClass('changeColor4');
//      $('body').removeClass('changeColor3');
//    }
//    if ($(window).scrollTop() > 500) {
//      $('body').addClass('changeColor5');
//      $('body').removeClass('changeColor4');
//    }
//    if ($(window).scrollTop() > 550) {
//      $('body').addClass('changeColor6');
//      $('body').removeClass('changeColor5');
//    }
//    if ($(window).scrollTop() > 600) {
//      $('body').addClass('changeColor7');
//      $('body').removeClass('changeColor6');
//    }
//    if ($(window).scrollTop() > 650) {
//      $('body').addClass('changeColor8');
//      $('body').removeClass('changeColor7');
//    }
//    if ($(window).scrollTop() < 650) {
//      $('body').removeClass('changeColor8');
//    }
//    if ($(window).scrollTop() < 600) {
//      $('body').removeClass('changeColor7');
//    }
//    if ($(window).scrollTop() < 550) {
//      $('body').removeClass('changeColor6');
//    }
//    if ($(window).scrollTop() < 500) {
//      $('body').removeClass('changeColor5');
//    }
//    if ($(window).scrollTop() < 450) {
//      $('body').removeClass('changeColor4');
//    }
//    if ($(window).scrollTop() < 400) {
//      $('body').removeClass('changeColor3');
//    }
//    if ($(window).scrollTop() < 350) {
//      $('body').removeClass('changeColor2');
//    }
    
    
    
    
    
//    if ($(window).scrollTop() > 3500) {
//      $('body').removeClass('changeColor8');
//    }
//    if ($(window).scrollTop() < 3500 && $(window).scrollTop() > 650) {
//      $('body').addClass('changeColor8');
//    }
//    if ($(window).scrollTop() > 3700) {
//      $('#education-block').css('opacity', '0');
//      $('#contact-block').css('opacity', '1');
//    }
//    if ($(window).scrollTop() < 3700) {
//      $('#education-block').css('opacity', '1');
//    }
    
    
    
    
    
  }

  bodyColor();

//  $(window).scroll(function () {
//    bodyColor();
//  });

  $('.card-body-content').hide();
  $('.btn-show-hide').click(function () {
    $(this).prev().slideToggle(500);
    $(this).toggleClass('btn-hide');
  });

  //navbar link navigation
  $('.intro-link').click(function () {
    $('html, body').animate({scrollTop: $('#intro-block').offset().top - 120}, 1000);
  });

  $('.portfolio-link').click(function () {
    $('html, body').animate({scrollTop: $('#portfolio-block').offset().top - 120}, 1000);
  });
	
  $('.education-link').click(function () {
    $('html, body').animate({scrollTop: $('#education-block').offset().top - 120}, 1000);
  });	

  $('.contact-link').click(function () {
    $('html, body').animate({scrollTop: $('#contact-block').offset().top - 120}, 1000);
  });

  //label animation
  $('.js-name-input').keypress(function (direction) {
    $('.js-name-label').css('display', 'block');
    $('.js-name-label').addClass('animated fadeInUp');
  });

  $('.js-email-input').keypress(function (direction) {
    $('.js-email-label').css('display', 'block');
    $('.js-email-label').addClass('animated fadeInUp');
  });

  $('.js-phone-input').keypress(function (direction) {
    $('.js-phone-label').css('display', 'block');
    $('.js-phone-label').addClass('animated fadeInUp');
  });

  $('.js-message-input').keypress(function (direction) {
    $('.js-message-label').css('display', 'block');
    $('.js-message-label').addClass('animated fadeInUp');
  });

  //Submit button animation
  $('#contact-block').waypoint(function (direction) {
    $('.submit-button').addClass('animated pulse');
  }, {
    offset: '20%'
  });

	//Popover initialization
	$('[data-toggle="popover"]').popover(); 

	
//SOURCE: https://bootsnipp.com/snippets/PEkG1
  $('.navbar-toggler').click(function () {
    if (!$('.navbar-collpase').hasClass('show')) {
      $('#nav-icon0').addClass('open');
//		  $('.nav-item').addClass('active-collapsed');
    }
    if ($('.navbar-collapse').hasClass('show')) {
      $('#nav-icon0').removeClass('open');
//			$('.nav-item').removeClass('active-collapsed');
    }
  });
//END SOURCE

});
