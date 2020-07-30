// aos start
AOS.init();

// btn back to top
const btn = $('#btn-top');

$(window).scroll(function() {
  if ($(window).scrollTop() > 500) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '800');
});


// contraste acessibiilidade
$('.btn-contrast').on('click', function(e) {
  e.preventDefault();
  $('body').toggleClass('contrast');

  if ($('body').hasClass('contrast')) {
    $('.logo-header').attr('src', '/galeria/logo/logoNew(white).png?v=1');
  } else {
    $('.logo-header').attr('src', '/galeria/logo/logoNew.png?v=1');
  }
});

// fonte acessibiilidade
function btn_font(e) {
  let links = $('.nav-link, .dropdown-item, .footer-links-box a');
  let fontLinks = links.css('font-size');
  
  if (e == 'a') {
    links.css('font-size', parseInt(fontLinks) + 2);
  } else if ( e == 'd') {
    links.css('font-size', parseInt(fontLinks) - 2);
  }
}