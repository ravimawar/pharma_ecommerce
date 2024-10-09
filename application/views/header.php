<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from htmldemo.net/mecina/mecina/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Sep 2024 09:04:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Mecina - Medical Shop Website Template"/>
    <meta name="keywords" content="medical, pharmacy, health, medicine, doctor, ecommerce, shop, responsive, store, clinic, hospital, healthcare, modern, coronavirus, medical shop"/>
    <meta name="author" content="Hastech"/>

    <title>SSL Healthcare</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.ico');?>" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--== Bootstrap CSS ==-->
    <link href="<?= base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"/>
    <!--== Line Awesome CSS ==-->
    <link href="<?= base_url('assets/css/line-awesome.css');?>" rel="stylesheet"/>
    <!--== FancyBox CSS ==-->
    <link href="<?= base_url('assets/css/jquery.fancybox.min.css');?>" rel="stylesheet"/>
    <!--== Swiper CSS ==-->
    <link href="<?= base_url('assets/css/swiper.min.css'); ?>" rel="stylesheet"/>
    <!--== Main Style CSS ==-->
    <link href="<?= base_url('assets/css/style.css');?>" rel="stylesheet" />

</head>

<body>

<!--wrapper start-->
<div class="wrapper home-three-wrapper">

  <!--== Start Header Wrapper ==-->
  <header class="header-wrapper header-style3-res mt-5">
    <!-- <div class="header-top">
      <div class="container">
        <div class="row d-none d-sm-block">
          <div class="col-12">
            <div class="header-top-inner">
              <div class="header-top-info">
                <ul>
                  <li><a href="index.html"><i class="lab la-facebook-f"></i></a></li>
                  <li><a href="index.html"><i class="lab la-twitter"></i></a></li>
                  <li><a href="index.html"><i class="lab la-youtube"></i></a></li>
                  <li><a href="index.html"><i class="lab la-instagram"></i></a></li>
                </ul>
              </div>
              <div class="header-top-action-area">
                <div class="info-link">
                  <a href="login-register.html"><i class="las la-map-marker-alt"></i> Store Locator</a>
                </div>
                <div class="info-link info-link-style2">
                  <a href="login-register.html"><i class="lar la-user"></i> Checkout</a>
                </div>
                <div class="header-currency-dropdown">
                  <button type="button" class="btn-currency dropdown-toggle" id="dropdownCurrency" data-bs-toggle="dropdown" aria-expanded="false"><span>$ Currency</span></button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownCurrency">
                    <li class="dropdown-item active"><span>€ Euro</span></li>
                    <li class="dropdown-item"><span>£ Pound Sterling</span></li>
                    <li class="dropdown-item"><span>£ Pound Sterling</span></li>
                  </ul>
                </div>
                <div class="header-lang-dropdown">
                  <button type="button" class="btn-lang dropdown-toggle" id="dropdownLang" data-bs-toggle="dropdown" aria-expanded="false"><img src="assets/img/photos/1.webp" alt="Image" width="16" height="11"> <span>Language</span></button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownLang">
                    <li class="dropdown-item active"><img src="assets/img/photos/1.webp" alt="Image" width="16" height="11"> <span> English</span></li>
                    <li class="dropdown-item"><img src="assets/img/photos/2.webp" alt="Image" width="16" height="11"> <span> Germany</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row d-sm-none">
          <div class="col-12">
            <div class="header-action-area header-action-res">
              <div class="header-action-phone">
                <div class="icon">
                  <i class="las la-phone-volume"></i>
                </div>
                <div class="phone">
                  <span>Call Us:</span> <a href="tel:+11238889999">+1 123 888 9999</a>
                </div>
              </div>
              <div class="header-action-register">
                <div class="icon">
                  <i class="las la-user-circle"></i>
                </div>
                <div class="phone">
                  <span>Register</span> <a href="login-register.html">Or Sign In</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="header-area sticky-header header-middle header-middle-style3 d-none d-xl-block">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-2">
            <div class="header-logo-area">
              <a href="index.html">
                <img class="logo-main" src="assets/img/logo-light.webp" alt="Logo" width="102" height="45"/>
              </a>
            </div>
          </div>
          <div class="col-lg-10">
            <div class="header-middle-right action-middle-text-light">
              <div class="header-search-box-style2 search-box-style2">
                <form action="#">
                  <div class="categories-dropdown">
                    <select class="select-dropdown">
                      <option selected="">All Categories</option>
                      <option value="lan1">First Aid Kit</option>
                      <option value="lan2">Health Monitors</option>
                      <option value="lan3">Medical Supplies</option>
                      <option value="lan1">Medicine</option>
                      <option value="lan2">Clothing</option>
                      <option value="lan3">Fitness</option>
                    </select>
                  </div>
                  <input type="search" placeholder="Search entire store product here ...">
                  <button type="submit" class="btn-src">
                    <i class="lab la-sistrix"></i>
                  </button>
                </form>
              </div>
              <div class="header-action-register">
                <div class="icon">
                  <i class="las la-user-circle"></i>
                </div>
                <div class="phone">
                  <span>Register</span> <a href="<?= base_url('login');?>">Or Sign In</a>
                </div>
              </div>
              <div class="header-middle-action-area">
                <div class="header-action-wishlist">
                  <!-- <a class="btn-wishlist" href="shop-wishlist.html">
                    <span class="cart-count">3</span>
                    <i class="la la-heart-o"></i>
                  </a> -->
                </div>
                <div class="header-action-cart header-minicart">
                  <a class="btn-cart cart-icon" href="<?= base_url('cart');?>">
                    <span class="cart-count">2</span>
                    <i class="la la-shopping-bag"></i>
                  </a>
                  <span class="cart-amount">$92.00</span>
                  <div class="header-minicart-content minicart-content-style2">
                    <div class="minicart-inner">
                      <div class="minicart-list">
                        <div class="minicart-item">
                          <a class="thumb" href="shop-single-product.html">
                            <img src="assets/img/shop/13.webp" alt="Image-HasTech" width="80" height="80">
                            <span>Wayfarer Messenger</span>
                            <span class="quantity-number">1x</span>
                          </a>
                          <p class="quantity-price">$40.90</p>
                          <p class="quantity-dimension">Dimension: 40x60cm</p>
                          <button class="minicart-remove" type="button">×</button>
                        </div>
                        <div class="minicart-item">
                          <a class="thumb" href="shop-single-product.html">
                            <img src="assets/img/shop/14.webp" alt="Image-HasTech" width="80" height="80">
                            <span>Beginner's Antico</span>
                            <span class="quantity-number">1x</span>
                          </a>
                          <p class="quantity-price">$44.10</p>
                          <p class="quantity-dimension">Dimension: 40x60cm</p>
                          <button class="minicart-remove" type="button">×</button>
                        </div>
                      </div>
                      <div class="minicart-total">
                        <div class="minicart-price">
                          <span>Subtotal</span>
                          <span class="total">$85.00</span>
                        </div>
                        <div class="minicart-price">
                          <span>Shipping</span>
                          <span class="total">$7.00</span>
                        </div>
                        <div class="minicart-price">
                          <span>Taxes</span>
                          <span class="total">$85.00</span>
                        </div>
                        <div class="minicart-price minicart-subtotal">
                          <span>Total</span>
                          <span class="total">$92.00</span>
                        </div>
                      </div>
                      <div class="minicart-buttons">
                        <a class="cart-button" href="shop-checkout.html">Checkout</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-style3-area d-none d-xl-block">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-sm-5 col-md-4 col-lg-3">
            <div class="vertical-menu vertical-menu-style2">
              <button class="menu-btn"><span>All Departments</span></button>
              <ul class="vmenu-content vmenu-content-none">
                <li class="menu-item">
                  <a class="menu-item-title" href="shop.html">Shop<i class="las la-angle-right"></i></a>
                  <ul class="verticale-mega-menu column-two flex-wrap">
                    <li>
                      <a class="title" href="shop.html"><strong>Bottoms</strong></a>
                      <ul class="submenu-item">
                        <li><a href="shop.html">Leggings</a></li>
                        <li><a href="shop.html">Pants & Capris</a></li>
                        <li><a href="shop.html">Skirts</a></li>
                        <li><a href="shop.html">Wide Leg Pants</a></li>
                      </ul>
                    </li>
                    <li>
                      <a class="title" href="shop.html"><span><strong>Hot Categories</strong></span></a>
                      <ul class="submenu-item">
                        <li><a href="shop.html">Blouses & Shirts</a></li>
                        <li><a href="shop.html">Dresses</a></li>
                        <li><a href="shop.html">Jackets & Coats</a></li>
                        <li><a href="shop.html">Jeans</a></li>
                        <li><a href="shop.html">Sweaters</a></li>
                      </ul>
                    </li>
                    <li>
                      <a class="title" href="shop.html"><span><strong>Outerwear & Jackets</strong></span></a>
                      <ul class="submenu-item">
                        <li><a href="shop.html">Basic Jackets</a></li>
                        <li><a href="shop.html">Blazers</a></li>
                        <li><a href="shop.html">Down Coats</a></li>
                        <li><a href="shop.html">Real Fur</a></li>
                        <li><a href="shop.html">Trench Coats</a></li>
                      </ul>
                    </li>
                    <li>
                      <a class="title" href="shop.html"><span><strong>Weddings & Events</strong></span></a>
                      <ul class="submenu-item">
                        <li><a href="shop.html">Bridesmaid Dresses</a></li>
                        <li><a href="shop.html">Evening Dresses</a></li>
                        <li><a href="shop.html">Prom Dresses</a></li>
                        <li><a href="shop.html">Wedding Accessories</a></li>
                        <li><a href="shop.html">Wedding Dresses</a></li>
                      </ul>
                    </li>
                  </ul>
                  <!-- sub menu -->
                </li>
                <li class="menu-item">
                  <a class="menu-item-title" href="shop.html">Medicine<i class="las la-angle-right"></i></a>
                  <ul class="verticale-mega-menu column-two flex-wrap">
                    <li>
                      <a class="title" href="shop.html"><strong>Bottoms</strong></a>
                      <ul class="submenu-item">
                        <li><a href="shop.html">Leggings</a></li>
                        <li><a href="shop.html">Pants & Capris</a></li>
                        <li><a href="shop.html">Skirts</a></li>
                        <li><a href="shop.html">Wide Leg Pants</a></li>
                      </ul>
                    </li>
                    <li>
                      <a class="title" href="shop.html"><span><strong>Hot Categories</strong></span></a>
                      <ul class="submenu-item">
                        <li><a href="shop.html">Blouses & Shirts</a></li>
                        <li><a href="shop.html">Dresses</a></li>
                        <li><a href="shop.html">Jackets & Coats</a></li>
                        <li><a href="shop.html">Jeans</a></li>
                        <li><a href="shop.html">Sweaters</a></li>
                      </ul>
                    </li>
                    <li>
                      <a class="title" href="shop.html"><span><strong>Outerwear & Jackets</strong></span></a>
                      <ul class="submenu-item">
                        <li><a href="shop.html">Basic Jackets</a></li>
                        <li><a href="shop.html">Blazers</a></li>
                        <li><a href="shop.html">Down Coats</a></li>
                        <li><a href="shop.html">Real Fur</a></li>
                        <li><a href="shop.html">Trench Coats</a></li>
                      </ul>
                    </li>
                    <li>
                      <a class="title" href="shop.html"><span><strong>Weddings & Events</strong></span></a>
                      <ul class="submenu-item">
                        <li><a href="shop.html">Bridesmaid Dresses</a></li>
                        <li><a href="shop.html">Evening Dresses</a></li>
                        <li><a href="shop.html">Prom Dresses</a></li>
                        <li><a href="shop.html">Wedding Accessories</a></li>
                        <li><a href="shop.html">Wedding Dresses</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a class="menu-item-title" href="shop.html">First Aid Kit<i class="las la-angle-right"></i></a>
                  <ul class="verticale-mega-menu column-two flex-wrap">
                    <li>
                      <a class="title" href="shop.html"><strong>Bottoms</strong></a>
                      <ul class="submenu-item">
                        <li><a href="shop.html">Leggings</a></li>
                        <li><a href="shop.html">Pants & Capris</a></li>
                        <li><a href="shop.html">Skirts</a></li>
                        <li><a href="shop.html">Wide Leg Pants</a></li>
                      </ul>
                    </li>
                    <li>
                      <a class="title" href="shop.html"><span><strong>Hot Categories</strong></span></a>
                      <ul class="submenu-item">
                        <li><a href="shop.html">Blouses & Shirts</a></li>
                        <li><a href="shop.html">Dresses</a></li>
                        <li><a href="shop.html">Jackets & Coats</a></li>
                        <li><a href="shop.html">Jeans</a></li>
                        <li><a href="shop.html">Sweaters</a></li>
                      </ul>
                    </li>
                    <li>
                      <a class="title" href="shop.html"><span><strong>Outerwear & Jackets</strong></span></a>
                      <ul class="submenu-item">
                        <li><a href="shop.html">Basic Jackets</a></li>
                        <li><a href="shop.html">Blazers</a></li>
                        <li><a href="shop.html">Down Coats</a></li>
                        <li><a href="shop.html">Real Fur</a></li>
                        <li><a href="shop.html">Trench Coats</a></li>
                      </ul>
                    </li>
                    <li>
                      <a class="title" href="shop.html"><span><strong>Weddings & Events</strong></span></a>
                      <ul class="submenu-item">
                        <li><a href="shop.html">Bridesmaid Dresses</a></li>
                        <li><a href="shop.html">Evening Dresses</a></li>
                        <li><a href="shop.html">Prom Dresses</a></li>
                        <li><a href="shop.html">Wedding Accessories</a></li>
                        <li><a href="shop.html">Wedding Dresses</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="menu-item"><a class="menu-item-title" href="shop.html">Medical Supplies</a></li>
                <li class="menu-item"><a class="menu-item-title" href="shop.html">Accessories</a></li>
                <li class="menu-item"><a class="menu-item-title" href="shop.html">Disposable Medical</a></li>
                <li class="menu-item"><a class="menu-item-title" href="shop.html">Healthcare</a></li>
                <li class="menu-item"><a class="menu-item-title" href="about.html">About Us</a></li>
                <li class="menu-item"><a class="menu-item-title" href="contact.html">Contact Us</a></li>
                <li class="menu-item"><a class="menu-item-title" href="shop.html">More Categories</a></li>
              </ul>
              <!-- menu content -->
            </div>
          </div>
          <div class="col-xl-7 col-lg-8 d-none d-lg-block">
            <div class="header-navigation-area">
              <ul class="main-menu nav position-relative">
                <li class="has-submenu active"><a href="index.html">Home</a>
                  <ul class="submenu-nav">
                    <li><a href="index.html">Home One</a></li>
                    <li><a href="index-2.html">Home Two</a></li>
                    <li><a href="index-3.html">Home Three</a></li>
                    <li><a href="index-4.html">Home Four</a></li>
                  </ul>
                </li>
                <li class="has-submenu position-static"><a href="#/"><span>Shop</span></a>
                  <ul class="submenu-nav submenu-nav-mega submenu-nav-banner">
                    <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Shop Layouts</span></a>
                      <ul>
                        <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                        <li><a href="shop.html">Shop 4 Column</a></li>
                        <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                        <li><a href="shop.html">Shop No Sidebar</a></li>
                      </ul>
                    </li>
                    <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Shop Pages</span></a>
                      <ul>
                        <li><a href="shop-cart.html">Cart page</a></li>
                        <li><a href="shop-checkout.html">Checkout</a></li>
                        <li><a href="my-account.html">My Account</a></li>
                        <li><a href="shop-wishlist.html">Wishlist</a></li>
                        <li><a href="shop-compare.html">Compare</a></li>
                      </ul>
                    </li>
                    <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Product Types</span></a>
                      <ul>
                        <li><a href="shop-single-product.html">Product Details</a></li>
                        <li><a href="shop-single-product-variable.html">Product Variable</a></li>
                        <li><a href="shop-single-product-grouped.html">Product Grouped</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="has-submenu"><a href="index.html">Pages</a>
                  <ul class="submenu-nav">
                    <li><a href="login-register.html">Login / Register</a></li>
                    <li><a href="coming-soon.html">Coming soon</a></li>
                    <li><a href="page-not-found.html">404</a></li>
                  </ul>
                </li>
                <li class="has-submenu"><a href="blog.html">Blog</a>
                  <ul class="submenu-nav">
                    <li><a href="blog.html">Blog 3 Column</a></li>
                    <li><a href="blog-4-column.html">Blog 4 Column</a></li>
                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                    <li><a href="blog.html">Blog No Sidebar</a></li>
                    <li><a href="blog-details.html">Blog Details Left Sidebar</a></li>
                    <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                    <li><a href="blog-details-no-sidebar.html">Blog Details No Sidebar</a></li>
                  </ul>
                </li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-6 col-xl-2 col-lg-1 d-none d-lg-block">
            <div class="header-action-area">
              <div class="header-currency-dropdown">
                <button type="button" class="btn-currency dropdown-toggle" id="dropdownCurrency2" data-bs-toggle="dropdown" aria-expanded="false"><span>$ Currency</span></button>
                <ul class="dropdown-menu" aria-labelledby="dropdownCurrency2">
                  <li class="dropdown-item active"><span>€ Euro</span></li>
                  <li class="dropdown-item"><span>£ Pound Sterling</span></li>
                  <li class="dropdown-item"><span>£ Pound Sterling</span></li>
                </ul>
              </div>
              <div class="header-lang-dropdown">
                <button type="button" class="btn-lang dropdown-toggle" id="dropdownLang2" data-bs-toggle="dropdown" aria-expanded="false"><img src="assets/img/photos/1.webp" alt="Image" width="16" height="11"> <span>Language</span></button>
                <ul class="dropdown-menu" aria-labelledby="dropdownLang2">
                  <li class="dropdown-item active"><img src="assets/img/photos/1.webp" alt="Image" width="16" height="11"> <span> English</span></li>
                  <li class="dropdown-item"><img src="assets/img/photos/2.webp" alt="Image" width="16" height="11"> <span> Germany</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-area header-default sticky-header d-xl-none">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-7 col-sm-2 col-md-3 col-lg-4 col-xxl-2">
            <div class="header-logo-area">
              <a href="index.html">
                <img class="logo-main" src="assets/img/logo.webp" alt="Logo" width="102" height="45"/>
                <img class="logo-light" src="assets/img/logo.webp" alt="Logo" width="102" height="45"/>
              </a>
            </div>
          </div>
          <div class="col-lg-4 d-none d-xxl-block">
            <div class="header-navigation-area">
              <ul class="main-menu nav position-relative">
                <li class="has-submenu active"><a href="index.html">Home</a>
                  <ul class="submenu-nav">
                    <li><a href="index.html">Home One</a></li>
                    <li><a href="index-2.html">Home Two</a></li>
                    <li><a href="index-3.html">Home Three</a></li>
                    <li><a href="index-4.html">Home Four</a></li>
                  </ul>
                </li>
                <li class="has-submenu position-static"><a href="#/"><span>Shop</span></a>
                  <ul class="submenu-nav submenu-nav-mega submenu-nav-banner">
                    <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Shop Layouts</span></a>
                      <ul>
                        <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                        <li><a href="shop.html">Shop 4 Column</a></li>
                        <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                        <li><a href="shop.html">Shop No Sidebar</a></li>
                      </ul>
                    </li>
                    <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Shop Pages</span></a>
                      <ul>
                        <li><a href="shop-cart.html">Cart page</a></li>
                        <li><a href="shop-checkout.html">Checkout</a></li>
                        <li><a href="my-account.html">My Account</a></li>
                        <li><a href="shop-wishlist.html">Wishlist</a></li>
                        <li><a href="shop-compare.html">Compare</a></li>
                      </ul>
                    </li>
                    <li class="mega-menu-item"><a href="#/" class="mega-title"><span>Product Types</span></a>
                      <ul>
                        <li><a href="shop-single-product.html">Product Details</a></li>
                        <li><a href="shop-single-product-variable.html">Product Variable</a></li>
                        <li><a href="shop-single-product-grouped.html">Product Grouped</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="about.html">About Us</a></li>
                <li class="has-submenu"><a href="blog.html">Blog</a>
                  <ul class="submenu-nav">
                    <li><a href="blog.html">Blog 3 Column</a></li>
                    <li><a href="blog-4-column.html">Blog 4 Column</a></li>
                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                    <li><a href="blog.html">Blog No Sidebar</a></li>
                    <li><a href="blog-details.html">Blog Details Left Sidebar</a></li>
                    <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                    <li><a href="blog-details-no-sidebar.html">Blog Details No Sidebar</a></li>
                  </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-5 col-sm-10 col-md-9 col-lg-8 col-xxl-6">
            <div class="header-action-area">
              <div class="header-search-box d-none d-xl-block">
                <form action="#" method="post">
                  <div class="form-input-group">
                    <input type="text" id="search2" placeholder="Search entire store here ...">
                    <button type="submit" class="btn-src">
                      <i class="lab la-sistrix"></i>
                    </button>
                  </div>
                </form>
              </div>
              <div class="header-action-phone d-none d-sm-flex">
                <div class="icon">
                  <i class="las la-phone-volume"></i>
                </div>
                <div class="phone">
                  <span>Call Us:</span> <a href="tel:+11238889999">+1 123 888 9999</a>
                </div>
              </div>
              <div class="header-action-register d-none d-sm-flex">
                <div class="icon">
                  <i class="las la-user-circle"></i>
                </div>
                <div class="phone">
                  <span>Register</span> <a href="<?= base_url('login');?>">Or Sign In</a>
                </div>
              </div>
              <div class="header-search-box d-sm-none">
                <button class="btn-search btn-search-menu btn-search-style2">
                  <i class="las la-search"></i>
                </button>
              </div>
              <div class="header-middle-action-area">
                <div class="header-action-wishlist">
                  <a class="btn-wishlist" href="shop-wishlist.html">
                    <span class="cart-count">3</span>
                    <i class="la la-heart-o"></i>
                  </a>
                </div>
                <div class="header-action-cart header-minicart">
                  <a class="btn-cart cart-icon" href="shop-cart.html">
                    <span class="cart-count">2</span>
                    <i class="la la-shopping-bag"></i>
                  </a>
                  <span class="cart-amount">$92.00</span>
                  <div class="header-minicart-content">
                    <div class="minicart-inner">
                      <div class="minicart-list">
                        <div class="minicart-item">
                          <a class="thumb" href="shop-single-product.html">
                            <img src="assets/img/shop/13.webp" alt="Image-HasTech" width="80" height="80">
                            <span>Wayfarer Messenger</span>
                            <span class="quantity-number">1x</span>
                          </a>
                          <p class="quantity-price">$40.90</p>
                          <p class="quantity-dimension">Dimension: 40x60cm</p>
                          <button class="minicart-remove" type="button">×</button>
                        </div>
                        <div class="minicart-item">
                          <a class="thumb" href="shop-single-product.html">
                            <img src="assets/img/shop/14.webp" alt="Image-HasTech" width="80" height="80">
                            <span>Beginner's Antico</span>
                            <span class="quantity-number">1x</span>
                          </a>
                          <p class="quantity-price">$44.10</p>
                          <p class="quantity-dimension">Dimension: 40x60cm</p>
                          <button class="minicart-remove" type="button">×</button>
                        </div>
                      </div>
                      <div class="minicart-total">
                        <div class="minicart-price">
                          <span>Subtotal</span>
                          <span class="total">$85.00</span>
                        </div>
                        <div class="minicart-price">
                          <span>Shipping</span>
                          <span class="total">$7.00</span>
                        </div>
                        <div class="minicart-price">
                          <span>Taxes</span>
                          <span class="total">$85.00</span>
                        </div>
                        <div class="minicart-price minicart-subtotal">
                          <span>Total</span>
                          <span class="total">$92.00</span>
                        </div>
                      </div>
                      <div class="minicart-buttons">
                        <a class="cart-button" href="shop-checkout.html">Checkout</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="btn-side-menu d-xxl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithSideMenu" aria-controls="offcanvasWithSideMenu">
                <i class="las la-bars"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="row d-none d-sm-block d-xl-none">
          <div class="col-12">
            <div class="header-search-box-style2 header-search-box-res">
              <form action="#">
                <div class="categories-dropdown">
                  <select class="select-dropdown">
                    <option selected="">All Categories</option>
                    <option value="lan1">First Aid Kit</option>
                    <option value="lan2">Health Monitors</option>
                    <option value="lan3">Medical Supplies</option>
                    <option value="lan1">Medicine</option>
                    <option value="lan2">Clothing</option>
                    <option value="lan3">Fitness</option>
                  </select>
                </div>
                <input type="search" placeholder="Search entire store here ...">
                <button type="submit" class="btn-src">
                  <i class="lab la-sistrix"></i>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--== End Header Wrapper ==-->