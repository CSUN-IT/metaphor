(function ($) {

  'use strict';

  // Vars
  var accordion = $('.accordion'),
    accordionHeader = $('.accordion__header'),
    accordionContent = $('.accordion__content'),
    showOneAnswerAtATime = false;

  /**
   * Save question focus
   */
  var saveFocus = function (elem, thisAccordionHeaders) {

    // Reset other tab attributes
    thisAccordionHeaders.each(function () {
      $(this).attr('tabindex', '-1');
      $(this).attr('aria-selected', 'false');
    });

    // Set this tab attributes
    elem.attr({
      'tabindex': '0',
      'aria-selected': 'true'
    });

  };

  /**
   * Show answer on click
   */
  var showHeader = function (elem, thisAccordionHeaders) {
    var thisFaqAnswer = elem.next();

    // Save focus
    saveFocus(elem, thisAccordionHeaders);

    // Set this tab attributes
    if (thisFaqAnswer.hasClass('accordion__content--show')) {
      // Hide answer
      thisFaqAnswer.removeClass('accordion__content--show');
      elem.attr('aria-expanded', 'false');
      thisFaqAnswer.attr('aria-hidden', 'true');
    } else {
      if (showOneAnswerAtATime) {
        // Hide all answers
        accordionContent.removeClass('accordion__content--show').attr('aria-hidden', 'true');
        accordionHeader.attr('aria-expanded', 'false');
      }

      // Show answer
      thisFaqAnswer.addClass('accordion__content--show');
      elem.attr('aria-expanded', 'true');
      thisFaqAnswer.attr('aria-hidden', 'false');
    }
  };

  /**
   * Keyboard interaction
   */
  var keyboardInteraction = function (elem, e, thisAccordionHeaders) {
    var keyCode = e.which,
      nextQuestion = elem.next().next().is('dt') ? elem.next().next() : false,
      previousQuestion = elem.prev().prev().is('dt') ? elem.prev().prev() : false,
      firstQuestion = elem.parent().find('dt:first'),
      lastQuestion = elem.parent().find('dt:last');

    switch(keyCode) {
    // Left/Up
    case 37:
    case 38:
      e.preventDefault();
      e.stopPropagation();

      // Check for previous question
      if (!previousQuestion) {
        // No previous, set focus on last question
        lastQuestion.focus();
      } else {
        // Move focus to previous question
        previousQuestion.focus();
      }

      break;

    // Right/Down
    case 39:
    case 40:
      e.preventDefault();
      e.stopPropagation();

      // Check for next question
      if (!nextQuestion) {
        // No next, set focus on first question
        firstQuestion.focus();
      } else {
        // Move focus to next question
        nextQuestion.focus();
      }

      break;

    // Home
    case 36:
      e.preventDefault();
      e.stopPropagation();

      // Set focus on first question
      firstQuestion.focus();
      break;

    // End
    case 35:
      e.preventDefault();
      e.stopPropagation();

      // Set focus on last question
      lastQuestion.focus();
      break;

    // Enter/Space
    case 13:
    case 32:
      e.preventDefault();
      e.stopPropagation();

      // Show answer content
      showHeader(elem, thisAccordionHeaders);
      break;
    }

  };

  /**
   * On load, setup roles and initial properties
   */

  // Each FAQ Question
  accordionHeader.each(function (i) {
    $(this).attr({
      'id': 'accordion__header--' + i,
      'role': 'tab',
      'aria-controls': 'accordion__content--' + i,
      'aria-expanded': 'false',
      'aria-selected': 'false',
      'tabindex': '-1'
    });
  });

  // Each FAQ Answer
  accordionContent.each(function (i) {
    $(this).attr({
      'id': 'accordion__content--' + i,
      'role': 'tabpanel',
      'aria-labelledby': 'accordion__header--' + i,
      'aria-hidden': 'true'
    });
  });

  // Each FAQ Section
  accordion.each(function () {
    var $this = $(this),
      thisAccordionHeaders = $this.find('.accordion__header');

    // Set section attributes
    $this.attr({
      'role': 'tablist',
      'aria-multiselectable': 'true'
    });

    thisAccordionHeaders.each(function (i) {
      var $this = $(this);

      // Make first tab clickable
      if (i === 0) {
        $this.attr('tabindex', '0');
      }

      // Click event
      $this.on('click', function () {
        showHeader($(this), thisAccordionHeaders);
      });

      // Keydown event
      $this.on('keydown', function (e) {
        keyboardInteraction($(this), e, thisAccordionHeaders);
      });

      // Focus event
      $this.on('focus', function () {
        saveFocus($(this), thisAccordionHeaders);
      });
    });
  });

})(jQuery);
