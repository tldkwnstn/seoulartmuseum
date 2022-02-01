console.clear();

function Section1__init1() {
  const swiper = new Swiper(".swiper-box-1 .swiper", {
    slidesPerView: 1.008,
    centeredSlides: true,
    spaceBetween: 32,
    loop: true,
    autoplay: {
    delay: 2500,
    disableOnInteraction: false
  },
  });
}

Section1__init1();


function Section1__init2() {
  const swiper = new Swiper(".swiper-box-2 .swiper", {
    slidesPerView: 1.08,
    centeredSlides: true,
    spaceBetween:45,
    loop: true,
    autoplay: {
    delay: 2500,
    disableOnInteraction: false
  },
  });
}

Section1__init2();
