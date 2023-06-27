<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php') ?>

<body style="overflow-X:hidden;">
<?php include('header.php') ?>


<section class="bg-category">
    <div class="row">
        <div class="col-sm-6">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active "><a href="#">Home</a></li>
    <li class="breadcrumb-item active"><a href="#">Category</a></li>
    <li class="breadcrumb-item  " aria-current="">Medicine</li>
  </ol>
</nav>
        </div>
        <div class="col-sm-6">

</div>
    </div>

</section>

<section>
    <div class="container-fluid filter-tabs" >
        <div class="row" style="padding-top:50px;">
            <div class="col-sm-6" style="padding-top:30px !important;"  >
                <p>Showing all results</p>

            </div>
            <div class="col-sm-6 right">
            <div class="wrapper">
      <header>
      <button class="btn my-btn-filter" onclick="myFunction()">Show Filters</button>
     <select class="select btn my-btn-filter" name="" id="">
        <option value="">Default Sorting</option>
        <option value="">Popularity</option>
        <option value="">Price: Low To Hight</option>
        <option value="">Price: High To Low</option>
     </select>
      </header>
      <div class="mydiv"  id="myDIV">
      <div class="price-input">
        <div class="field">
          <span>Min</span>
          <input type="number" class="input-min" value="2500">
        </div>
        <div class="separator">-</div>
        <div class="field">
          <span>Max</span>
          <input type="number" class="input-max" value="7500">
        </div>
      </div>
      <div class="slider">
        <div class="progress"></div>
      </div>
      <div class="range-input">
        <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
        <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
      </div>
      </div>
    </div>
    <script src="script.js"></script>
            </div>
            
</div>
            
    </div>


    <div class="row grid-view" >
    <?php for($i=0; $i<30; $i++): ?>
        <div class="col-sm-3 padd">
      <div class="card product" >
  <img src="<?php echo base_url('assets/images/Rectangle 67.png') ?>" class="card-img-top" alt="...">
  <div class="card-body medicine-cate">
    <h5 class="card-title">Product Name</h5>
   <p class="card-text">Price</p>
    <a href="#" class="btn btn-outline-info med-btn">Add To Cart</a>
  </div>
</div>
        </div>
        <?php endfor; ?>
    </div>
   
</section>






<?php include('footer.php') ?>

</body>
</html>

