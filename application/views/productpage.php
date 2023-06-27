<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php') ?>

<body style="overflow-X:hidden;">
<?php include('header.php') ?>

<section>
<div class="container-fluid ">
    <div class="row">
        <div class="col-sm-12">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb product-bread">
    <li class="breadcrumb-item active"><a href="#">Home</a></li>
    <li class="breadcrumb-item active"><a href="#">Product</a></li>
    <li class="breadcrumb-item active"><a href="#">Medicine</a></li>
    <li class="breadcrumb-item active"><a href="#">Featured Mediince</a></li>
    <li class="breadcrumb-item ">NUBEROL TAB FORTE 5×3</li>
  </ol>
</nav>
        </div>
    </div>
</div>
</section>


<section class="product-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
               <a href="<?php echo base_url('assets/images/Rectangle 67.png') ?>"><img src="<?php echo base_url('assets/images/Rectangle 67.png')?>" alt=""></a> 
            </div>
            <div class="col-sm-6">
                <h1 class="product-title">Augmenton BD
</h1>
<p class="product-price">
₨39
</p>
<p class="product-description">
It is a skeletal muscle relaxant. It acts in the central nervous system to produce muscle relaxant effects. Paracetamol is used?to treat or prevent pain and reduce fever. Used to treat tension headache and headaches caused by spasm of the muscles in the back of your head and neck.


</p>

<p>
    
<button class="down btn" style="background-color:#18A99E  ; color:white ;"  onClick='decreaseCount(event, this)'>-</button>
      <input type="number" style="border:1px solid #18A99E; padding:8px;" value="1">
     <button class="up btn btn-info" style="background-color:#18A99E  ; color:white ;"  onClick='increaseCount(event, this)'>+</button>
   
          
<button class="btn product-btn">Add  To Cart</button>
</p>

<table class="table">
<tbody>
    <tr>
        <th>SKU:</th>
        <td>PID3231</td>
    </tr>
    <tr>
        <th>Categories:</th>
        <td> Featured Medicines, Medicine</td>
    </tr>
    <tr>
        <th>Availability:</th>
        <td> 13
In Stock</td>
    </tr>

    <tr>
        <th>Formula Name:</th>
        <td>ORPHENADRINE CITRATE, PARACETAMOL</td>
    </tr>

    <tr>
        <th>Formula Form:</th>
        <td>TAB</td>
    </tr>
    
    <tr>
        <th>Formula Strength:</th>
        <td>50/650MG</td>
    </tr>
</tbody>
</table>
            </div>
        </div>
        <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Description</button>
  </li>
 

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><p>It is a skeletal muscle relaxant. It acts in the central nervous system to produce muscle relaxant effects. Paracetamol is used?to treat or prevent pain and reduce fever. Used to treat tension headache and headaches caused by spasm of the muscles in the back of your head and neck.

</p></div>
 
 
</div>  
            </div>
        </div>
    </div>  
    </div>
    
  
</section>

<div class="container-fluid">
        <div class="row">
            <h3 style="margin-top:50px;">Realted Products</h3>
        <?php for($i=0; $i<4; $i++): ?>
            <div class="col-sm-3">
                
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
    </div>








<?php include('footer.php') ?>
</body>
</html>