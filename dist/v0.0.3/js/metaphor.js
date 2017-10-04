(function($) {

  var navBtn = $(".primary-nav__btn");
  var navLinks = $(".primary-nav__links");

  navBtn.on("click", function(){
    navLinks.toggleClass("primary-nav__links--open");
  });

  var subnavBtn = $(".sub-nav__btn");
  var subnavLinks = $(".sub-nav__links");

  subnavBtn.on("click", function(){
    subnavLinks.toggleClass("sub-nav__links--open");
  });

})(jQuery);

//# sourceMappingURL=metaphor.js.map
