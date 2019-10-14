$('.main-banner__content').slick({
  infinite: true,
  autoplay: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: false,
  responsive: [{
    breakpoint: 1200,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      dots: false
    }
  },
  {
    breakpoint: 900,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  },
  {
    breakpoint: 600,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,

    }
  }
  ]
});

$('.main-noticias__slider').slick({
  infinite: true,
 
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: false,
  arrows: true,
  responsive: [{
    breakpoint: 1200,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      infinite: true,
      dots: true
    }
  },
  {
    breakpoint: 900,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2
    }
  },
  {
    breakpoint: 600,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      autoplay: false,
      autoplaySpeed: 1000
    }
  }
  ]
});

$('.main-clients__carousel').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
  dots: false,
  arrows: true,
  responsive: [{
    breakpoint: 1200,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      infinite: true,
      dots: true
    }
  },
  {
    breakpoint: 900,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2
    }
  },
  {
    breakpoint: 320,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
       autoplay:false ,
      autoplaySpeed: 1000
    }
  }
  ]
});


$('.main-models__carousel').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  arrows: true,
  responsive: [{
    breakpoint: 1200,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
      infinite: true,
      dots: true
    }
  },
  {
    breakpoint: 900,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2
    }
  },
  {
    breakpoint: 600,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      autoplay: true,
      autoplaySpeed: 1000
    }
  }
  ]
});

$('.main-benefits__carousel').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: false,
  arrows: true,
})
