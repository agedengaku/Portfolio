/*jslint browser: true*/
/*global $, jQuery*/

$(document).ready(function () {

  'use strict';
  
  // variable prevents scroll event from removing and adding active class repeatedly when animate scrollTop is triggered
  var clicked = false;

  function inViewport(element){
    var bb = element.getBoundingClientRect();
    return !(bb.top>innerHeight-200||bb.bottom<200);
  }
  
  var intro = document.querySelector('#intro-block');
  var portfolio = document.querySelector('#portfolio-block');
  var education = document.querySelector('#education-block');
  var contact = document.querySelector('#contact-block');
  
  $(window).on('scroll', function(){
    pageState();
  });  
  
  function pageState() {
    
    if(inViewport(intro)){
      if (!clicked) {
        $('.nav-link').removeClass('active');
        $('.intro-link').addClass('active');
      }  
      $('#intro-block').css('opacity','1');
      $('#portfolio-block').css('opacity', '0');
      $('#education-block').css('opacity', '0');      
      $('#contact-block').css('opacity', '0');      
      $('body').removeClass('changeColor8');
      $('.myname').css('opacity', '0');      
    }     
    if(inViewport(portfolio)){
      if (!clicked) {
        $('.nav-link').removeClass('active');      
        $('.portfolio-link').addClass('active');  
      }
      $('#intro-block').css('opacity','0');      
      $('#portfolio-block').css('opacity', '1');
      $('#education-block').css('opacity', '0');  
      $('#contact-block').css('opacity', '0');          
      $('body').addClass('changeColor8');  
      $('.myname').css('opacity', '1');
      $('.myname').addClass('animated zoomIn');
    } 
    if(inViewport(education)){
      if (!clicked) {
        $('.nav-link').removeClass('active');      
        $('.education-link').addClass('active');  
      }
      $('#intro-block').css('opacity','0');       
      $('#portfolio-block').css('opacity','0');
      $('#education-block').css('opacity', '1'); 
      $('#contact-block').css('opacity', '0');          
      $('body').removeClass('changeColor8'); 
      $('.myname').css('opacity', '1');
      $('.myname').addClass('animated zoomIn');      
    } 
    if(inViewport(contact)){
      if (!clicked) {
        $('.nav-link').removeClass('active');      
        $('.contact-link').addClass('active');  
      }
      $('#intro-block').css('opacity','0');       
      $('#portfolio-block').css('opacity','0');
      $('#education-block').css('opacity', '0'); 
      $('#contact-block').css('opacity', '1');          
      $('body').removeClass('changeColor8'); 
      $('.myname').css('opacity', '1');
      $('.myname').addClass('animated zoomIn');      
    }     
    
  }

  pageState();

  $('.card-body-content').hide();
  $('.btn-show-hide').click(function () {
    $(this).prev().slideToggle(500);
    $(this).toggleClass('btn-hide');
  });

  //navbar link navigation
  $('.intro-link').click(function () {
    clicked = true;
    $('.nav-link').removeClass('active');
    $('.intro-link').addClass('active');
    $('html, body').animate({scrollTop: $('#intro-block').offset().top - 240}, 1000, function(){
      clicked = false;
    });
  });

  $('.portfolio-link').click(function () { 
    clicked = true;
    $('.nav-link').removeClass('active');
    $('.intro-link').addClass('active');    
    $('html, body').animate({scrollTop: $('#portfolio-block').offset().top - 120}, 1000, function(){
      clicked = false;
    });
  });
	
  $('.education-link').click(function () {
    clicked = true;
    $('.nav-link').removeClass('active');
    $('.intro-link').addClass('active');       
    $('html, body').animate({scrollTop: $('#education-block').offset().top - 120}, 1000, function(){
      clicked = false;
    });
  });	

  $('.contact-link').click(function () {
    clicked = true;
    $('.nav-link').removeClass('active');
    $('.contact-link').addClass('active');     
    $('html, body').animate({scrollTop: $('#contact-block').offset().top - 120}, 1000, function(){
      clicked = false;
    });
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
