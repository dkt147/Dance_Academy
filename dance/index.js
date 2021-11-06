$(document).ready(function () {


  console.log("new");
  $(".ops").click(function () {
    $(".ops span").removeClass("active_nav");
    $("#" + this.id + " span").addClass("active_nav");

    $(".tabcontent .tc").addClass("hide");
    $("#s_" + this.id).removeClass("hide");

  });
  // $(".s").mouseenter(function () {
  //   $(this).find("img").animate({ 'min-width': "200px" }, 'fast');

  //   $(this).animate({ 'min-width': "200px" }, 'fast');

  //   $(this).find(".detail-box").removeClass("hide");
  // });

  // $(".s").mouseleave(function () {

  //   $(this).find(".detail-box").addClass("hide");

  //   $(this).find("img").animate({ 'min-width': "150px" }, 'fast');
  // });
});

$(".nav-tabs ").on("click", ".nav-tem", function () {
  load_slick();
  console.log("jshih0");
})

$(".nav-link").click(function () {
  $(".slick").slick('unslick');
  load_slick();

});


function load_slick(slidesToShow) {
  $(".slick").slick({

    infinite: true,

    responsive: [{
      breakpoint: 2024,
      settings: {
        slidesToShow: 8,

      }
    }, {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,

      }

    }, {

      breakpoint: 600,
      settings: {
        slidesToShow: 1,

      }

    }, {

      breakpoint: 300,
      settings: {
        slidesToShow: 1,

      }

    }]


  });

  $(".slick1").slick({

    infinite: true,
    variableWidth: true,
    responsive: [{
      breakpoint: 2024,
      settings: {
        slidesToShow: 6,

      }
    }, {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,

      }

    }, {

      breakpoint: 600,
      settings: {
        slidesToShow: 1,

      }

    }, {

      breakpoint: 300,
      settings: {
        slidesToShow: 1,

      }

    }]


  });


}

load_slick();