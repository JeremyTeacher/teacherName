//link tester
console.log('POGGERS');

//initialize AOS.js
AOS.init();

//jquery initialization
$(function(){

$('#scrollbtn1').on('click', function(e){
  e.preventDefault();
  $('html, body').animate({scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
});


  //Responsive navbar js
  $('.icon').click(function(){
    var a = $('#topnavbar');
    if(a.hasClass('topnav')){
      a.toggleClass('responsive');
      //$('#home-link').toggleClass('childclear');
      //$('#portfolio-link').toggleClass('childclear');
      //$('#contact-link').toggleClass('childclear');
      $('.topnav a').toggleClass('childclear');
    }

    })








});
