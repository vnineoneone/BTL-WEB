function countDown() {
  // Set the date we're counting down to
  var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

  // Update the count down every 1 second
  var x = setInterval(function () {
    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    var time = document.getElementById("time");
    if (time) {
      document.getElementById(
        "time"
      ).innerHTML = `<span>${days}<p>Ngày</p></span><span>${hours}<p> Giờ</p>
    </span><span>${minutes}<p>Phút</p></span><span>${seconds}<p>Giây</p></span>`;

      // If the count down is over, write some text
      if (distance < 0) {
        clearInterval(x);
        time.innerHTML = "EXPIRED";
      }
    }
  }, 1000);
}
function showBtn() {
  var image = $(".view-image");
  image.hover(function () {
    $(this).children(".list-btn-view").toggle();
  });
}

function slideShowFeaturedProduct() {
  var owl = $(".featured-product-carousel");
  owl.owlCarousel({
    items: 4,
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
  });
}

function slideShowPost() {
  var owl = $("#post-carousel");
  owl.owlCarousel({
    items: 3,
    loop: true,
    margin: 20,
    nav: true,
  });
}
function slideShowNewProduct() {
  var owl = $("#new-product-carousel");
  owl.owlCarousel({
    items: 5,
    loop: true,
    margin: 10,
    nav: true,
  });
}

function formValidation() {
  // Select the form elements that
  // need validation and
  // initialize the validator
  let validator = $("form.needs-validation").jbvalidator({
    // Show error message
    errorMessage: true,

    // Change the appearance of the form
    // when correct information is entered
    successClass: true,

    // Specify the language file for
    // the error and help text
    language: "https://emretulek.github.io/jbvalidator/dist/lang/en.json",
  });

  validator.validator.password = function (el, event) {
    if ($(el).is("[name=password]") && $(el).val().length < 5) {
      return "Your password is too weak.";
    }
  };

  validator.validator.name = function (el, event) {
    if ($(el).is("[name=name]") && $(el).val().length < 3) {
      return "Your username is too short.";
    }
  };
}

$(document).ready(function () {
  slideShowFeaturedProduct();
  countDown();
  showBtn();
  slideShowPost();
  slideShowNewProduct();
  formValidation();
});

function check(x) {
  var result = document.getElementById(x);
  if (result.value == "") {
    alert("ERROR");
    result.value = 1;
  }
}

function Decrease(x, y, z) {
  var result = document.getElementById(x);
  var min_number = result.min;
  if (Number(result.value) > Number(min_number)) {
    result.value--;
  }
  var str = String(Number(result.value) * y);
  if (str.length < 7) {
    str = str.slice(0, 3) + "." + str.slice(3);
  } else if ((str.length >= 7) & (str.length < 8)) {
    str = str.slice(0, 1) + "." + str.slice(1);
    str = str.slice(0, 5) + "." + str.slice(5);
  } else if ((str.length >= 8) & (str.length < 9)) {
    str = str.slice(0, 2) + "." + str.slice(2);
    str = str.slice(0, 6) + "." + str.slice(6);
  }
  str += "<sup>₫</sup>";
  document.getElementById(z).innerHTML = str;

  return true;
}

function Increase(x, y, z) {
  var result = document.getElementById(x);
  var max_number = result.max;
  if (Number(result.value) < Number(max_number)) {
    result.value++;
  }
  var str = String(Number(result.value) * y);
  if (str.length < 7) {
    str = str.slice(0, 3) + "." + str.slice(3);
  } else if ((str.length >= 7) & (str.length < 8)) {
    str = str.slice(0, 1) + "." + str.slice(1);
    str = str.slice(0, 5) + "." + str.slice(5);
  } else if ((str.length >= 8) & (str.length < 9)) {
    str = str.slice(0, 2) + "." + str.slice(2);
    str = str.slice(0, 6) + "." + str.slice(6);
  }
  str += "<sup>₫</sup>";
  document.getElementById(z).innerHTML = str;
  return true;
}

$(".subcart").click(function (e) {
  $.ajax({
    url: "controllers/CartController.php",
    type: "POST",
    dataType: "json",
    data: {
      id: e.target.getAttribute("name"),
      type: "decrease",
    },
  }).done(function (result) {
    console.log(result);
  });
});

$(".addcart").click(function (e) {
  $.ajax({
    url: "controllers/CartController.php",
    type: "POST",
    dataType: "json",
    data: {
      id: e.target.getAttribute("name"),
      type: "increase",
    },
  }).done(function (result) {
    console.log(result);
  });
});

$(".deletecart").click(function (e) {
  $.ajax({
    url: "controllers/CartController.php",
    type: "POST",
    dataType: "json",
    data: {
      id: e.target.getAttribute("name"),
      type: "delete",
    },
  }).done(function (result) {
    console.log(result);
  });
  console.log(e.target.getAttribute("name"));
});
