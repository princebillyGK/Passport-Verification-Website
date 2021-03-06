<?php include 'config/init.php' ?>

<?php
  session_start();
  if(isset($_SESSION['loginerror'])){
    echo "<script>alert('".$_SESSION['loginerror']."');</script>";
    unset($_SESSION);
    session_destroy();
}
 ?>

<!--============================================
=            contents intialization            =
=============================================-->

  <?php 
    $header = new Templete('common\header');
    $footer= new Templete('common\footer'); 
  ?>

<!--====  End of contents intialization  ====-->


 <!--============================
 =            Header            =
 =============================-->
  <?php  echo $header;?>
 <!--====  End of Header  ====-->


<!--==============================
=            Carousel            =
===============================-->

<section id="index-banner">
   <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="img/pass_bnr.jpg" class="d-block w-100" alt="Apply for Passport Online">
               <div class="carousel-caption">
                  <h1 class="display-1">Apply for Passport Online</h1>
                  <p class="display-3">You can can apply for passport by uploading your image and other credentials and fillup the form</p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="img/pass_qk_bnr.jpg" class="d-block w-100" alt="Quick Verification">
               <div class="carousel-caption">
                  <h1 class="display-1">Quick Verification</h1>
                  <p class="display-3">Online System makes it easy and quick to verify your identiy</p>
               </div>
            </div>
            <div class="carousel-item">
               <img src="img/pass_vr_bnr.jpg" class="d-block w-100" alt="Check Status">
               <div class="carousel-caption">
                  <h1 class="display-1">Check Status</h1>
                  <p class="display-3">You can check your passport status online without going anywhere at home</p>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
   </div>
</section>

<!--====  End of Carousel  ====-->





<!--==============================
=            Features            =
===============================-->
<section id="index-features">
   <h2 class="display-4">Lets Start</h2>
   <div class="container d-md-flex">
      <div class="feature">
         <div class="f-pic">
            <img src="img/link-f-apply.jpg" alt="apply">
            <div class="des">
               <br>
               <br>
               <br>
               <a href="applyOnline.php">
                  <h2><i class="fas fa-mouse-pointer"></i><br>
                     Apply
                  </h2>
               </a>
            </div>
         </div>
      </div>
      <div class="feature">
         <div class="f-pic">
            <img src="img/link-f-status.jpg" alt="">
            <div class="des">
               <br>
               <br>
               <br>
               <a href="">
                  <h2><i class="fas fa-user-check"></i><br>
                     Verify
                  </h2>
               </a>
            </div>
         </div>
      </div>
      <div class="feature clearfix">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.172039609653!2d90.37839770000001!3d23.77688730000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c74db79bafe5%3A0xb3db0cab013e65f6!2sDivisional+Passport+and+Visa+Office!5e0!3m2!1sen!2sbd!4v1556043603968!5m2!1sen!2sbd" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
   </div>
</section>

<!--====  End of Features  ====-->

 

  
  <!--============================
  =            footer            =
  =============================-->
    <?php echo $footer ?> 
  
  <!--====  End of footer  ====-->
  
