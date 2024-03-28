$(document).ready(function () {

  $('.testimonials').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: true,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 479,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
    ]
  });


  var tabs = document.querySelectorAll(".tabs-btn .tab-btn");
  var tab_wrap = document.querySelectorAll(".tabs-content .tab-wrap");
    
  tabs.forEach(function(tab, tab_index){
      tab.addEventListener("click", function(){
          tabs.forEach(function(tab){
              tab.classList.remove("t-active");
          })
          
          tab.classList.add("t-active");
          
          tab_wrap.forEach(function(content, content_index){
              if(content_index == tab_index){
                  content.style.display = "block";
              }else{
                  content.style.display = "none";
              }
          })
      })
  })


  var info_btns = document.querySelectorAll(".info-btns .info-btn");
  var info_wrap = document.querySelectorAll(".info-contents .info-wrap");
    
  info_btns.forEach(function(info_btn, info_index){
    info_btn.addEventListener("click", function(){
      info_btns.forEach(function(info_btn){
        info_btn.classList.remove("info-active");
          })
          
          info_btn.classList.add("info-active");
          
          info_wrap.forEach(function(content, content_index){
              if(content_index == info_index){
                  content.style.display = "block";
              }else{
                  content.style.display = "none";
              }
          })
      })
  })

  var login_tabs = document.querySelectorAll(".login-tabs .tab-btn");
  var login_contents = document.querySelectorAll(".login-contents .login-wrap");
    
  login_tabs.forEach(function(login_btn, login_index){
    login_btn.addEventListener("click", function(){
      login_tabs.forEach(function(login_btn){
        login_btn.classList.remove("login-tab-active");
          })
          
          login_btn.classList.add("login-tab-active");
          
          login_contents.forEach(function(content, content_index){
              if(content_index == login_index){
                  content.style.display = "block";
              }else{
                  content.style.display = "none";
              }
          })
      })
  })

  var profile_tabs = document.querySelectorAll(".profile-tabs ul .tab-btn");
  var profile_contents = document.querySelectorAll(".profile-content .profile-wrap");
    
  profile_tabs.forEach(function(profile_btn, profile_index){
    profile_btn.addEventListener("click", function(){
      profile_tabs.forEach(function(profile_btn){
        profile_btn.classList.remove("p-active");
          })
          
          profile_btn.classList.add("p-active");
          
          profile_contents.forEach(function(pcontent, pcontent_index){
              if(pcontent_index == profile_index){
                  pcontent.style.display = "block";
              }else{
                  pcontent.style.display = "none";
              }
          })
      })
  })

  // $(function() {
  //   $('.quantity').niceNumber();
  // });
  // $(function() {
  //   $('.unit').niceNumber();
  // });

  $(".review-sec .profile-top .reviews-form-alt p").click(function(){
    $(".reviews-form-outer").css({
      "transform":"scale(1)",
    })
    $(".review-sec .profile-top .reviews-form").css({
      "transform":"scale(1)",
    })
  });

  $(".review-sec .profile-top .reviews-form h1 i").click(function(){
    $(".reviews-form-outer").css({
      "transform":"scale(0)",
    })
    $(".review-sec .profile-top .reviews-form").css({
      "transform":"scale(0)",
    })
  });

  var isMenuOpen = false;

  $("#hamburger").click(function () {
    if (isMenuOpen == false) {
      $(".menu").slideDown("1000");
      $("#hamburger").removeClass("fa-bars").addClass("fa-times");
      isMenuOpen = true;
    } else {
      $(".menu").slideUp("1000");
      $("#hamburger").removeClass("fa-times").addClass("fa-bars");
      isMenuOpen = false;
    }
  });

  $(window).resize(function () {
    var screenSize = $(window).width();

    if (screenSize > 991) {
      $("#nav-menu").removeAttr("style");
      $("#click-btn span").remove("fa-times").add("fa-bars");
    }
  });

  // design code End

  let cart = document.querySelectorAll('.add-cart');

  for (let i = 0; i < cart.length; i++) {
    cart[i].addEventListener('click', (e)=>{
      e.preventDefault();
      cartNumbers(e.target);
    })
  }

  function onLoadCart() {
    let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers){
      document.querySelector('.cart-total-item').textContent = productNumbers
    }
  }

  function cartNumbers(product) {
    let productName = (product.parentElement.parentElement.parentElement.nextElementSibling.firstElementChild.textContent);
    let productPrice = (product.parentElement.parentElement.parentElement.nextElementSibling.lastElementChild.firstElementChild.textContent);
    let itemCount = 0;
    let productNumbers = localStorage.getItem('cartNumbers');

    productNumbers = parseInt(productNumbers);

    if(productNumbers){
      localStorage.setItem('cartNumbers', productNumbers + 1);
      document.querySelector('.cart-total-item').textContent = productNumbers + 1;
    }else{
      localStorage.setItem('cartNumbers', 1);
      document.querySelector('.cart-total-item').textContent = 1;
    }

    setItems(productName, productPrice, itemCount);
  }

  function setItems(productName, productPrice, itemCount) {
    let cartItem = localStorage.getItem('productsInCart');
    cartItem = JSON.parse(cartItem);

    if(cartItem != null){
      if(cartItem[products.productName] == undefined){
        cartItem = {
          ...cartItem,
          [products.productName]:products
        }
      }
      cartItem[products.productName].productCount += 1;
    }else{
      itemCount = 1;
      products = 
        {
          productName : productName,
          productPrice : productPrice,
          productCount : itemCount
        }

      cartItem = {
        [products.productName]:products
      }
    }
    
      localStorage.setItem('productsInCart', JSON.stringify(cartItem));
  }

  onLoadCart();
});
