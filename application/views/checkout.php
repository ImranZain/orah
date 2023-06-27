<!DOCTYPE html>
<html lang="en">
<head>
   
<?php include('head.php') ?>

<body style="overflow-X:hidden;">
<?php include('header.php') ?>


<section>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb product-bread">
    <li class="breadcrumb-item active"><a href="#">Home</a></li>
    <li class="breadcrumb-item active"><a href="#">Shop</a></li>
    <li class="breadcrumb-item active"><a href="#">Cart</a></li>
    
    <li class="breadcrumb-item ">Checkout</li>
  </ol>
</nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <form action="" class="border" style="padding:10px;">
            <label for="" style="margin-bottom:20px;"><i class="fa-regular fa-calendar"></i> &nbsp;Do you have a coupon code? please apply it below.</label>
        <div class="input-group mb-3">
        
  <input type="text" class="form-control" placeholder= "Coupon Code" aria-label="Recipient's username" aria-describedby="button-addon2" required>
  <button class="btn my-btn" type="button" id="button-addon2">Apply Coupon</button>

</div> 
</form> 
        </div>
    </div>
</div>
</section>

<section>
    <div class="conainer-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1>Billing Details</h1>
            </div>
        </div>
    </div>
</section>




<?php include('footer.php') ?>
</body>
</html>