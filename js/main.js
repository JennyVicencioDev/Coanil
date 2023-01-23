$(function () {
   'use strict';

   /*
    / Flickity
   */

   // refrescar slider en tabs / accordions
   var collapseButtons = $('[data-bs-toggle="collapse"]');
   collapseButtons.each(function (index, element) {
      let btnID = $($(element).attr('data-bs-target'));
      btnID.on('shown.bs.collapse hidden.bs.collapse', function (event) {
         window.dispatchEvent(new Event('resize'));
      });
   });
   var tabsButtons = $('[data-bs-toggle="tab"]');
   tabsButtons.on('show.bs.tab shown.bs.tab', function (event) {
      window.dispatchEvent(new Event('resize'));
   });
});

   // sliders
   var bannerTop = $('.banner-top-slider').flickity({
      autoPlay: 5000,
      cellAlign: 'center',
      contain: true,
      wrapAround: true,
      prevNextButtons: true,
      pageDots: true,
      groupCells: 1,
      adaptiveHeight: false,
      draggable: false
   }),
   planesSliders = $('.planes-cards-container').flickity({
      autoPlay: false,
      cellAlign: 'center',
      contain: false,
      wrapAround: false,
      prevNextButtons: true,
      pageDots: true,
      groupCells: true,
      adaptiveHeight: true,
      setGallerySize: true,
      on: {
         ready: function() { 
            let dots = $('.flickity-page-dots', this.$element);
            let dotsLength = this.pageDots.dots.length;
            if(dotsLength == 1) {
               dots.hide();
            }
            // let slide = $('.slide', this.$element);
            // slide.css('height', '100%');
         },
         resize: function() {
            let dots = $('.flickity-page-dots', this.$element);
            let dotsLength = this.pageDots.dots.length;
            if(dotsLength == 1) {
               dots.hide();
            } 
         }
       }
   }),
   responsiveSliders = $('.beneficios-cards-container').flickity({
      cellAlign: 'center',
      contain: false,
      freeScroll: false,
      prevNextButtons: false,
      watchCSS: true,
      on: {
         ready: function() { 
            let slide = $('.slide', this.$element);
            slide.css('height', '100%');
         },
      }
   }),
   autoplaySliders = $('').flickity({
      autoPlay: 3000,
      cellAlign: 'center',
      contain: true,
      freeScroll: false,
      wrapAround: false,
      groupCells: true,
   });
