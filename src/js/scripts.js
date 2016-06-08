(function($) {

  // NAV
  var navBtn = $(".primary-nav__btn");
  var navLinks = $(".primary-nav__links");

  navBtn.on("click", function(){
    navLinks.toggleClass("primary-nav__links--open");
  });

  var subNav = $(".sub-nav");
  var subNavTop = subNav.offset().top;
  var subnavBtn = $(".sub-nav__btn");
  var subnavLinks = $(".sub-nav__links");

  subnavBtn.on("click", function(){
    subnavLinks.toggleClass("sub-nav__links--open");
  });

  $(window).scroll(function() {
    if( $(this).scrollTop() > subNavTop ) {
      subNav.addClass("sub-nav--fixed");
    } else {
      subNav.removeClass("sub-nav--fixed");
    }
  });

  // DATEPICKER
  var d = $( ".datepicker" );
  d.datepicker({
    minDate: new Date(),
    nextText: '<i class="fa fa-caret-right"></i>',
    prevText: '<i class="fa fa-caret-left"></i>'
  });

})(jQuery);
