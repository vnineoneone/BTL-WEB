function countDown() {
  // Set the date we're counting down to
  var countDownDate = new Date("Jan 1, 2023 15:37:25").getTime();

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
    var time = document.getElementById("time1");
    if (time) {
      time.innerHTML = `<span>${days}<p>Ngày</p></span><span>${hours}<p> Giờ</p>
    </span><span>${minutes}<p>Phút</p></span><span>${seconds}<p>Giây</p></span>`;

      // If the count down is over, write some text
      if (distance < 0) {
        clearInterval(x);
        time.innerHTML = "EXPIRED";
      }
    }
    var time = document.getElementById("time2");
    if (time) {
      time.innerHTML = `<span>${days}<p>Ngày</p></span><span>${hours}<p> Giờ</p>
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
  var str_temp = "." + String(x);
  $("div").remove(str_temp);
  //Total price
  Total_price_c();
  //Remove
  var cart_product = document.getElementsByClassName("item_cart");
  var mobile_product = document.getElementsByClassName("small_product_c");
  if(cart_product.length == 0)
  {
    $(".product_contain").empty();
    var add_p = document.createElement("p");
    var text_p = document.createTextNode("Không có sản phẩm nào để hiển thị");
    add_p.appendChild(text_p);
    var text_cart = document.getElementsByClassName("product_contain");
    text_cart[0].appendChild(add_p);
  }

  if(mobile_product.length == 0)
  {
    $(".small_content_c").empty();
    var add_p = document.createElement("p");
    var text_p = document.createTextNode("Không có sản phẩm nào để hiển thị");
    add_p.appendChild(text_p);
    var text_cart = document.getElementsByClassName("small_content_c");
    text_cart[0].appendChild(add_p);
    var text_p = text_cart[0].firstChild;
    text_p.style.padding= "0px 15px";
  }
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
  var result = document.getElementsByClassName(x);
  for(var i = 0; i< result.length; i++)
  {
    var min_number = result[i].min;
    if (Number(result[i].value) > Number(min_number)) {
      result[i].value--;
    }
  }
  var str = String(Number(result.value) * y);
  str = Price_change(str);
  document.getElementById(z).innerHTML = str;
  //Total price
  Total_price_c();
  return true;
}

function Increase(x, y, z) {
  var result = document.getElementsByClassName(x);
  for(var i = 0; i< result.length; i++)
  {
    var max_number = result[i].max;
    if (Number(result[i].value) < Number(max_number)) {
      result[i].value++;
    }
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

$("#post_comment").click(function (e) {
  var id = $("#id_product").val();
  var content = $("#comment_content").val();
  var rating = $("input[name='rating']:checked").val();
  var list_star = "";
  $.ajax({
    url: "controllers/CommentController.php",
    type: "POST",
    dataType: "json",
    data: {
      id: id,
      content: content,
      rating: rating,
    },
  }).done(function (result) {
    $("#comment_content").val("");
    for (let i = 0; i < parseInt(rating); i++) {
      list_star += '<i class="fas fa-star" id="star"></i>';
    }
    $("#review-list2").prepend(`<li>
        <div class="d-flex">
            <div class="left">
                <span>
                    <img src="assets/images/avatar.png" class="profile-pict-img img-fluid" alt="" />
                </span>
            </div>
            <div class="right">
                <h4>
                    ${result["name_user"]}
                    <span class="gig-rating text-body-2">
                    ${list_star}
                    </span>
                </h4>
                <div class="country d-flex align-items-center">
                    <span class="publish py-2 d-inline-block w-100"> <?php echo $row_bl['created_at'] ?></span>
                </div>
                <div class="review-description">
                    <p>
                        ${content}
                    </p>
                </div>
            </div>
        </div>
    </li>`);
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
      var dot_card = item_price_c[card].textContent.split(".").join("");
      var dolar_card = dot_card.replace("₫", "");
      total_price_c += Number(dolar_card);
    }
  }
  if (item_price_c.length != 0) {
    document.getElementsByClassName("total_price")[0].innerHTML = Price_change(
      String(total_price_c)
    );
    document.getElementsByClassName("small_price")[0].innerHTML = Price_change(
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
      var dot_card = item_price_c[card].textContent.split(".").join("");
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
    document.getElementsByClassName("small_price")[0].innerHTML = Price_change(
      String(total_price_c)
    );
  }
}
Check_Total_price();
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
var img_d = document.getElementsByClassName("img_box_d");
var count_icon = 0;
if (img_d.length == 0) {
  img_d = document.getElementsByClassName("product_image");
}
var icon_d = document.getElementsByClassName("icon_box_d");
var op_img = document.getElementsByClassName("detail_link");
function Image_icon() {
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
}
Image_icon();
///Image change
function Set_image(x) {
  var image_temp = document.getElementsByClassName("image_pt");
  var image_id = document.getElementById(x);
  image_temp[0].setAttribute("src", image_id.getAttribute("src"));
}
///////////
////Filter
var filter_price = document.getElementsByClassName("product_price");
var array_init = new Array(filter_price.length);
var array_price = new Array(filter_price.length);
var flag_check = 1;
for (var i = 0; i < filter_price.length; i++) {
  var filter_dot = filter_price[i].textContent.split(".").join("");
  var filter_dolar = filter_dot.replace("₫", "");
  array_price[i] = Number(filter_dolar);
  array_init[i] = Number(filter_dolar);
}
var filter_div = document.getElementsByClassName("filterDiv");
function Filter_price_check() {
  for (var j = 0; j < filter_div.length; j++) {
    filter_div[j].style.display = "none";
  }
  var check_box = document.getElementsByName("price_filter");
  for (var i = 0; i < check_box.length; i++) {
    if (check_box[i].checked === true) {
      Display_product(check_box[i].value);
      flag_check = 0;
    }
  }
  if (flag_check == 1) {
    for (var j = 0; j < filter_div.length; j++) {
      filter_div[j].style.display = "block";
    }
  }
  flag_check = 1;
}

function Display_product(x) {
  for (var i = 0; i < filter_price.length; i++) {
    var filter_dot = filter_price[i].textContent.split(".").join("");
    var filter_dolar = filter_dot.replace("₫", "");
    if (x[0] == "D") {
      if (Number(filter_dolar) < 100000) {
        var id_filter = filter_price[i].getAttribute("class");
        id_filter = id_filter.substring(0, id_filter.indexOf(" "));
        var filter_product = document.getElementsByClassName(id_filter);
        filter_product[0].style.display = "block";
      }
    }
    if (x[0] == "1") {
      if ((Number(filter_dolar) >= 100000) & (Number(filter_dolar) <= 200000)) {
        var id_filter = filter_price[i].getAttribute("class");
        id_filter = id_filter.substring(0, id_filter.indexOf(" "));
        var filter_product = document.getElementsByClassName(id_filter);
        filter_product[0].style.display = "block";
      }
    }
    if (x[0] == "2") {
      if ((Number(filter_dolar) >= 200000) & (Number(filter_dolar) <= 500000)) {
        var id_filter = filter_price[i].getAttribute("class");
        id_filter = id_filter.substring(0, id_filter.indexOf(" "));
        var filter_product = document.getElementsByClassName(id_filter);
        filter_product[0].style.display = "block";
      }
    }
    if (x[0] == "5") {
      if (
        (Number(filter_dolar) >= 500000) &
        (Number(filter_dolar) <= 1000000)
      ) {
        var id_filter = filter_price[i].getAttribute("class");
        id_filter = id_filter.substring(0, id_filter.indexOf(" "));
        var filter_product = document.getElementsByClassName(id_filter);
        filter_product[0].style.display = "block";
      }
    }
    if (x[0] == "T") {
      if (Number(filter_dolar) > 1000000) {
        var id_filter = filter_price[i].getAttribute("class");
        id_filter = id_filter.substring(0, id_filter.indexOf(" "));
        var filter_product = document.getElementsByClassName(id_filter);
        filter_product[0].style.display = "block";
      }
    }
  }
}

function Filter(x) {
  var sort_text = document.getElementById("sort_text_c");
  if (x == "all") {
    sort_text.innerHTML = "Mặc định";
    for (var j = 0; j < filter_div.length; j++) {
      Filter_add("0");
    }
  }

  if (x == "increase") {
    sort_text.innerHTML = "Giá tăng dần";
    for (var i = 0; i < filter_price.length - 1; i++) {
      for (var j = i + 1; j < filter_price.length; j++) {
        if (array_price[i] > array_price[j]) {
          var temp_array = array_price[i];
          array_price[i] = array_price[j];
          array_price[j] = temp_array;
        }
      }
    }
    Filter_add("1");
  }

  if (x == "decrease") {
    sort_text.innerHTML = "Giá giảm dần";
    for (var i = 0; i < filter_price.length - 1; i++) {
      for (var j = i + 1; j < filter_price.length; j++) {
        if (array_price[i] < array_price[j]) {
          var temp_array = array_price[i];
          array_price[i] = array_price[j];
          array_price[j] = temp_array;
        }
      }
    }
    Filter_add("1");
  }

  //Delete addEventListener()
  var old_element = document.getElementsByClassName("product_image");
  for (var i = 0; i < old_element.length; i++) {
    old_element[i].replaceWith(old_element[i].cloneNode(true));
  }
  Image_icon();
}

function Filter_add(x) {
  if (x == "1") {
    for (var i = 0; i < filter_price.length; i++) {
      for (var j = 0; j < filter_price.length; j++) {
        var filter_dot = filter_price[j].textContent.split(".").join("");
        var filter_dolar = filter_dot.replace("₫", "");
        if (array_price[i] == Number(filter_dolar)) {
          var id_filter = filter_price[j].getAttribute("class");
          id_filter = id_filter.substring(0, id_filter.indexOf(" "));
          var str_temp = "#" + String(id_filter);
          $(str_temp).appendTo("#filter_contain");
        }
      }
    }
  } else if (x == "0") {
    for (var i = 0; i < filter_price.length; i++) {
      for (var j = 0; j < filter_price.length; j++) {
        var filter_dot = filter_price[j].textContent.split(".").join("");
        var filter_dolar = filter_dot.replace("₫", "");
        if (array_init[i] == Number(filter_dolar)) {
          var id_filter = filter_price[j].getAttribute("class");
          id_filter = id_filter.substring(0, id_filter.indexOf(" "));
          var str_temp = "#" + String(id_filter);
          $(str_temp).appendTo("#filter_contain");
        }
      }
    }
  }
}
///////////
///// Category sidebar
function Show_icon_d()
{
  var cate = document.getElementsByClassName("sidebar");
  var icon_side = document.getElementsByClassName("icon_side_d");
  if(icon_side[0].getAttribute("class") == "icon_side_d openf")
  {
    icon_side[0].setAttribute("class","icon_side_d");
    cate[0].setAttribute("class","sidebar col-md-12 col-lg-3");
  }
  else
  {
    cate[0].setAttribute("class","sidebar col-md-12 col-lg-3 openf");
    icon_side[0].setAttribute("class","icon_side_d openf");
  }
}
///////////
