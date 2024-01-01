(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
      }
    }, 1);
  };
  spinner();

  // Initiate the wowjs
  new WOW().init();

  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 45) {
      $(".navbar").addClass("sticky-top shadow-sm");
    } else {
      $(".navbar").removeClass("sticky-top shadow-sm");
    }
  });

  // Dropdown on mouse hover
  const $dropdown = $(".dropdown");
  const $dropdownToggle = $(".dropdown-toggle");
  const $dropdownMenu = $(".dropdown-menu");
  const showClass = "show";

  $(window).on("load resize", function () {
    if (this.matchMedia("(min-width: 992px)").matches) {
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


  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    center: true,
    margin: 24,
    dots: true,
    loop: true,
    nav: false,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
  });

  $("#singIn").on("click", () => {
    $("#sıngInModal").fadeIn(500);
    $("#sıngInModal2").fadeIn(600);
  });

  $("#singUp").on("click", () => {
    $("#sıngInModal").fadeIn(500);
    $("#sıngInModal3").fadeIn(600);
    $("#sıngInModal2").fadeOut(100);
  });

  $("#sıngInModal").on("click", () => {
    $("#sıngInModal").fadeOut(500);
    $("#sıngInModal2").fadeOut(600);
    $("#sıngInModal3").fadeOut(600);
  });

  $(".form-modal").on("click", () => {
    $(".form-modal").fadeOut(500);
    $(".form-modal-form").fadeOut(600);
  });

  $("#modal-form-start").on("click", () => {
    $(".form-modal").fadeIn(500);
    $(".form-modal-form").fadeIn(600);
  });

  $(".bars").on("click", () => {
    $(".buttonGroup").toggleClass("buttonGroupActive");
    $(".bar:nth-child(1)").toggleClass("bar1");
    $(".bars2").toggleClass("bar2");
  });

  // Tıklama
  $("#yukari").on("click", function () {
    $("html, body").animate({ scrollTop: 0 }, 800);
    $(".buttonGroup").toggleClass("buttonGroupActive");
    $(".bar:nth-child(1)").toggleClass("bar1");
    $(".bars2").toggleClass("bar2");
  });

  $(".wpButton").on("click", function () {
    $(".buttonGroup").toggleClass("buttonGroupActive");
    $(".bar:nth-child(1)").toggleClass("bar1");
    $(".bars2").toggleClass("bar2");
  });




})(jQuery);

// Menu Control
let href = window.location.href;
let hrefAs = href.split("/");
let son = hrefAs.pop();

if (son === "") {
  $(".index").addClass("active");
} else {
  $("." + son).addClass("active");
}

$(function () {
  $("a.tourFormAtt").click(function () {
    var tip = $(this).data("tip");
    //alert(tip)
    $("#" + tip).toggleClass("tourFormFormat");
  });
  $("button.tourFormAtt").click(function () {
    var tip = $(this).data("tip");
    //alert(tip)
    $("#" + tip).toggleClass("tourFormFormat");
  });
});
