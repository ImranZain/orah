<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>

<body>
<?php include('header.php') ?>

<div class="container bg-img-hero">
    <div class="row">
        <div class="col-sm-12">
    
        </div>
    </div>
</div>

<br>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <img style="width:100%; margin-bottom:10px;" src="<?php echo('assets/images/Frame.png') ?>" alt="">

        </div>
        <div class="col-sm-4">
            <div class="row">
                <div class="col-sm-12">
                <img style="width:100%; margin-bottom:25px;" src="<?php echo('assets/images/Frame (2).png') ?>" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                <img style="width:100%; margin-bottom:10px;" src="<?php echo('assets/images/Frame (3).png') ?>" alt="">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
        <img style="width:100%; " src="<?php echo('assets/images/Frame (4).png') ?>" alt="">
        </div>
    </div>
</div>


<div class="container-fluid bg-swiper" >
   <div class="container-fluid overlay">
   <div class="row overlay">
        <div class="col-sm-12">
         
        <div class="swiper mySwiper">
      <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h1>Shop By Health Concerns</h1>
            </div>
        </div>
      </div>
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="<?php echo('assets/images/Group 1000003311.png') ?>" class="swipe_image" alt=""></div>
      <div class="swiper-slide"><img src="<?php echo('assets/images/Group 1000003311.png') ?>" class="swipe_image" alt=""></div>
      <div class="swiper-slide"><img src="<?php echo('assets/images/Group 1000003311.png') ?>" class="swipe_image" alt=""></div>
      <div class="swiper-slide"><img src="<?php echo('assets/images/Group 1000003311.png') ?>" class="swipe_image" alt=""></div>
      <div class="swiper-slide"><img src="<?php echo('assets/images/Group 1000003311.png') ?>" class="swipe_image" alt=""></div>
      <div class="swiper-slide"><img src="<?php echo('assets/images/Group 1000003311.png') ?>" class="swipe_image" alt=""></div>
      <div class="swiper-slide"><img src="<?php echo('assets/images/Group 1000003311.png') ?>" class="swipe_image" alt=""></div>
      <div class="swiper-slide"><img src="<?php echo('assets/images/Group 1000003311.png') ?>" class="swipe_image" alt=""></div>
      <div class="swiper-slide"><img src="<?php echo('assets/images/Group 1000003311.png') ?>" class="swipe_image" alt=""></div>
      <div class="swiper-slide"><img src="<?php echo('assets/images/Group 1000003311.png') ?>" class="swipe_image" alt=""></div>

    </div>
    <div class="swiper-pagination"></div>
  </div>

        </div>
    </div>
   </div>
</div>

<!-- ///////////////////////////////////Product Section////////////////////////////////// -->


<!-- /////////////////////////MEDICINE CATEGORY////////////////////// -->

<div class="container ">
    <div class="row">
        <div class="col-sm-4">
<img class="medicine" src="<?php echo('assets/images/Frame 20.png')  ?>" alt="">
        </div>
        <div class="col-sm-8 medicine-category" >
           <div class="container mobile-grid-heading">
           <div class="row ">
            <div class="col-sm-12">
            <h1 style="float:left;">Medicine</h1>
            <button style="float:right; " class="btn btn-outline-info">View All</button>   
            </div>
           </div>
           </div>    
                <div class="row grid-view">
                    <?php for($i=0; $i<8; $i++): ?>
                    <div class="col-sm-3">
                    <div class="card" >
  <img src="<?php echo('assets/images/Rectangle 67.png') ?>" class="card-img-top" alt="...">
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
    </div>
</div>







<!-- ///////////////////////////END MEDICINE Mobile CATEGORY//////////////////////// -->

<!-- //////////////////////////////////VITAMINS CATEGORY///////////////////////// -->
<div class="container vitamins">
    <div class="row">
        <div class="col-sm-4">
<img class="medicine" src="<?php echo('assets/images/Frame (5).png')  ?>" alt="">
        </div>
        <div class="col-sm-8 medicine-category">
        <div class="container mobile-grid-heading">
           <div class="row ">
            <div class="col-sm-12">
            <h1 style="float:left;">Vitamins</h1>
            <button style="float:right; " class="btn btn-outline-info">View All</button>   
            </div>
           </div>
           </div> 
                <div class="row grid-view">
                    <?php for($i=0; $i<8; $i++): ?>
                    <div class="col-sm-3">
                    <div class="card" >
  <img src="<?php echo('assets/images/Rectangle 67.png') ?>" class="card-img-top" alt="...">
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
    </div>
</div>



<!-- //////////////////////////////////ENDVITAMINS CATEGORY///////////////////////// -->






<!-- //////////////////////////////////Start Personal CATEGORY///////////////////////// -->
<div class="container vitamins">
    <div class="row">
        <div class="col-sm-4">
            <img class="medicine" src="<?php echo('assets/images/Frame (6).png')  ?>" alt="">
        </div>
        <div class="col-sm-8 medicine-category">
        <div class="container mobile-grid-heading">
           <div class="row ">
            <div class="col-sm-12">
            <h1 style="float:left;">Personal Care</h1>
            <button style="float:right; " class="btn btn-outline-info">View All</button>   
            </div>
           </div>
           </div>  
                <div class="row grid-view">
                    <?php for($i=0; $i<8; $i++): ?>
                    <div class="col-sm-3">
                    <div class="card" >
  <img src="<?php echo('assets/images/Rectangle 67.png') ?>" class="card-img-top" alt="...">
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
    </div>
</div>



<!-- //////////////////////////////////END PersonalCare CATEGORY///////////////////////// -->





<!-- //////////////////////////////////Start HEALTH CATEGORY///////////////////////// -->
<div class="container vitamins">
    <div class="row">
        <div class="col-sm-4">
<img class="medicine" src="<?php echo('assets/images/Frame 20 (2).png')  ?>" alt="">
        </div>
        <div class="col-sm-8 medicine-category">
        <div class="container mobile-grid-heading">
           <div class="row ">
            <div class="col-sm-12">
            <h1 style="float:left;">HealthCare</h1>
            <button style="float:right; " class="btn btn-outline-info">View All</button>   
            </div>
           </div>
           </div> 
                <div class="row grid-view">
                    <?php for($i=0; $i<8; $i++): ?>
                    <div class="col-sm-3">
                    <div class="card" >
  <img src="<?php echo('assets/images/Rectangle 67.png') ?>" class="card-img-top" alt="...">
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
    </div>
</div>



<!-- //////////////////////////////////END HEALTH CATEGORY///////////////////////// -->

<!-- ///////////////////////////////////ENDProduct Section////////////////////////////////// -->




<!-- /////////////////footer//////////////// -->
<div class="container-fluid bg-footer" >
    <div class="row">
        <div class="col-sm-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    
                                    <div class="card" style="background-color:transparent;">
<img class="footer-logo" src="<?php echo('assets/images/orah-logo-color-new.png') ?>" alt="">
  <div class="card-body">
    
    <p class="card-text">Orah Pharmacy, Pakistan's Trusted pharmacy</p>
    <ul class="my-ul">
  
             <li ><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li ><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li ><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li ><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
  </div>
</div>  
                                </div>
                                <div class="col-sm-4 border1">
                                <ul class="footer-ul">
                                    <span class="footer-heading">Quick Links</span>
  
  <li ><a href="#">Home</a></li>
  <li ><a href="#">About</a></li>
  <li ><a href="#">Categories</a></li>
  <li ><a href="#">Contact Us</a></li>
  <li ><a href="#">Certificate</a></li>
  <li ><a href="#">Products</a></li>

     </ul>

     <ul class="footer-ul ul2">
                                    <span class="footer-heading">Useful Links</span>
  
  <li ><a href="#">Privacy Policy</a></li>
  <li ><a href="#">Terms </a></li>
 

     </ul>
</div>
<div class="col-sm-4">
<ul class="ul">
  <span class="footer-heading cont">Contact Us</span><br><br>
  <li ><a href="#"><i class="fa-solid fa-location-dot"></i> &nbsp; Address, Karachi abc road</li>
  <li ><a href="tel:"><i class="fa-solid fa-phone"></i>&nbsp; Phone:03212901563;</a></li>
  <li ><a href="mailto:example@gmail.com"><i class="fa-regular fa-envelope"></i>&nbsp; example@gmail.com</a></li>


     </ul>


</div>
                            </div>
                        </div>
        </div>
    </div>
</div>

<!-- /////////////////footer//////////////// -->

<?php include('footer.php') ?>


    
</body>
</html>
