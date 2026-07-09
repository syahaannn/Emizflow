$(document).ready(function(){
   $(".banner-slick").slick({
      arrows:false,
      slidesToShow:2,
      autoplay:true,
      dots: false,
      infinite: true,
      speed: 2000,
      lazyLoad: 'ondemand',
      autoplaySpeed: 2000,
      centerMode: true,
      centerPadding: '100px',
      responsive: [
         {
            breakpoint: 1000,
            settings: {
               arrows: false,
               centerMode: true,
               centerPadding: '40px',
               slidesToShow: 2
            }
         },
         {
            breakpoint: 700,
            settings: {
               arrows: false,
               centerMode: true,
               centerPadding: '40px',
               slidesToShow: 1
            }
         },
         {
            breakpoint: 480,
            settings: {
               arrows: false,
               centerMode: true,
               centerPadding: '40px',
               slidesToShow: 1
            }
         }
      ]
   });

   $(".banner-slick-banners").slick({
      arrows:false,
      slidesToShow:1,
      autoplay:true,
      dots: false,
      infinite: true,
      speed: 2000,
      autoplaySpeed: 2000,
   });

   $(".prd-slider").slick({
      arrows:false,
      slidesToShow:1,
      autoplay:true,
      dots: false,
      infinite: true,
      speed: 2000,
      autoplaySpeed: 2000,
   });

   $(".banner-slick-newitem").slick({
      arrows:false,
      slidesToShow:1,
      autoplay:true,
      dots: false,
      infinite: true,
      speed: 2000,
      lazyLoad: 'ondemand',
      autoplaySpeed: 2000,
      centerMode: true,
      centerPadding: '30px',
      responsive: [
         {
            breakpoint: 1000,
            settings: {
               arrows: false,
               centerMode: true,
               centerPadding: '40px',
               slidesToShow: 2
            }
         },
         {
            breakpoint: 700,
            settings: {
               arrows: false,
               centerMode: true,
               centerPadding: '40px',
               slidesToShow: 1
            }
         },
         {
            breakpoint: 480,
            settings: {
               arrows: false,
               centerMode: true,
               centerPadding: '40px',
               slidesToShow: 1
            }
         }
      ]
   });

   $(".cat-slick").slick({
      arrows:false,
      slidesToShow:4,
      dots: false,
      infinite: true,
      centerMode:true,
      responsive: [
         {
            breakpoint: 1000,
            settings: {
               arrows: false,
               slidesToShow: 2
            }
         },
         {
            breakpoint: 700,
            settings: {
               arrows: false,
               slidesToShow: 1
            }
         },
         {
            breakpoint: 400,
            settings: {
               arrows: false,
               slidesToShow: 1
            }
         }
      ]
   });
});
