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

function Remove_cart(x) {
  var str_temp = "#" + String(x);
  $(str_temp).remove();
  //Total price
  Total_price_c();
  return true;
}

function Price_change(x) {
  if (x.length == 4) {
    x = x.slice(0, 1) + "." + x.slice(1);
  } else if (x.length == 5) {
    x = x.slice(0, 2) + "." + x.slice(2);
  } else if (x.length == 6) {
    x = x.slice(0, 3) + "." + x.slice(3);
  } else if ((x.length >= 7) & (x.length < 8)) {
    x = x.slice(0, 1) + "." + x.slice(1);
    x = x.slice(0, 5) + "." + x.slice(5);
  } else if ((x.length >= 8) & (x.length < 9)) {
    x = x.slice(0, 2) + "." + x.slice(2);
    x = x.slice(0, 6) + "." + x.slice(6);
  }
  x += "<sup>₫</sup>";
  return x;
}

function Decrease(x, y, z) {
  var result = document.getElementById(x);
  var min_number = result.min;
  if (Number(result.value) > Number(min_number)) {
    result.value--;
  }
  var str = String(Number(result.value) * y);
  str = Price_change(str);
  document.getElementById(z).innerHTML = str;
  //Total price
  Total_price_c();
  return true;
}

function Increase(x, y, z) {
  var result = document.getElementById(x);
  var max_number = result.max;
  if (Number(result.value) < Number(max_number)) {
    result.value++;
  }
  var str = String(Number(result.value) * y);
  str = Price_change(str);
  document.getElementById(z).innerHTML = str;
  //Total price
  Total_price_c();
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
});

function check_p() {
  var result = document.getElementById("item_c1");
  if (isNaN(result.value) || result.value < 1) {
    result.value = 1;
  }
}
///Total price
function Total_price_c() {
  var item_price_c = document.getElementsByClassName("item_price");
  var total_price_c = 0;
  for (var card = 0; card < item_price_c.length; card++) {
    if (card % 2 != 0) {
      var dot_card = item_price_c[card].textContent.replace(".", "");
      var dolar_card = dot_card.replace("₫", "");
      total_price_c += Number(dolar_card);
    }
  }
  if (item_price_c.length != 0) {
    document.getElementsByClassName("total_price")[0].innerHTML = Price_change(
      String(total_price_c)
    );
  }
}

Total_price_c();

function Check_Total_price() {
  var num_pro_c = document.getElementsByClassName("number_cart");
  var item_price_c = document.getElementsByClassName("item_price");
  var total_price_c = 0;
  for (var card = 0; card < num_pro_c.length; card++) {
    if (num_pro_c[card].value == "") {
      alert("ERROR");
      num_pro_c[card].value = 1;
      return false;
    }
  }
  for (var card = 0; card < item_price_c.length; card++) {
    if (card % 2 == 0) {
      var dot_card = item_price_c[card].textContent.replace(".", "");
      var dolar_card = dot_card.replace("₫", "");
      item_price_c[card + 1].innerHTML =
        Number(dolar_card) * Number(num_pro_c[card / 2].value);
      item_price_c[card + 1].innerHTML = Price_change(
        String(item_price_c[card + 1].innerHTML)
      );
      total_price_c =
        total_price_c + Number(dolar_card) * Number(num_pro_c[card / 2].value);
    }
  }
  if (item_price_c.length != 0) {
    document.getElementsByClassName("total_price")[0].innerHTML = Price_change(
      String(total_price_c)
    );
  }
}

/// Product js///
function check_number_p(e) {
  var num_p = e.which ? e.which : e.keycode;
  if (num_p > 31 && (num_p < 48 || num_p > 57)) return false;
  return true;
}

function Decrease_c() {
  var result_p = document.getElementById("item_c1");
  if (!isNaN(result_p.value) && result_p.value > 1) result_p.value--;
  return true;
}

function Increase_c() {
  var result_p = document.getElementById("item_c1");
  if (!isNaN(result_p.value)) result_p.value++;
  return true;
}

////Tab
var tab_link_d = document.getElementsByClassName("tab_header_text");
var tab_content_d = document.getElementsByClassName("tab_content_d");
function showContent_d(id) {
  for (var i = 0; i < tab_content_d.length; i++) {
    tab_content_d[i].style.display = "none";
  }
  var content_d = document.getElementById(id);
  content_d.style.display = "block";
}
for (var i = 0; i < tab_link_d.length; i++) {
  tab_link_d[i].addEventListener("click", function () {
    var id = this.textContent;
    for (var i = 0; i < tab_link_d.length; i++) {
      tab_link_d[i].classList.remove("tab_current");
    }
    this.className += " tab_current";
    showContent_d(id);
  });
}
if (!isNaN(tab_link_d)) {
  showContent_d("Mô tả");
}

////Img related
const img_d = document.getElementsByClassName("img_box_d");
var icon_d = document.getElementsByClassName("icon_box_d");
var op_img = document.getElementsByClassName("detail_link");
for (let i = 0; i < img_d.length; i++) {
  img_d[i].addEventListener("mouseover", function () {
    icon_d[i].style.display = "block";
    op_img[i].style.opacity = "0.5";
  });
  img_d[i].addEventListener("mouseout", function () {
    icon_d[i].style.display = "none";
    op_img[i].style.opacity = "1";
  });
}
///////////
