if (document.querySelector("#carouselProduction")) {
  $("#carouselProduction").on("slide.bs.carousel", function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-production-item").length;
    console.log(totalItems);

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
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
}
// Dynamic Carousel indicator
if (document.getElementById("header-carousel")) {
  const carouselItems = document.querySelectorAll(
    "#header-carousel .carousel-item"
  );
  const carouselIndicators = document.querySelector(
    "#header-carousel .carousel-indicators"
  );
  carouselItems.forEach((el, index) => {
    const li = document.createElement("li");
    li.setAttribute("data-target", "#header-carousel");
    li.setAttribute("data-slide-to", `${index}`);
    carouselIndicators.appendChild(li);
  });
}

// Add active class to carousel-item
if (document.getElementsByClassName("carousel-item")[0]) {
  document.getElementsByClassName("carousel-item")[0].classList.add("active");
}
if (document.getElementsByClassName("carousel-production-item")[0]) {
  document
    .getElementsByClassName("carousel-production-item")[0]
    .classList.add("active");
}

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

if (document.querySelectorAll(".footer-menu")) {
  const ul = document.querySelectorAll(".footer-menu");
  ul.forEach(el => {
    el.querySelectorAll("img").forEach(image => {
      image.remove();
    });
    el.querySelectorAll("a").forEach(link => {
      link.className = "hover-underline-animation";
    });
  });
}
