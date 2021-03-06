// menu dropdown hover
const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function () {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function () {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function () {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});

// section smooth scroll
$(".menu-custom-pmmp").find(".nav-link").on("click", function (e) {
  if (this.hash !== '') {
    e.preventDefault();
    const hash = this.hash;
    const menu_height = $(".menu-custom-pmmp").innerHeight();

    if (window.location.pathname == '/' || window.location.pathname == '/index.php') {
      $('html, body').animate({
          scrollTop: ($(hash).offset().top) - menu_height
        },
        800
      );

      $('.navbar-collapse').collapse('hide');
      window.location.hash = '';
    } 
    else {
      window.location.href = "index.php" + hash;
    }
  }
});