//= partials/header.js
//= partials/footer.js
//= partials/scrollTo.js
//= partials/tiny-slider.js
//= partials/animate.js
//= partials/modal.js

  tns({
    container: '.services__slider',
    items: 1,
    autoplay: true,
    speed: 800,
    controls: false,
    nav: false,
    gutter: 10,
    responsive: {
      768: {
        items: 2,
        gutter: 15
      },
      992: {
        items: 3,
        gutter: 30
      },
      1200: {
        gutter: 45
      }
    },
  });