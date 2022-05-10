import ScrollReveal from "scrollreveal";
import "splitting/dist/splitting.css";
import "splitting/dist/splitting-cells.css";
import Splitting from "splitting";
import { gsap, ScrollTrigger, ExpoScaleEase, Expo } from "gsap/all";
gsap.registerPlugin(ScrollTrigger, ExpoScaleEase, Expo);
Splitting();
jQuery(document).ready(function ($) {
  $(".animsition").animsition({
    inClass: 'fade-in',
    outClass: 'fade-out',
    inDuration: 800,
    outDuration: 800,
    linkElement: 'a:not([target="_blank"]):not([href^="#"]):not([href^="mailto:"]):not([href^="tel:"]):not([data-target]):not(.disable-animsition):not(.cc-dismiss):not(.site-menu-nav-dropdown-toggle):not(.added_to_cart_button):not(.woocommerce-MyAccount-downloads-file)',
    loading: false,
    timeout: true,
    timeoutCountdown: 300,
    onLoadEvent: true,
    browser: ['animation-duration', '-webkit-animation-duration'],
    overlay: false,
  });

  if ($("body").hasClass("home")) {
    setTimeout(function () {
      $("body").removeClass("overflow-hidden");
      $('#preloader').fadeOut(700);
      initAll();
    }, 600);
  } else {
    setTimeout(function () {
      $("body").removeClass("overflow-hidden");
      $('#preloader').fadeOut(300);
    }, 300);
    initAll();
  }
  function initAll() {

    $('.animsition').on('animsition.inEnd', function () {
      var staggerUp = {
        duration: 600,
        interval: 100,
        distance: '50px',
        viewFactor: 0.75,
        easing: 'ease',
        delay: 200,
      };
      ScrollReveal().reveal('.richtext-fade-in > *', staggerUp);
      ScrollReveal().reveal('.fade-in-item', staggerUp);
      ScrollReveal().reveal('.home-services-listings-item', staggerUp);
      ScrollReveal().reveal('.link-listings-item-fadein', staggerUp);
      // Text animation
      $(".animate-text").each(function () {
        var text = $(this);
        var characters = text.find(".char");

        const textTimeline = gsap.timeline({

          scrollTrigger: {
            trigger: text,
            start: "top 75%",
            // markers: true,
          },
        });

        textTimeline.to(characters, { duration: 1.2, stagger: 0.01, ease: Expo.easeOut, transform: 'translateY(0)' });
      });

      // Body text animation
      $(".animate-text-body").each(function () {
        var text = $(this);
        var characters = text.find(".char");

        const textTimeline = gsap.timeline({

          scrollTrigger: {
            trigger: text,
            start: "top 50%",
            // markers: true,
          },
        });

        textTimeline.to(characters, { duration: 1.2, stagger: 0.005, ease: Expo.easeOut, transform: 'translateY(0)' });
      });
      $(".animate-ltr").each(function () {
        var text = $(this);
        var characters = text;

        const textTimeline = gsap.timeline({

          scrollTrigger: {
            trigger: text,
            start: "top 50%",
            // markers: true,
          },
        });

        textTimeline.to(characters, { duration: 2.2, stagger: 0.005, ease: Expo.easeOut, transform: 'translateX(0)' });
      });

      $(".home-drops").each(function () {
        var container = $(".home-intro");
        var target = $(this);

        const tl = gsap.timeline({

          scrollTrigger: {
            trigger: container,
            start: "top 50%",
            end: "bottom top",
            scrub: true,
            // markers: true,
          },
        });

        tl.to(target, { opacity: 1, xPercent: -5, yPercent: -25, ease: 'none', duration: 0.5 })
          .to(target, { opacity: 0, xPercent: -10, yPercent: -50, ease: 'none', duration: 0.5 }, 0.5);
      });
    })
  }

});