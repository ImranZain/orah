<!DOCTYPE html>
<html lang="en">
<head>
   
<?php include('head.php') ?>



<body>
<?php include('header.php') ?>
    
<section class="bg-category">
    <div class="row">
        <div class="col-sm-6">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active "><a href="#">Home</a></li>
    <li class="breadcrumb-item active "><a href="#">Shop</a></li>
    <li class="breadcrumb-item ">Cart</li>
    
  </ol>
</nav>
        </div>
        <div class="col-sm-6">

</div>
    </div>

</section>

<section class="container " >
    <div class="row">    
    <table class="cart-table table  ">
        <thead>
            <tr>
                <th >Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>    
            </tr>
        </thead>
        <tbody>
        <tr>
                <td class="flex"> <a style="color:black;" href=""><i class="fa-solid fa-circle-xmark"></i></a> <img src="<?php echo base_url('assets/images/Rectangle 67.png')?>" alt=""> Product Name</td>
          <td class="padding">
          ₨38
          </td>
          <td>
       


      <button class="down btn" style="background-color:#18A99E  ; color:white ;"  onClick='decreaseCount(event, this)'>-</button>
      <input type="number" style="border:1px solid #18A99E; padding:8px;" value="1">
     <button class="up btn btn-info" style="background-color:#18A99E  ; color:white ;"  onClick='increaseCount(event, this)'>+</button>
   
          






    
          </td>
          <td class="padding">
          ₨38
          </td>
           
           
            </tr>
            <tr>
                <td class="flex"> <a style="color:black;" href=""><i class="fa-solid fa-circle-xmark"></i></a> <img src="<?php echo base_url('assets/images/Rectangle 67.png')?>" alt=""> Product Name</td>
          <td class="padding">
          ₨38
          </td>
          <td>
       


      <button class="down btn btn-info" style="background-color:#18A99E  ; color:white ;"  onClick='decreaseCount(event, this)'>-</button>
      <input type="number" style="border:1px solid #18A99E; padding:8px;" value="1">
     <button class="up btn btn-info" style="background-color:#18A99E  ; color:white ;"   onClick='increaseCount(event, this)'>+</button>
   
          






    
          </td>
          <td class="padding">
          ₨38
          </td>
           
           
            </tr>
            <tr>
                <td class="flex"> <a style="color:black;" href=""><i class="fa-solid fa-circle-xmark"></i></a> <img src="<?php echo base_url('assets/images/Rectangle 67.png')?>" alt=""> Product Name</td>
          <td class="padding">
          ₨38
          </td>
          <td>
       


      <button class="down btn btn-info" style="background-color:#18A99E  ; color:white ;"  onClick='decreaseCount(event, this)'>-</button>
      <input type="number" style="border:1px solid #18A99E; padding:8px;" value="1">
     <button class="up btn btn-info" style="background-color:#18A99E  ; color:white ;"   onClick='increaseCount(event, this)'>+</button>
   
          






    
          </td>
          <td class="padding">
          ₨38
          </td>
           
           
            </tr>
        </div>

    </table>
    <div class="row">
        <div class="col-sm-6">
<form action="">
<input type="text" required style="width:40%; float:left;" class="form-control input-form" placeholder="Aapply Coupon" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <button class="input-group-text my-btn" style="width:20%; float:left;"  id="basic-addon2">Apply</button>
</form>
        </div>
        <div class="col-sm-6 fle">
            <button class="btn btn-info" style="background-color:#18A99E  ; color:white ;" >Update Cart</button>
            </div> 
    </div>
    
</section>


<div class="container">
    <div class="row">
        <div class="col-sm-6">

        </div>
        <div class="col-sm-6">
            <form action="">
            <table class="table caption-top">


  <tbody>

    <tr>
    <h3>Cart Total</h3>
      <th scope="row">Subtotal</th>
      <td>Rs/-100</td>

     
    </tr>
    <tr>
      <th scope="row">Shipping</th>
  
      <td>
        <table> <td><input checked type="radio" name="drone" value="Flate rate: 199"  id=""> Flate rate: 199</td>
        <tr> <td><input type="radio" name="drone">&nbsp;Self Pickup</td></tr>
        <tr> <td><input type="radio" name="drone">&nbsp;Card Swipe On Delivery: ₨199</td></tr>
    
    </table> </td>
      
    <tr>
      <th scope="row">Total</th>
      <td>Rs/-100</td>
     
    </tr>
  
  </tbody>
 
</table>
<div class="d-grid gap-2">
  <button class="btn btn-info" style="background-color:#18A99E  ; color:white ;"  type="button">Proceed to checkout</button>
</div>
            </form>
        </div>
    </div>
</div>




<?php include('footer.php') ?>
</body>
</html>