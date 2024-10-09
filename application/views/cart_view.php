<?php
$total_mrp = 0;
$total_discount = 0;
$total_cart_value = 0;
$delivery_charges = 100; 
$grand_total = 0;


foreach ($cart_contents as $item) {
    $total_mrp += $item['mrp'] * $item['qty']; 
    $total_cart_value += $item['price'] * $item['qty']; 
}

$total_discount = $total_mrp - $total_cart_value;

$grand_total = $total_cart_value + $delivery_charges;
?>

<main class="main-content">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 m-auto">
            <div class="page-title-content text-center">
              <h2 class="title">Cart</h2>
              <div class="bread-crumbs"><a href="<?= base_url('main');?>"><i class="las la-home"></i></a><span class="breadcrumb-sep"><i class="las la-angle-right"></i></span><span>Cart</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== Start Page Title Area ==-->

    <!--== Start Cart Area Wrapper ==-->
    <section class="product-area cart-page-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-center mb-40 mb-md-20">
              <h5 class="title">Shopping Cart</h5>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="cart-table-wrap">
              <div class="cart-table table-responsive" style="overflow-x: unset;">
                <table>
                  <thead>
                    <tr>
                      <th class="width-thumbnail"></th>
                      <th class="width-name">Product</th>
                      <th class="width-price"> Price</th>
                      <th class="width-quantity">Quantity</th>
                      <!-- <th class="width-subtotal">Subtotal</th> -->
                      <th class="width-remove">Remove</th>
                    </tr>
                  </thead>
                  <tbody>
        <?php if (!empty($cart_contents)): ?>
            <?php foreach ($cart_contents as $item): ?>
                <tr>
                    <td class="product-thumbnail">
                        <a href="shop-single-product.html">
                        <img class="w-100" src="<?= base_url($item['image']); ?>" alt="<?= $item['name']; ?>" width="80" height="80">
                        </a>
                    </td>
                    <td class="product-name">
                        <h5><a href="shop-single-product.html"><?= $item['name']; ?></a></h5>
                    </td>
                    <td class="product-price"><span class="amount">₹<?= number_format($item['price'], 2); ?></span></td>
                    <td class="cart-quality">
                      <div class="product-details-quality">
                          <input type="number" class="input-text qty text" step="1" min="1" max="100" name="quantity" value="<?= $item['qty']; ?>" title="Qty" placeholder="" onchange="updateQuantity('<?= $item['rowid']; ?>', this.value)">
                      </div>
                    </td>
                    <td class="product-remove">
                      <a href="javascript:void(0);" onclick="removeProduct('<?= $item['rowid']; ?>')"><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No products in the cart.</td>
            </tr>
        <?php endif; ?>
    </tbody>
              </table>
              </div>
            </div>
            <div class="cart-shiping-update-wrapper">
              <div class="cart-shiping-btn continure-btn">
                <a class="btn btn-link" href="<?= base_url('product'); ?>"><i class="las la-angle-left"></i> Back To Shop</a>
              </div>
              <!-- <div class="cart-shiping-btn update-btn">
                <a class="btn btn-link" href="shop.html">Back To Shop <i class="las la-angle-right"></i></a>
              </div> -->
            </div>
          </div>
          <div class="col-lg-4">
          <div class="grand-total-wrap" style="margin-left: 90px;">
          <div class="grand-total-content">
    <h3>Order Summary</h3>
    <div class="grand-shipping">
        <h3 style="border-bottom: none">Total MRP <span>₹<?php echo number_format($total_mrp, 2); ?></span></h3>
        <h3 style="border-bottom: none">Total SSLhealth Discount <span>₹<?php echo number_format($total_discount, 2); ?></span></h3>
        <h3 style="border-bottom: none">Total Cart Value <span>₹<?php echo number_format($total_cart_value, 2); ?></span></h3>
        <h3>Delivery Charges <span>₹<?php echo number_format($delivery_charges, 2); ?></span></h3>
    </div>
    <div class="grand-total">
        <h4>Total <span>₹<?php echo number_format($grand_total, 2); ?></span></h4>
    </div>
</div>
              <div class="grand-total-btn">
                <a class="btn btn-link" href="<?= base_url('checkout');?>">Proceed to checkout</a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section>
    <!--== End Cart Area Wrapper ==-->
  </main>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function updateQuantity(rowid, qty) {
    $.ajax({
        url: '<?= site_url('cart/update_quantity'); ?>', 
        type: 'POST',
        data: {
            rowid: rowid,
            quantity: qty
        },
        success: function(response) {
            location.reload(); 
            // $('#order-summary').html(response.order_summary); 
        },
        error: function() {
            alert('Error updating quantity');
        }
    });
}

function removeProduct(rowid) {
    $.ajax({
        url: '<?= site_url('cart/remove'); ?>',
        type: 'POST',
        data: {
            rowid: rowid
        },
        success: function(response) {
            location.reload(); 
        },
        error: function() {
            alert('Error removing product');
        }
    });
}
</script>
