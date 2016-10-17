jQuery(document).ready(function($) {


    // initialize Isotope after all images have loaded
  var $container = $('#portfolio-items').imagesLoaded( function() {
    $container.isotope({
      itemSelector: '.item',
      layoutMode: 'masonry',
    });
  });

  // $('.portfolio-item').isotope({
  //   masonry: {
  //     columnWidth: 110,
  //     gutterWidth: 15
  //   }
  // });
   
  // filter items on button click
  $('#filters').on( 'click', 'button', function() {
    var filterValue = $(this).attr('data-filter');
    $container.isotope({ filter: filterValue });
  });   
   

  $("[rel='tooltip']").tooltip();    
   
      $('#hover-cap .portfolio-item').hover(
          function(){
              $(this).find('.caption').slideDown(250); //.fadeIn(250)
          },
          function(){
              $(this).find('.caption').slideUp(250); //.fadeOut(205)
          }
      );    
      
  // Look for .hamburger
    var hamburger = document.querySelector(".hamburger");
    // On click
    hamburger.addEventListener("click", function() {
      // Toggle class "is-active"
      hamburger.classList.toggle("is-active");
      // Do something else, like open/close menu
    });

    //Scroll-Up Icon

    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 500);
        return false;
      });

    // turn hover to touch on mobile
    document.addEventListener("touchstart", function(){}, true);


});
    
