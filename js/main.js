$(function(){

    

    
 $('.heroes__slider-img').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow:'<button  class="slick-btn slick-prev"><img src="images/strela1.png" alt="prev"></button>',
    nextArrow:'<button  class="slick-btn slick-next"><img src="images/strela2.png" alt="next"></button>',
    asNavFor: '.heroes__slider-text'
  });
  $('.heroes__slider-text').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.heroes__slider-img',
  fade: true,
  arrows:false,
  });

});