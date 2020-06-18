

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

  $('.tooltipstered').on("click", function($){
    let bookDate = setInterval(function(){
        if ( jQuery('.new-appt').length ) {
            clearInterval(bookDate);
            jQuery('.new-appt').on("click", function(){
               let bookForm = setInterval(function(){
                    if ( jQuery('.booked-form').length ){
                        let vePriceOne = jQuery('.field-paid-service-select option[value=93]');
                        let vePriceTwo = jQuery('.field-paid-service-select option[value=90]');
                        let vePriceThree = jQuery('.field-paid-service-select option[value=96]');

                        vePriceOne.addClass('ve');
                        vePriceTwo.addClass('ve');
                        vePriceThree.addClass('ve');
                        clearInterval( bookForm );
                    }
                }, 1000);
            });
        }
    }, 1000);
});
  
});
