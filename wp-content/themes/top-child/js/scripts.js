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
    direction: 'horizontal', // вертикальная прокрутка
	  slidesPerView: 1, // показывать по 3 превью
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
   // navigation: {
   // nextEl: '.fb-slider__button-next',
   // prevEl: '.fb-slider__button-prev',
   // },
    breakpoints: {
        768: {
          direction: 'vertical', // вертикальная прокрутка
          slidesPerView: 3, // показывать по 3 превью
        },
    }

    
    });


    function scrollTo(to, duration = 700) {
      const
        element = document.scrollingElement || document.documentElement,
        start = element.scrollTop,
        change = to - start,
        startDate = +new Date(),
        // t = current time
        // b = start value
        // c = change in value
        // d = duration
        easeInOutQuad = function (t, b, c, d) {
          t /= d / 2;
          if (t < 1) return c / 2 * t * t + b;
          t--;
          return -c / 2 * (t * (t - 2) - 1) + b;
        },
        animateScroll = function () {
          const currentDate = +new Date();
          const currentTime = currentDate - startDate;
          element.scrollTop = parseInt(easeInOutQuad(currentTime, start, change, duration));
          if (currentTime < duration) {
            requestAnimationFrame(animateScroll);
          }
          else {
            element.scrollTop = to;
          }
        };
      animateScroll();
    }

    const upArrow = document.querySelector('.arrow-up');
      
    upArrow.addEventListener('click', (e) => {
       e.preventDefault();
      // Вызываем функцию, первый аргумент - отступ, второй - скорость скролла, чем больше значение, тем медленнее скорость прокрутки
      scrollTo(0, 800);
    }); 
    
    // Вверх и показ верхнего меню
    const arrowUp = () => {
      const
        //fixedHeader = document.querySelector('.fixed-header'),
        mainBlock = document.querySelector('.top-store-site'),
        arrow = document.querySelector('.arrow-up');
    
      window.addEventListener('scroll', () => {
        if (-mainBlock.getBoundingClientRect().top > 300) {
          arrow.classList.add('show');
          //fixedHeader.classList.add('show')
    
        } else {
          arrow.classList.remove('show');
          //fixedHeader.classList.remove('show')
    
        }
      })
    
    }
    arrowUp();