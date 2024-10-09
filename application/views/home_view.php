<main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area slider-style3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="home-slider-content mb-30">
              <div class="swiper-container home-slider-style3-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <!-- Start Slide Item -->
                    <div class="home-slider-item">
                      <div class="thumb-one bg-img" data-bg-img="<?= base_url('assets/img/slider/s3-1.webp');?>"></div>
                      <div class="slider-content-area inner-content-style2">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-11">
                              <div class="content">
                                <div class="inner-content animate-style">
                                  <div class="wrap-one">
                                    <h5>8 Sec Results</h5>
                                  </div>
                                  <div class="wrap-two">
                                    <h2>Thermometer<br>High Accuracy</h2>
                                  </div>
                                  <div class="wrap-three">
                                    <p>For the sake of your health.</p>
                                  </div>
                                  <div class="wrap-four">
                                    <a href="<?= base_url('product');?>" class="btn-theme">Shop Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Slide Item -->
                  </div>
                  <div class="swiper-slide">
                    <!-- Start Slide Item -->
                    <div class="home-slider-item">
                      <div class="thumb-one bg-img" data-bg-img="<?= base_url('assets/img/slider/s3-2.webp');?>"></div>
                      <div class="slider-content-area inner-content-style2">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-11">
                              <div class="content">
                                <div class="inner-content animate-style">
                                  <div class="wrap-one">
                                    <h5>Disposable</h5>
                                  </div>
                                  <div class="wrap-two">
                                    <h2>Face Mask<br>Non-Woven Material</h2>
                                  </div>
                                  <div class="wrap-three">
                                    <p>Superior quality Non-Woven Textile Fabrics in Taiwan</p>
                                  </div>
                                  <div class="wrap-four">
                                    <a href="<?= base_url('product');?>" class="btn-theme">Shop Now</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Slide Item -->
                  </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
          <!-- <div class="col-md-12">
            <div class="category-items">
              <div class="row">
                <div class="col-md-4">
                  <div class="category-item mb-sm-20">
                    <div class="thumb animate-style-one">
                      <a href="<?= base_url('product');?>"><img src="assets/img/category/5.webp" alt="Image" width="440" height="254"></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="category-item mb-sm-20">
                    <div class="thumb animate-style-one">
                      <a href="<?= base_url('product');?>"><img src="assets/img/category/7.webp" alt="Image" width="440" height="254"></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="category-item mb-sm-20">
                    <div class="thumb animate-style-one">
                      <a href="<?= base_url('product');?>"><img src="assets/img/category/6.webp" alt="Image" width="440" height="254"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Featured Area Wrapper ==-->
    <section class="featured-area featured-default-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
              <h2 class="title">Featured Categories</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="featured-slider-content swiper-nav-style">
              <div class="swiper-container featured-slider2-container">
                <div class="swiper-wrapper">
                <?php foreach ($categories as $item): ?>
                  <div class="swiper-slide">
                    <div class="featured-item">
                      <div class="icon">
                        <a href="<?= base_url('product/' . $item->id); ?>">
                          <img src="<?= base_url($item->image); ?>" alt="<?= $item->name; ?>" width="88" height="80">
                        </a>
                      </div>
                      <div class="featured-info">
                        <h6 class="title">
                          <a href="<?= base_url('product/' . $item->id); ?>"><?= $item->name; ?></a>
                        </h6>
                      </div>
                      <input type="hidden" name="category_id" value="<?= $item->id; ?>">
                    </div>
                  </div>
                <?php endforeach; ?>
                                                  
                </div>
              </div>
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Featured Area Wrapper ==-->

    <!--== Start Product Tab Area Wrapper ==-->
    <section class="product-area product-style8-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="product-tab-content2">
              <!-- <div class="row">
                <div class="col-lg-12">
                  <div class="section-title mb-xs-40 mb-0">
                    <h2 class="title">Our Products</h2>
                  </div>
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="medicine-tab" data-bs-toggle="tab" data-bs-target="#medicine" type="button" role="tab" aria-controls="medicine" aria-selected="true">Medicine</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="medical-supplies-tab" data-bs-toggle="tab" data-bs-target="#medical-supplies" type="button" role="tab" aria-controls="medical-supplies" aria-selected="false">Shop</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link mr-0" id="healthcare-tab" data-bs-toggle="tab" data-bs-target="#healthcare" type="button" role="tab" aria-controls="healthcare" aria-selected="false">Medical Supplies</button>
                    </li>
                  </ul>
                </div>
              </div> -->

              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="medicine" role="tabpanel" aria-labelledby="medicine-tab">
                  
                </div>
                <div class="tab-pane fade" id="medical-supplies" role="tabpanel" aria-labelledby="medical-supplies-tab">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="product">
                        <div class="row product-items2">
                          <div class="col-lg-12">
                            <div class="product-slider-content">
                              <div class="swiper-container product-slider8-container">
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide">
                                    <!-- Start Product Item -->
                                    <div class="product-item">
                                      <div class="product-thumb">
                                        <a href="<?= base_url('products');?>">
                                          <img src="assets/img/shop/15.webp" alt="Image" width="220" height="220">
                                        </a>
                                        <div class="product-info-action">
                                          <button class="action-bag" type="button" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"> <i class="las la-shopping-cart"></i></button>
                                          <button class="action-wishlist" type="button" data-bs-toggle="modal" data-bs-target="#action-WishlistModal"><i class="las la-heart"></i></button>
                                          <button class="action-compare" type="button" data-bs-toggle="modal" data-bs-target="#action-CompareModal"><i class="las la-sync"></i></button>
                                          <button class="action-quick-view" type="button" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal"><i class="las la-eye"></i></button>
                                        </div>
                                      </div>
                                      <div class="product-info">
                                        <div class="prices">
                                          <span class="price price-theme">$80.00</span>
                                        </div>
                                        <h6 class="category"><a href="<?= base_url('products');?>">Canon</a></h6>
                                        <h6 class="title"><a href="<?= base_url('products');?>">Suspendisse potenti</a></h6>
                                        <div class="rating">
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Product Item -->
                                  </div>
                                  <div class="swiper-slide">
                                    <!-- Start Product Item -->
                                    <div class="product-item">
                                      <div class="product-thumb">
                                        <a href="<?= base_url('products');?>">
                                          <img src="assets/img/shop/4.webp" alt="Image" width="220" height="220">
                                        </a>
                                        <div class="ribbons">
                                          <span class="ribbon ribbon-discount">-85%</span>
                                        </div>
                                        <div class="product-info-action">
                                          <button class="action-bag" type="button" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"> <i class="las la-shopping-cart"></i></button>
                                          <button class="action-wishlist" type="button" data-bs-toggle="modal" data-bs-target="#action-WishlistModal"><i class="las la-heart"></i></button>
                                          <button class="action-compare" type="button" data-bs-toggle="modal" data-bs-target="#action-CompareModal"><i class="las la-sync"></i></button>
                                          <button class="action-quick-view" type="button" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal"><i class="las la-eye"></i></button>
                                        </div>
                                      </div>
                                      <div class="product-info">
                                        <div class="prices">
                                          <span class="price">$15.00</span>
                                          <span class="price price-old">$100.00</span>
                                        </div>
                                        <h6 class="category"><a href="<?= base_url('products');?>">Apple</a></h6>
                                        <h6 class="title"><a href="<?= base_url('products');?>">sodales bibendum</a></h6>
                                        <div class="rating">
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Product Item -->
                                  </div>
                                  <div class="swiper-slide">
                                    <!-- Start Product Item -->
                                    <div class="product-item">
                                      <div class="product-thumb">
                                        <a href="<?= base_url('products');?>">
                                          <img src="assets/img/shop/5.webp" alt="Image" width="220" height="220">
                                          <span class="bg-thumb" data-bg-img="assets/img/shop/2.webp"></span>
                                        </a>
                                        <div class="product-info-action">
                                          <button class="action-bag" type="button" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"> <i class="las la-shopping-cart"></i></button>
                                          <button class="action-wishlist" type="button" data-bs-toggle="modal" data-bs-target="#action-WishlistModal"><i class="las la-heart"></i></button>
                                          <button class="action-compare" type="button" data-bs-toggle="modal" data-bs-target="#action-CompareModal"><i class="las la-sync"></i></button>
                                          <button class="action-quick-view" type="button" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal"><i class="las la-eye"></i></button>
                                        </div>
                                      </div>
                                      <div class="product-info">
                                        <div class="prices">
                                          <span class="price price-theme">$122.00</span>
                                        </div>
                                        <h6 class="category"><a href="<?= base_url('products');?>">Apple</a></h6>
                                        <h6 class="title"><a href="<?= base_url('products');?>">aptent taciti</a></h6>
                                        <div class="rating">
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Product Item -->
                                  </div>
                                  <div class="swiper-slide">
                                    <!-- Start Product Item -->
                                    <div class="product-item">
                                      <div class="product-thumb">
                                        <a href="<?= base_url('products');?>">
                                          <img src="assets/img/shop/9.webp" alt="Image" width="220" height="220">
                                          <span class="bg-thumb" data-bg-img="assets/img/shop/12.webp"></span>
                                        </a>
                                        <div class="product-info-action">
                                          <button class="action-bag" type="button" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"> <i class="las la-shopping-cart"></i></button>
                                          <button class="action-wishlist" type="button" data-bs-toggle="modal" data-bs-target="#action-WishlistModal"><i class="las la-heart"></i></button>
                                          <button class="action-compare" type="button" data-bs-toggle="modal" data-bs-target="#action-CompareModal"><i class="las la-sync"></i></button>
                                          <button class="action-quick-view" type="button" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal"><i class="las la-eye"></i></button>
                                        </div>
                                      </div>
                                      <div class="product-info">
                                        <div class="prices">
                                          <span class="price price-theme">$122.00</span>
                                        </div>
                                        <h6 class="category"><a href="<?= base_url('products');?>">Apple</a></h6>
                                        <h6 class="title"><a href="<?= base_url('products');?>">Cras purus enim</a></h6>
                                        <div class="rating">
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Product Item -->
                                  </div>
                                  <div class="swiper-slide">
                                    <!-- Start Product Item -->
                                    <div class="product-item">
                                      <div class="product-thumb">
                                        <a href="<?= base_url('products');?>">
                                          <img src="assets/img/shop/11.webp" alt="Image" width="220" height="220">
                                          <span class="bg-thumb" data-bg-img="assets/img/shop/12.webp"></span>
                                        </a>
                                        <div class="ribbons">
                                          <span class="ribbon ribbon-new">new</span>
                                        </div>
                                        <div class="product-info-action">
                                          <button class="action-bag" type="button" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"> <i class="las la-shopping-cart"></i></button>
                                          <button class="action-wishlist" type="button" data-bs-toggle="modal" data-bs-target="#action-WishlistModal"><i class="las la-heart"></i></button>
                                          <button class="action-compare" type="button" data-bs-toggle="modal" data-bs-target="#action-CompareModal"><i class="las la-sync"></i></button>
                                          <button class="action-quick-view" type="button" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal"><i class="las la-eye"></i></button>
                                        </div>
                                      </div>
                                      <div class="product-info">
                                        <div class="prices">
                                          <span class="price price-theme">$122.00</span>
                                        </div>
                                        <h6 class="category"><a href="<?= base_url('products');?>">Apple</a></h6>
                                        <h6 class="title"><a href="<?= base_url('products');?>">Donec magna purus</a></h6>
                                        <div class="rating">
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Product Item -->
                                  </div>
                                  <div class="swiper-slide">
                                    <!-- Start Product Item -->
                                    <div class="product-item">
                                      <div class="product-thumb">
                                        <a href="<?= base_url('products');?>">
                                          <img src="assets/img/shop/1.webp" alt="Image" width="220" height="220">
                                          <span class="bg-thumb" data-bg-img="assets/img/shop/2.webp"></span>
                                        </a>
                                        <div class="ribbons">
                                          <span class="ribbon ribbon-discount">-99%</span>
                                          <span class="ribbon ribbon-new">new</span>
                                        </div>
                                        <div class="product-info-action">
                                          <button class="action-bag" type="button" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"> <i class="las la-shopping-cart"></i></button>
                                          <button class="action-wishlist" type="button" data-bs-toggle="modal" data-bs-target="#action-WishlistModal"><i class="las la-heart"></i></button>
                                          <button class="action-compare" type="button" data-bs-toggle="modal" data-bs-target="#action-CompareModal"><i class="las la-sync"></i></button>
                                          <button class="action-quick-view" type="button" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal"><i class="las la-eye"></i></button>
                                        </div>
                                      </div>
                                      <div class="product-info">
                                        <div class="prices">
                                          <span class="price">$12.00</span>
                                          <span class="price price-old">$2,000.00</span>
                                        </div>
                                        <h6 class="category"><a href="<?= base_url('products');?>">Apple</a></h6>
                                        <h6 class="title"><a href="<?= base_url('products');?>">Integer ullamcorper</a></h6>
                                        <div class="rating">
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Product Item -->
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
                <div class="tab-pane fade" id="healthcare" role="tabpanel" aria-labelledby="healthcare-tab">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="product">
                        <div class="row product-items2">
                          <div class="col-lg-12">
                            <div class="product-slider-content">
                              <div class="swiper-container product-slider8-container">
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide">
                                    <!-- Start Product Item -->
                                    <div class="product-item">
                                      <div class="product-thumb">
                                        <a href="<?= base_url('products');?>">
                                          <img src="assets/img/shop/4.webp" alt="Image" width="220" height="220">
                                        </a>
                                        <div class="ribbons">
                                          <span class="ribbon ribbon-discount">-85%</span>
                                        </div>
                                        <div class="product-info-action">
                                          <button class="action-bag" type="button" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"> <i class="las la-shopping-cart"></i></button>
                                          <button class="action-wishlist" type="button" data-bs-toggle="modal" data-bs-target="#action-WishlistModal"><i class="las la-heart"></i></button>
                                          <button class="action-compare" type="button" data-bs-toggle="modal" data-bs-target="#action-CompareModal"><i class="las la-sync"></i></button>
                                          <button class="action-quick-view" type="button" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal"><i class="las la-eye"></i></button>
                                        </div>
                                      </div>
                                      <div class="product-info">
                                        <div class="prices">
                                          <span class="price">$15.00</span>
                                          <span class="price price-old">$100.00</span>
                                        </div>
                                        <h6 class="category"><a href="<?= base_url('products');?>">Apple</a></h6>
                                        <h6 class="title"><a href="<?= base_url('products');?>">sodales bibendum</a></h6>
                                        <div class="rating">
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Product Item -->
                                  </div>
                                  <div class="swiper-slide">
                                    <!-- Start Product Item -->
                                    <div class="product-item">
                                      <div class="product-thumb">
                                        <a href="<?= base_url('products');?>">
                                          <img src="assets/img/shop/5.webp" alt="Image" width="220" height="220">
                                          <span class="bg-thumb" data-bg-img="assets/img/shop/2.webp"></span>
                                        </a>
                                        <div class="product-info-action">
                                          <button class="action-bag" type="button" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"> <i class="las la-shopping-cart"></i></button>
                                          <button class="action-wishlist" type="button" data-bs-toggle="modal" data-bs-target="#action-WishlistModal"><i class="las la-heart"></i></button>
                                          <button class="action-compare" type="button" data-bs-toggle="modal" data-bs-target="#action-CompareModal"><i class="las la-sync"></i></button>
                                          <button class="action-quick-view" type="button" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal"><i class="las la-eye"></i></button>
                                        </div>
                                      </div>
                                      <div class="product-info">
                                        <div class="prices">
                                          <span class="price price-theme">$122.00</span>
                                        </div>
                                        <h6 class="category"><a href="<?= base_url('products');?>">Apple</a></h6>
                                        <h6 class="title"><a href="<?= base_url('products');?>">aptent taciti</a></h6>
                                        <div class="rating">
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Product Item -->
                                  </div>
                                  <div class="swiper-slide">
                                    <!-- Start Product Item -->
                                    <div class="product-item">
                                      <div class="product-thumb">
                                        <a href="<?= base_url('products');?>">
                                          <img src="assets/img/shop/9.webp" alt="Image" width="220" height="220">
                                          <span class="bg-thumb" data-bg-img="assets/img/shop/12.webp"></span>
                                        </a>
                                        <div class="product-info-action">
                                          <button class="action-bag" type="button" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"> <i class="las la-shopping-cart"></i></button>
                                          <button class="action-wishlist" type="button" data-bs-toggle="modal" data-bs-target="#action-WishlistModal"><i class="las la-heart"></i></button>
                                          <button class="action-compare" type="button" data-bs-toggle="modal" data-bs-target="#action-CompareModal"><i class="las la-sync"></i></button>
                                          <button class="action-quick-view" type="button" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal"><i class="las la-eye"></i></button>
                                        </div>
                                      </div>
                                      <div class="product-info">
                                        <div class="prices">
                                          <span class="price price-theme">$122.00</span>
                                        </div>
                                        <h6 class="category"><a href="<?= base_url('products');?>">Apple</a></h6>
                                        <h6 class="title"><a href="<?= base_url('products');?>">Cras purus enim</a></h6>
                                        <div class="rating">
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Product Item -->
                                  </div>
                                  <div class="swiper-slide">
                                    <!-- Start Product Item -->
                                    <div class="product-item">
                                      <div class="product-thumb">
                                        <a href="<?= base_url('products');?>">
                                          <img src="assets/img/shop/1.webp" alt="Image" width="220" height="220">
                                          <span class="bg-thumb" data-bg-img="assets/img/shop/2.webp"></span>
                                        </a>
                                        <div class="ribbons">
                                          <span class="ribbon ribbon-discount">-99%</span>
                                          <span class="ribbon ribbon-new">new</span>
                                        </div>
                                        <div class="product-info-action">
                                          <button class="action-bag" type="button" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"> <i class="las la-shopping-cart"></i></button>
                                          <button class="action-wishlist" type="button" data-bs-toggle="modal" data-bs-target="#action-WishlistModal"><i class="las la-heart"></i></button>
                                          <button class="action-compare" type="button" data-bs-toggle="modal" data-bs-target="#action-CompareModal"><i class="las la-sync"></i></button>
                                          <button class="action-quick-view" type="button" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal"><i class="las la-eye"></i></button>
                                        </div>
                                      </div>
                                      <div class="product-info">
                                        <div class="prices">
                                          <span class="price">$12.00</span>
                                          <span class="price price-old">$2,000.00</span>
                                        </div>
                                        <h6 class="category"><a href="<?= base_url('products');?>">Apple</a></h6>
                                        <h6 class="title"><a href="<?= base_url('products');?>">Integer ullamcorper</a></h6>
                                        <div class="rating">
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Product Item -->
                                  </div>
                                  <div class="swiper-slide">
                                    <!-- Start Product Item -->
                                    <div class="product-item">
                                      <div class="product-thumb">
                                        <a href="<?= base_url('products');?>">
                                          <img src="assets/img/shop/15.webp" alt="Image" width="220" height="220">
                                        </a>
                                        <div class="product-info-action">
                                          <button class="action-bag" type="button" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"> <i class="las la-shopping-cart"></i></button>
                                          <button class="action-wishlist" type="button" data-bs-toggle="modal" data-bs-target="#action-WishlistModal"><i class="las la-heart"></i></button>
                                          <button class="action-compare" type="button" data-bs-toggle="modal" data-bs-target="#action-CompareModal"><i class="las la-sync"></i></button>
                                          <button class="action-quick-view" type="button" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal"><i class="las la-eye"></i></button>
                                        </div>
                                      </div>
                                      <div class="product-info">
                                        <div class="prices">
                                          <span class="price price-theme">$80.00</span>
                                        </div>
                                        <h6 class="category"><a href="<?= base_url('products');?>">Canon</a></h6>
                                        <h6 class="title"><a href="<?= base_url('products');?>">Suspendisse potenti</a></h6>
                                        <div class="rating">
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Product Item -->
                                  </div>
                                  <div class="swiper-slide">
                                    <!-- Start Product Item -->
                                    <div class="product-item">
                                      <div class="product-thumb">
                                        <a href="<?= base_url('products');?>">
                                          <img src="assets/img/shop/11.webp" alt="Image" width="220" height="220">
                                          <span class="bg-thumb" data-bg-img="assets/img/shop/12.webp"></span>
                                        </a>
                                        <div class="ribbons">
                                          <span class="ribbon ribbon-new">new</span>
                                        </div>
                                        <div class="product-info-action">
                                          <button class="action-bag" type="button" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"> <i class="las la-shopping-cart"></i></button>
                                          <button class="action-wishlist" type="button" data-bs-toggle="modal" data-bs-target="#action-WishlistModal"><i class="las la-heart"></i></button>
                                          <button class="action-compare" type="button" data-bs-toggle="modal" data-bs-target="#action-CompareModal"><i class="las la-sync"></i></button>
                                          <button class="action-quick-view" type="button" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal"><i class="las la-eye"></i></button>
                                        </div>
                                      </div>
                                      <div class="product-info">
                                        <div class="prices">
                                          <span class="price price-theme">$122.00</span>
                                        </div>
                                        <h6 class="category"><a href="<?= base_url('products');?>">Apple</a></h6>
                                        <h6 class="title"><a href="<?= base_url('products');?>">Donec magna purus</a></h6>
                                        <div class="rating">
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                          <span class="rating-color las la-star"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Product Item -->
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Tab Area Wrapper ==-->

    <!--== Start Divider Area Wrapper ==-->
    <!-- <div class="divider-area divider-default-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="divider-content animate-style-one bg-img" data-bg-img="assets/img/divider/1.webp">
              <div class="inner-content">
                <h3>Save upto 10% extra & enjoy FREE delivery with PLUS membership</h3>
                <a href="<?= base_url('product');?>" class="btn-link">Know More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!--== End Divider Area Wrapper ==-->

    <!--== Start Product Tab Area Wrapper ==-->
   
    <!--== End Product Tab Area Wrapper ==-->

    <!--== Start Product Tab Area Wrapper ==-->
    <section class="product-area product-style2-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
              <h2 class="title">New Arrivals</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6 mb-md-30">
            <!-- Start Product Item -->
            <div class="product-hot-item">
              <div class="product-thumb animate-style-one">
                <a href="<?= base_url('product');?>">
                  <img src="assets/img/shop/h1.webp" alt="Image" width="388" height="279">
                </a>
              </div>
              <div class="product-info">
                <h6 class="title"><a href="<?= base_url('product');?>">Pharmacy Medicines</a></h6>
                <div class="prices">
                  <span class="price">Flat 15% Off</span>
                </div>
                <a href="<?= base_url('product');?>" class="btn-theme">Order Now</a>
              </div>
            </div>
            <!-- End Product Item -->
          </div>
          <div class="col-lg-4 col-sm-6 mb-md-30">
            <!-- Start Product Item -->
            <div class="product-hot-item">
              <div class="product-thumb animate-style-one">
                <a href="<?= base_url('product');?>">
                  <img src="assets/img/shop/h2.webp" alt="Image">
                </a>
              </div>
              <div class="product-info">
                <h6 class="title"><a href="<?= base_url('product');?>">Healthcare Products</a></h6>
                <div class="prices">
                  <span class="price">Flat 15% Off</span>
                </div>
                <a href="<?= base_url('product');?>" class="btn-theme">Order Now</a>
              </div>
            </div>
            <!-- End Product Item -->
          </div>
          <div class="col-lg-4 col-sm-6 mb-sm-30">
            <!-- Start Product Item -->
            <div class="product-hot-item">
              <div class="product-thumb animate-style-one">
                <a href="<?= base_url('product');?>">
                  <img src="assets/img/shop/h3.webp" alt="Image" width="388" height="279">
                </a>
              </div>
              <div class="product-info">
                <h6 class="title"><a href="<?= base_url('product');?>">Covid-19 Essentials</a></h6>
                <div class="prices">
                  <span class="price">Flat 15% Off</span>
                </div>
                <a href="<?= base_url('product');?>" class="btn-theme">Order Now</a>
              </div>
            </div>
            <!-- End Product Item -->
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Tab Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    
    <section class="product-area product-style4-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
              <h2 class="title">Anti cancer</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-md-90 mb-xs-30">
            <div class="category-item pb-md-30">
              <div class="thumb animate-style-one">
                <a href="<?= base_url('product');?>"><img src="assets/img/category/8.webp" alt="Image" width="440" height="336"></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 product-items2">
            <div class="product-slider-content swiper-nav-style">
              <div class="swiper-container product-slider4-container">
                <div class="swiper-wrapper">
                <?php foreach ($anticancer as $item): ?>
          <div class="swiper-slide">
            <!-- Start Product Item -->
            <div class="product-item">
              <div class="product-thumb">
              <a href="<?= base_url('products/' . $item->id); ?>">
              <img src="<?= base_url($item->image); ?>" alt="<?= $item->name; ?>" width="196" height="196">
                </a>
                <div class="product-info-action">
                    <button class="action-bag" type="button" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"> <i class="las la-shopping-cart"></i></button>
                    <button class="action-quick-view" type="button" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal"><i class="las la-eye"></i></button>
                  </div>
              </div>
              <div class="product-info">
                        <h6 class="title"><a href="<?= base_url('products/' . $item->id); ?>"><?= $item->name; ?></a></h6>
                        <div class="prices">
                            <span class="price">₹<?= $item->price; ?></span>
                            <span class="price-old">₹<?= $item->mrp; ?></span>
                        </div>
                </div>
              <input type="hidden" name="product_id" value="<?= $item->id; ?>">
                <input type="hidden" name="category_id" value="<?= $item->categories_id; ?>">
            </div>
  <!-- End Product Item -->
          </div>
          <?php endforeach; ?>

                   </div>
              </div>
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area product-style10-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
              <h2 class="title">Covid</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-md-90 mb-xs-30">
            <div class="category-item pb-md-30">
              <div class="thumb animate-style-one">
                <a href="<?= base_url('product');?>"><img src="assets/img/category/9.webp" alt="Image" width="440" height="336"></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 product-items2">
            <div class="product-slider-content2 swiper-nav-style">
              <div class="swiper-container product-slider5-container">
                <div class="swiper-wrapper">
                <?php foreach ($covid as $item): ?>
                <div class="swiper-slide">
                  <!-- Start Product Item -->
                  <div class="product-item">
                    <div class="product-thumb">
                      <a href="<?= base_url('products/' . $item->id); ?>">
                        <img src="<?= base_url($item->image); ?>" alt="<?= $item->name; ?>" width="196" height="196">
                      </a>
                      <div class="product-info-action">
                          <button class="action-bag" type="button" data-bs-toggle="modal" data-bs-target="#action-CartAddModal"> <i class="las la-shopping-cart"></i></button>
                          <button class="action-quick-view" type="button" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal"><i class="las la-eye"></i></button>
                        </div>
                    </div>
                    <div class="product-info">
                              <h6 class="title"><a href="<?= base_url('product/' . $item->id); ?>"><?= $item->name; ?></a></h6>
                              <div class="prices">
                                  <span class="price">₹<?= $item->price; ?></span>
                                  <span class="price-old">₹<?= $item->mrp; ?></span>
                              </div>
                      </div>
                    <input type="hidden" name="product_id" value="<?= $item->id; ?>">
                      <input type="hidden" name="category_id" value="<?= $item->categories_id; ?>">
                  </div>
                  <!-- End Product Item -->
                </div>
                <?php endforeach; ?>
                
                 
                </div>
              </div>
              <!-- Add Arrows -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Product Area Wrapper ==-->

    <!--== Start Brand Logo Area ==-->
    <div class="testimonial-area testimonial-style1-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-title">
              <h2 class="title">What Our Customers Say</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="testimonial-slider-content swiper-nav-style">
              <div class="swiper-container testimonial-slider-container swiper-initialized swiper-horizontal swiper-pointer-events">
                <div class="swiper-wrapper" id="swiper-wrapper-24bbec510b695e726" aria-live="polite" style="transform: translate3d(-1519px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 4" style="width: 349.75px; margin-right: 30px;">
                    <div class="testimonial-item">
                      <div class="client-thumb">
                        <img src="assets/img/testimonial/1.webp" alt="Image" width="100" height="100">
                        <div class="client-info">
                          <h4 class="name">Sandy Wilcke</h4>
                        </div>
                      </div>
                      <div class="client-content">
                        <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support  , sorry for English, are advice theme installation package Italian but I had no problem !! Thank you !</p>
                      </div>
                    </div>
                  </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="2 / 4" style="width: 349.75px; margin-right: 30px;">
                    <div class="testimonial-item">
                      <div class="client-thumb">
                        <img src="assets/img/testimonial/2.webp" alt="Image" width="100" height="100">
                        <div class="client-info">
                          <h4 class="name">Sandy Wilcke</h4>
                        </div>
                      </div>
                      <div class="client-content">
                        <p>Perfect Themes and the best of all that you have many options to choose! Best Support team advice theme installation package ever!Very fast responding and experts on their</p>
                      </div>
                    </div>
                  </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 4" style="width: 349.75px; margin-right: 30px;">
                    <div class="testimonial-item">
                      <div class="client-thumb">
                        <img src="assets/img/testimonial/3.webp" alt="Image" width="100" height="100">
                        <div class="client-info">
                          <h4 class="name">Sandy Wilcke</h4>
                        </div>
                      </div>
                      <div class="client-content">
                        <p>All Perfect !! I have three sites with magento , this advice theme installation package theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian </p>
                      </div>
                    </div>
                  </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="3" role="group" aria-label="4 / 4" style="width: 349.75px; margin-right: 30px;">
                    <div class="testimonial-item">
                      <div class="client-thumb">
                        <img src="assets/img/testimonial/1.webp" alt="Image" width="100" height="100">
                        <div class="client-info">
                          <h4 class="name">Sandy Wilcke</h4>
                        </div>
                      </div>
                      <div class="client-content">
                        <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support  , sorry for English, are advice theme installation package Italian but I had no problem !! Thank you !</p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 4" style="width: 349.75px; margin-right: 30px;">
                    <div class="testimonial-item">
                      <div class="client-thumb">
                        <img src="assets/img/testimonial/1.webp" alt="Image" width="100" height="100">
                        <div class="client-info">
                          <h4 class="name">Sandy Wilcke</h4>
                        </div>
                      </div>
                      <div class="client-content">
                        <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support  , sorry for English, are advice theme installation package Italian but I had no problem !! Thank you !</p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="2 / 4" style="width: 349.75px; margin-right: 30px;">
                    <div class="testimonial-item">
                      <div class="client-thumb">
                        <img src="assets/img/testimonial/2.webp" alt="Image" width="100" height="100">
                        <div class="client-info">
                          <h4 class="name">Sandy Wilcke</h4>
                        </div>
                      </div>
                      <div class="client-content">
                        <p>Perfect Themes and the best of all that you have many options to choose! Best Support team advice theme installation package ever!Very fast responding and experts on their</p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 4" style="width: 349.75px; margin-right: 30px;">
                    <div class="testimonial-item">
                      <div class="client-thumb">
                        <img src="assets/img/testimonial/3.webp" alt="Image" width="100" height="100">
                        <div class="client-info">
                          <h4 class="name">Sandy Wilcke</h4>
                        </div>
                      </div>
                      <div class="client-content">
                        <p>All Perfect !! I have three sites with magento , this advice theme installation package theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian </p>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="3" role="group" aria-label="4 / 4" style="width: 349.75px; margin-right: 30px;">
                    <div class="testimonial-item">
                      <div class="client-thumb">
                        <img src="assets/img/testimonial/1.webp" alt="Image" width="100" height="100">
                        <div class="client-info">
                          <h4 class="name">Sandy Wilcke</h4>
                        </div>
                      </div>
                      <div class="client-content">
                        <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support  , sorry for English, are advice theme installation package Italian but I had no problem !! Thank you !</p>
                      </div>
                    </div>
                  </div>
                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group" aria-label="1 / 4" style="width: 349.75px; margin-right: 30px;">
                    <div class="testimonial-item">
                      <div class="client-thumb">
                        <img src="assets/img/testimonial/1.webp" alt="Image" width="100" height="100">
                        <div class="client-info">
                          <h4 class="name">Sandy Wilcke</h4>
                        </div>
                      </div>
                      <div class="client-content">
                        <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support  , sorry for English, are advice theme installation package Italian but I had no problem !! Thank you !</p>
                      </div>
                    </div>
                  </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group" aria-label="2 / 4" style="width: 349.75px; margin-right: 30px;">
                    <div class="testimonial-item">
                      <div class="client-thumb">
                        <img src="assets/img/testimonial/2.webp" alt="Image" width="100" height="100">
                        <div class="client-info">
                          <h4 class="name">Sandy Wilcke</h4>
                        </div>
                      </div>
                      <div class="client-content">
                        <p>Perfect Themes and the best of all that you have many options to choose! Best Support team advice theme installation package ever!Very fast responding and experts on their</p>
                      </div>
                    </div>
                  </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 4" style="width: 349.75px; margin-right: 30px;">
                    <div class="testimonial-item">
                      <div class="client-thumb">
                        <img src="assets/img/testimonial/3.webp" alt="Image" width="100" height="100">
                        <div class="client-info">
                          <h4 class="name">Sandy Wilcke</h4>
                        </div>
                      </div>
                      <div class="client-content">
                        <p>All Perfect !! I have three sites with magento , this advice theme installation package theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian </p>
                      </div>
                    </div>
                  </div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 4" style="width: 349.75px; margin-right: 30px;">
                    <div class="testimonial-item">
                      <div class="client-thumb">
                        <img src="assets/img/testimonial/1.webp" alt="Image" width="100" height="100">
                        <div class="client-info">
                          <h4 class="name">Sandy Wilcke</h4>
                        </div>
                      </div>
                      <div class="client-content">
                        <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support  , sorry for English, are advice theme installation package Italian but I had no problem !! Thank you !</p>
                      </div>
                    </div>
                  </div></div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
              <!-- Add Arrows -->
              <div class="swiper-button-next" tabindex="0" role="button" aria-label="undefined" aria-controls="Next slide"></div>
              <div class="swiper-button-prev" tabindex="0" role="button" aria-label="undefined" aria-controls="Previous slide"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Brand Logo Area ==-->
  </main>
  