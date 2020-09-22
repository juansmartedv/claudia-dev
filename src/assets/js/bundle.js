jQuery(document).ready(function($){
  const sliderPackage = $('.slider-package');

  sliderPackage.slick({
    dots: true,
    arrows: false,
    infinite: true,
    autoplay: true,
    autoplayspeed: 2000
  });


  var animateButton = function(e) {

    e.preventDefault;
    //reset animation
    e.target.classList.remove('animate');
    
    e.target.classList.add('animate');
    setTimeout(function(){

      e.target.classList.remove('animate');
    },700);
  };

  var bubblyButtons = document.getElementsByClassName("bubbly-button");
  for (var i = 0; i < bubblyButtons.length; i++) {
    bubblyButtons[i].addEventListener('click', animateButton, false);

  }

  function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
  };


  //Woocommerce Checkout
  $('#customer_details').addClass("row");
  $('#order_review_heading').insertAfter('.billing-info')
  $('.col-1').removeClass("col-1").addClass("col-md-6 billing-info");
  $("#order_review").insertAfter(".billing-info").addClass("col-md-6 order-description");
  $('#order_review_heading').prependTo('#order_review');
  $('.woocommerce-additional-fields').hide();

  // let checkTool = setInterval(function(){
  //   if ($('.tooltipster').length > 0){
  //     clearInterval(checkTool);
  //     console.log('Booked loaded');
  //     $('.tooltipstered').on("click", function($){
  //       console.log("click");
  //       let bookDate = setInterval(function(){
  //           if ( jQuery('.new-appt').length ) {
  //               clearInterval(bookDate);
  //               jQuery('.new-appt').on("click", function(){
  //                                        console.log("click");
  //                  let bookForm = setInterval(function(){
  //                       if ( jQuery('.booked-form').length ){
  //                           let vePriceOne = jQuery('.field-paid-service-select option[value=93]');
  //                           let vePriceTwo = jQuery('.field-paid-service-select option[value=90]');
  //                           let vePriceThree = jQuery('.field-paid-service-select option[value=96]');
  //                           let usaPriceOne = jQuery('.field-paid-service-select option[value=68]');
  //                           let usaPriceTwo = jQuery('.field-paid-service-select option[value=22]');
  //                           let usaPriceThree = jQuery('.field-paid-service-select option[value=82]');
    
    
  //                           usaPriceOne.addClass('usa');
  //                           usaPriceTwo.addClass('usa');
  //                           usaPriceThree.addClass('usa');
  //                           vePriceOne.addClass('ve');
  //                           vePriceTwo.addClass('ve');
  //                           vePriceThree.addClass('ve');
  //                           clearInterval( bookForm );
  //                           jQuery.ajax({
  //                             type: "GET",
  //                             dataType: "json",
  //                             url: 'https://freegeoip.app/json/',
  //                             success: function(data) {
  //                               let countryCode = data.country_code;
  //                               let country = data.country_name;
  //                               if ( countryCode === 'VE' || country === 'Venezuela' ){
  //                                 jQuery('.usa').hide();
  //                                 console.log('Venezuela');
  //                               } else {
  //                                 jQuery('.ve').hide();
  //                                 console.log('Exterior');
  //                               }
  //                             }
  //                           });
  //                       }
  //                   }, 1000);
  //               });
  //           }
  //       }, 1000);
  //     });
  //   }
  // },1000);
 
  $.ajax({
    type: "GET",
    dataType: "json",
    url: 'https://freegeoip.app/json/',
    success: function(data) {
      let countryCode = data.country_code;
      let country = data.country_name;
      if ( countryCode === 'VE' || country === 'Venezuela' ){
        jQuery('.usa').hide();
        console.log('Venezuela');
      } else {
        jQuery('.ve').hide();
        console.log('Exterior');
      }
    }
  });
});
