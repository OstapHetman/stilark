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

if (document.getElementById("buy-product")) {
  const btn = document.getElementById("buy-product");

  btn.addEventListener("click", addValueToHiddenInput);

  function addValueToHiddenInput() {
    const productName = this.getAttribute("data-productName");
    const productPrice = this.getAttribute("data-productPrice");
    const nameInput = document.getElementById("product-name");
    const priceInput = document.getElementById("product-price");

    nameInput.value = productName;
    priceInput.value = productPrice;
  }
}
