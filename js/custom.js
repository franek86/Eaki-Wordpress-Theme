// $j is now an alias to the jQuery function; creating the new alias is optional.
var $j = jQuery.noConflict();
$j(function(){

  // Mobile navigation
  $j('.open-menu-icon').on('click', function(){
    var toggleNav = $j('.tapes-nav-bg-lines-color').hasClass('open-menu');

    if(toggleNav){
      $j('.tapes-nav-bg-lines-color').removeClass('open-menu');
      $j('.mobile-nav-items').css({
        'opacity': 0,
        'transition-delay' : '0.2s'
      });
      $j('.wrapper-page').css({
        'visibility':'visible',
        'transition-delay' : '0.1s'
      });
    } else {
      $j('.tapes-nav-bg-lines-color').addClass('open-menu');
      $j('.mobile-nav-items').css({
        'opacity': 1,
        'transition-delay' : '1.3s'
      });
      $j('.wrapper-page').css({
        'visibility':'hidden',
        'transition-delay' : '0.2s'
      });
    }
  });



  //Owl Carousel
  $j('.owl-carousel').owlCarousel({
      loop:true,
      nav: true,
      navText : ["",""],
      rewindNav : true,
      items: 1,
      autoplay:true,
      autoplayTimeout:5000,
      autoplayHoverPause:false,
      animateOut: 'fadeOut'
  });

  //Scroll Magic
  var controller = new ScrollMagic.Controller();

  //parallax
  var parallaxScene = new ScrollMagic.Scene({
    triggerElement: '.parallax',
    triggerHook: 1,
    duration: '200%'
  })
  .setTween(TweenMax.from('.bg-parallax', 1, {y: '-50%', ease:Power0.easeNone}))
  .addTo(controller);


  $j('.work').each(function(){
    console.log(this);
    var myScene = new ScrollMagic.Scene({
      triggerElement: this.children[0]
    })
    .setClassToggle(this, 'fade-in')
    .addTo(controller);

  });

  $j('.work-desc').each(function(){
    console.log(this);
    var myScene = new ScrollMagic.Scene({
      triggerElement: this.children[0]
    })
    .setClassToggle(this, 'fade-in')
    .addTo(controller);

  });


});
