

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

  //Woocommerce Checkout
  $('#customer_details').addClass("row");
  $('#order_review_heading').insertAfter('.billing-info')
  $('.col-1').removeClass("col-1").addClass("col-6 billing-info");
  $("#order_review").insertAfter(".billing-info").addClass("col-6 order-description");
  $('#order_review_heading').prependTo('#order_review');
  $('.woocommerce-additional-fields').hide();
});
