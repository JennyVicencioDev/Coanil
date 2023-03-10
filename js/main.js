$(function () {
   'use strict';

   /*
    / Funciones
   */

   // Form con validación Bootstrap
   var forms = $('.needs-validation');   
   forms.on('submit', function (event) {
      event.preventDefault();
      if (!this.checkValidity()) {
         $(this).addClass('was-validated');
         console.log('Formulario no validado.');
      }
      else {
         // $('#modalExito').modal('show');
         $(this).addClass('submitting');
         $(this).addClass('was-validated');
         console.log('Formulario validado con éxito.');
      }
   });

   // Windows size check
   const checkingWindowSize = () => {
      let minWidth = 768; // tamaño min
      // console.log(`Ancho actual de la pantalla: ${window.innerWidth}px`);
      return {
         is_desktop: () => window.matchMedia(`(min-width: ${minWidth}px)`).matches,
         is_mobile: () => !window.matchMedia(`(min-width: ${minWidth}px)`).matches
      };
   };


   // footer links collapsible (mobile)
   const activateFooterCollapse = () => {
      var footerT = $('.site-footer .links').find('.footer-column-title');
      $(footerT).each(function (i, colTitle) {
         if(checkingWindowSize().is_mobile()) {
            $(colTitle).attr('data-bs-toggle','collapse').attr('data-bs-target','#fl-'+i).addClass('accordion-button');
            $(colTitle).siblings('ul').attr('id','fl-'+i).addClass('collapse');
         }
         else {
            $(colTitle).removeAttr('data-bs-toggle').removeAttr('data-bs-target').removeClass('accordion-button');
            $(colTitle).siblings('ul').removeAttr('id').removeClass('collapse');
         }
      });
   };
   activateFooterCollapse();
   
   $(window).on('resize', function(){
      activateFooterCollapse();
   });


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
            // console.log(dots);
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
   responsiveSliders = $('.areas-cards-container, .ofertas-container').flickity({
      cellAlign: 'center',
      contain: false,
      freeScroll: false,
      prevNextButtons: false,
      watchCSS: true,
      adaptiveHeight: true,
      // on: {
      //    ready: function() { 
      //       let slide = this.slider;
      //       console.log(slide);
      //       let slide = $('.slide', this.$element);
      //       $(slide).children().css('height', '100%');
      //    },
      // }
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
});
