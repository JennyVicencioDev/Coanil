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
      autoPlay: 3000,
      cellAlign: 'center',
      contain: true,
      wrapAround: true,
      prevNextButtons: false,
      pageDots: true,
      groupCells: 1,
      fade: true,
      on: {
         ready: function() { 
            let dots = this.pageDots.holder;
            console.log(dots);
            $(dots).wrap('<div class="container-md"></div>');
         },
      }
   }),
   xSliders = $('').flickity({
      autoPlay: true,
      cellAlign: 'center',
      contain: true,
      wrapAround: true,
      prevNextButtons: true,
      pageDots: false,
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
   autoplaySliders = $('.alianzas-slider').flickity({
      autoPlay: 2000,
      cellAlign: 'center',
      contain: true,
      wrapAround: true,
      groupCells: 1,
      prevNextButtons: true,
      pageDots: false,
      setGallerySize: true,
      fade: true,
   });
