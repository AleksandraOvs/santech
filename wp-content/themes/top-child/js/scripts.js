const swiper = new Swiper('.hero-slider', {
    // Optional parameters
   // direction: 'vertical',
    loop: true,
    // autoplay: {
    //   delay: 5000,
    //   disableOnInteraction: false,
    // },
    effect: "fade",
    // If we need pagination
    pagination: {
      el: '.hero-slider__pagination',
      clickable: true,
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.hero-slider__button-next',
      prevEl: '.hero-slider__button-prev',
    },
   
  });

  const slider_one = new Swiper('.slider-feedback', {
    direction: 'vertical', // вертикальная прокрутка
	  slidesPerView: 3, // показывать по 3 превью
    grabCursor: true,
    spaceBetween: 15,
    draggable: true,
    loop: true,
    // autoplay: {
    //   delay: 5000,
    //   disableOnInteraction: false,
    // },
    arrows: true,
    loop: true,
    //centeredSlides: true,
    // пагинация
    pagination: {
    el: '.swiper-pagination',
    clickable: true,
    },
    // навигация
    navigation: {
    nextEl: '.fb-slider__button-next',
    prevEl: '.fb-slider__button-prev',
    },
    breakpoints: {
        1024: {
            slidesPerView: 3,
        },
        768:{
            slidesPerView: 2,
        }
    }
    });