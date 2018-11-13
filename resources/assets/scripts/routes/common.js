export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $('.trigger-overlay').on('click', function (e) {
      $('.overlay').toggleClass("open"); //you can list several class names
      e.preventDefault();
    });

    $('.overlay-close').on('click', function (e) {
      $('.overlay').toggleClass("open"); //you can list several class names
      e.preventDefault();
    });

  },
};
