$("#carouselProduction").on("slide.bs.carousel", function(e) {
  var $e = $(e.relatedTarget);
  var idx = $e.index();
  var itemsPerSlide = 3;
  var totalItems = $(".carousel-production-item").length;
  console.log(totalItems);

  if (idx >= totalItems - (itemsPerSlide - 1)) {
    var it = itemsPerSlide - (totalItems - idx);
    for (var i = 0; i < it; i++) {
      // append slides to end
      if (e.direction == "left") {
        $(".carousel-production-item")
          .eq(i)
          .appendTo(".carousel-production-inner");
      } else {
        $(".carousel-production-item")
          .eq(0)
          .appendTo(".carousel-production-inner");
      }
    }
  }
});
