<main class="main-content">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 m-auto">
            <div class="page-title-content text-center">
              <h2 class="title">Single Product</h2>
              <div class="bread-crumbs"><a href="<?=base_url('main');?>"><i class="las la-home"></i></a><span class="breadcrumb-sep"><i class="las la-angle-right"></i></span><span>Single Product</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== Start Page Title Area ==-->

    <!--== Start Shop Area ==-->
    <section class="product-area shop-single-product">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="single-product-slider">
              <div class="single-product-thumb">
                <div class="swiper-container single-product-thumb-slider">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide zoom zoom-hover">
                      <div class="thumb-item">
                        <a class="lightbox-image" data-fancybox="gallery" href="assets/img/shop/details/1.webp">
                        <img src="<?= base_url($products->image ?? 'default.jpg'); ?>" alt="<?= $products->name ?? 'Product Image'; ?>" width="800" height="800">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             </div>
          </div>
          <div class="col-md-6">
            <div class="single-product-info" style="margin-top: 30%;
             margin-left: 10%;">
            <h4 class="title"><?= isset($products->name) ? $products->name : 'Product Name'; ?></h4>
            <div class="comments-advices">
                <div class="rating">
                  <span class="rating-color las la-star"></span>
                  <span class="rating-color las la-star"></span>
                  <span class="rating-color las la-star"></span>
                  <span class="rating-color las la-star"></span>
                  <span class="rating-color las la-star"></span>
                </div>
                <!-- <a class="btn-comments" href="shop-single-product.html">1 reviews</a>
                <a class="btn-review ml-0" href="shop-single-product.html">Write a review</a> -->
              </div>
              <?php
                $price = $products->price ?? 0;
                $mrp = $products->mrp ?? 0;

                // Calculate savings and percentage
                $savings = $mrp - $price;
                $percentage = ($mrp > 0) ? round(($savings / $mrp) * 100) : 0;
                ?>

                <div class="prices">
                    <!-- Dynamic Price and MRP -->
                    <span class="price">₹<?= $price; ?></span>
                    <span class="price-old">₹<?= $mrp; ?></span>
                </div>
                <ul>
                    <li>Availability: <span>In Stock</span></li>
                    <li>Origin of Medicine: <span>India</span></li>
                    <li>You Save: <span>₹<?= $savings; ?> (<?= $percentage; ?>%)</span></li>
                </ul>

              
               
              <div class="quick-product-action mt-0">
                <!-- <span class="title">Qty</span> -->
                <div class="action-top">
                <div class="pro-qty">
                <a class="btn btn-theme btn-buy-now" href="javascript:void(0);" style="background-color: #28a745; color: #fff;" id="buyNowBtn">Buy Now</a>
                </div>
                 </div>
                 <button class="btn btn-theme">
                    <i class="fas fa-plus"></i> Add to Cart
                </button>
              </div>
              <!-- <a class="btn-link" href="shop-wishlist.html"><i class="la la-heart-o"></i>Wish List</a>
              <a class="btn-link" href="shop-compare.html"><i class="las la-sync"></i>Compare</a> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Shop Area ==-->

    <!--== Start Shop Tab Area ==-->
    <section class="product-area product-description-review-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="product-description-review">
              <ul class="nav nav-tabs product-description-tab-menu" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="product-desc-tab" data-bs-toggle="tab" data-bs-target="#productDesc" type="button" role="tab" aria-controls="productDesc" aria-selected="true">Description</button>
                </li>
                <!-- <li class="nav-item" role="presentation">
                  <button class="nav-link" id="product-review-tab" data-bs-toggle="tab" data-bs-target="#productReview" type="button" role="tab" aria-controls="productReview" aria-selected="false">Reviews (1)</button>
                </li> -->
              </ul>
              <div class="tab-content product-description-tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="productDesc" role="tabpanel" aria-labelledby="product-desc-tab">
                  <div class="product-desc">
                        <p><?= isset($products->description) ? $products->description : 'Description not available.'; ?></p>
                    
                    <!-- <h6>Video in your pocket.</h6>
                    <p>Its the small iPod with one very big idea: video. The worlds most popular music player now lets you enjoy movies, TV shows, and more on a two-inch display thats 65% brighter than before.</p>
                    <h6>Cover Flow.</h6>
                    <p>Browse through your music collection by flipping through album art. Select an album to turn it over and see the track list. </p>
                    <h6>Enhanced interface.</h6>
                    <p>Experience a whole new way to browse and view your music and video.</p>
                    <h6>Sleek and colorful.</h6>
                    <p>With an anodized aluminum and polished stainless steel enclosure and a choice of five colors, iPod nano is dressed to impress.</p>
                    <h6>iTunes.</h6>
                    <p>Available as a free download, iTunes makes it easy to browse and buy millions of songs, movies, TV shows, audiobooks, and games and download free podcasts all at the iTunes Store. And you can import your own music, manage your whole media library, and sync your iPod or iPhone with ease.</p> -->
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Shop Tab Area ==-->

    <!--== Start Shop Tab Area ==-->
  
    <!--== End Shop Tab Area ==-->
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
  $(document).ready(function() {
    $("#buyNowBtn").click(function(e) {
      var id = "<?= isset($products->id) ? $products->id : 0 ?>"; 
      $.ajax({
        url: "<?= base_url('cart/save_cart');?>", 
        type: 'POST',
        data: { id: id },
        success: function(response) {
          var jsonResponse = JSON.parse(response);
					if(jsonResponse.success === true) {
            window.location.href = "<?= base_url('cart'); ?>"; 
            } else {
              console.log("Error: " + response.message);
          }   
           
        },
        
      });
    });
  });
</script>
