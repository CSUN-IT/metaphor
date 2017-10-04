(function($) {
  $(function() {
    var doc = $(document);

    // NAV
    var navBtn = $(".primary-nav__btn");
    var navLinks = $(".primary-nav__links");

    navBtn.on("click", function(){
      navLinks.toggleClass("primary-nav__links--open");
    });

    // SUB NAV
    if (doc.hasClass('sub-nav')) {
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
    }

    // DATEPICKER
    var d = $( ".datepicker" );
    d.datepicker({
      // minDate: new Date(),
      nextText: '<i class="fa fa-caret-right"></i>',
      prevText: '<i class="fa fa-caret-left"></i>'
    });

    // MODALS
    $('*[data-modal]').click(function(e){
        e.preventDefault();
        var target = $(this).data('modal');
        $(target).addClass('modal--show');
    });

    // Close Modal Button
    $('*[data-modal-close]').click(function(e){
       e.preventDefault();
      $(document).find('.modal__outer.modal--show').removeClass('modal--show');
    });

    // Close Alerts
    var closeLinks = $('*[data-alert-close]');
    closeLinks.on('click', closeHandleMethod);

    function closeHandleMethod(e) {
      e.preventDefault();
      $(this).parent().hide();
    }

    // Close Tag
    $('.tag--close').on('click', function(e){
      e.preventDefault();
      $(this).hide();
    });
  });
})(jQuery);
