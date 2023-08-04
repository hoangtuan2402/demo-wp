jQuery(document).ready(function($) {


  // dynamic sidebar
  const body = document.body;
  let sidebarPostion = newsFse.sidebar_position;

    // Add the appropriate class based on the selected option value
  if (sidebarPostion === 'left') {
    body.classList.add('left-sidebar');
  } else if (sidebarPostion === 'right') {
    body.classList.add('right-sidebar');
  } else {
    body.classList.add('no-sidebar');
  }

  $('.icon-search').click(function() {
    $('.nf-search').show();
    $('.overlay').show();
    $('.icon-search').hide();
  });

  $(document).mouseup(function(e) {
    var searchBlock = $('.nf-search');
    if (!searchBlock.is(e.target) && searchBlock.has(e.target).length === 0) {
      searchBlock.hide();
          $('.overlay').hide();
      $('.icon-search').show();
    }
  });
     
  // arrow to top function

  // Get the element
  let topBtn = document.querySelector("#news-fse-to-top");

  // On Click, Scroll to the page's top, replace 'smooth' with 'auto' if you don't want smooth scrolling
  topBtn.onclick = () => window.scrollTo({ top: 0, behavior: "smooth" });

  // window.onload = () => (topBtn.style.opacity = 1);
  // On scroll, Show/Hide the btn with animation
  window.onscroll = () =>
  window.scrollY > 800
  ? (topBtn.style.opacity = 1)
  : (topBtn.style.opacity = 0);

  new WOW().init();

});
