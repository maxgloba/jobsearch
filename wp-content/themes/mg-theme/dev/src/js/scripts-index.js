//= partials/header.js
//= partials/tiny-slider.js

  tns({
    container: '.my-slider',
    items: 1,
    slideBy: 'page',
    autoplay: true,
    controls: false,
    nav: false,
    responsive: {
      768: {
        items: 2
      },
      992: {
        items: 3
      }
    },
  });