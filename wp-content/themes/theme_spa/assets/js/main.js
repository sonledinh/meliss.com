 /*boostrapMenu*/
$(document).ready(function () {
      $(".navbar-toggler").on("click", function () {
          $(this).toggleClass("active");
          $("html").toggleClass("overflow-hidden");
    });
});


var numberSpinner = (function() {
  $('.number-spinner>.ns-btn>a').click(function() {
    var btn = $(this),
      oldValue = btn.closest('.number-spinner').find('input').val().trim(),
      newVal = 0;

    if (btn.attr('data-dir') === 'up') {
      newVal = parseInt(oldValue) + 1;
    } else {
      if (oldValue > 1) {
        newVal = parseInt(oldValue) - 1;
      } else {
        newVal = 1;
      }
    }
    btn.closest('.number-spinner').find('input').val(newVal);
  });
  $('.number-spinner>input').keypress(function(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      return false;
    }
    return true;
  });
})();

$(".title-pay a").click(function() {    
    $('.box-code').toggle(400);
});


$(document).ready(function(){
  
  $('.list-pay .item-pay').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('.list-pay .item-pay').removeClass('active');
    $('.tab-content').removeClass('active');

    $(this).addClass('active');
    $("#"+tab_id).addClass('active');
  })

})

$('.single-item').slick({
  autoplay: true,
  autoplaySpeed: 2000,
  dots: true,
  slidesToShow: 1,
  centerMode: true,
  centerPadding: '200px',
  responsive: [
    {
      breakpoint: 768,
      settings: {
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

$('.banner-top').slick({
    autoplay: true,
    arrow: true,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1, 
    prevArrow: '<button class="prev"><i class="fa fa-angle-left"></i></button>',
    nextArrow: '<button class="next"><i class="fa fa-angle-right"></i></button>',
});