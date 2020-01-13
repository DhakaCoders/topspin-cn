(function($) {
var windowWidth = $(window).width();

$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});




$('.toggle-btn').on('click', function(){
  $(this).toggleClass('menu-expend');
  $('.toggle-bar ul').slideToggle(500);
});


//md-popup-main-menu

if (windowWidth <= 991) {
  if( $('.md-menu-humberger-btn').length ){
    $('.md-menu-humberger-btn').on('click', function(){
      $('.md-popup-main-menu-wrap').fadeIn(500);
      $('body').addClass('srlOff');
    });
  };

  if( $('.md-menu-popup-close-btn').length ){
    $('.md-menu-popup-close-btn').on('click', function(){
      $('.md-popup-main-menu-wrap').fadeOut(500);
      $('body').removeClass('srlOff');
    });
  };
}


	
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
 

//counter button
if( $('.pro-des-qty').length ){
  $('.qty').each(function() {
    var spinner = $(this),
      input = spinner.find('input[type="number"]'),
      btnUp = spinner.find('.plus'),
      btnDown = spinner.find('.minus'),
      min = 1,
      max = input.attr('max');

    btnUp.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue <= max) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

    btnDown.click(function() {
      var oldValue = parseFloat(input.val());
      if (oldValue <= min) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue - 1;
      }
      spinner.find("input").val(newVal);
      spinner.find("input").trigger("change");
    });

  });
}  




})(jQuery);