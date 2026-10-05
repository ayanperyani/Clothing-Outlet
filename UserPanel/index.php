<?php
include("shared/nav.php");
?>

<!-- end header section -->
<!-- slider section -->
<section class="slider_section ">

   <!-- PHP START -->

   <?php
   $sql = "SELECT * FROM charasoul";
   $run = mysqli_query($conn, $sql);
   if (mysqli_num_rows($run) > 0) {
      $data = mysqli_fetch_assoc($run);
   ?>
      <div class="slider_bg_box">
         <img src=" <?php echo $data["charasoul_img"] ?>" alt="">
      </div>
   <?php
   }
   ?>
   <!-- PHP END -->

   <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="container ">
               <div class="row">
                  <!-- PHP START -->
                  <?php
                  $sql = "SELECT * FROM charasoul";
                  $run = mysqli_query($conn, $sql);
                  // if (mysqli_num_rows($run) > 0) {
                  while ($data = mysqli_fetch_assoc($run)) {
                  ?>

                     <div class="col-md-7 col-lg-6 ">
                        <div class="detail-box">

                           <h1>
                              <span>
                                 <?php echo $data["charasoul_title"]; ?>
                              </span>
                              <br>
                              <?php echo $data["charasoul_subtitle"]; ?>
                           </h1>
                           <p>
                              <?php echo $data["charasoul_para"]; ?> </p>
                        <?php
                        // }
                     }
                        ?>
                        <!-- PHP END -->
                        <div class="btn-box">
                           <a href="product.php" class="btn1">
                              Shop Now
                           </a>
                        </div>
                        </div>
                     </div>
               </div>
            </div>
         </div>




      </div>


      <div class="container">
         <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
         </ol>
      </div>
   </div>
</section>
<!-- end slider section -->
</div>
<!-- why section -->
<section class="why_section layout_padding">
   <div class="container">
      <div class="heading_container heading_center">
         <h2>
            Why Shop With Us
         </h2>
      </div>
      <div class="row">
         <!-- PHP START -->

         <?php
         $sql = "SELECT * FROM why_section_home";
         $run = mysqli_query($conn, $sql);
         if (mysqli_num_rows($run) > 0) {
            while ($data = mysqli_fetch_assoc($run)) {
         ?>


               <div class="col-md-4 ">
                  <div class="box ">
                     <div class="img-box">

                        <img src=" <?php echo $data["why_section_img"]; ?>" alt="">

                     </div>
                     <div class="detail-box">
                        <h5>
                           <?php echo $data["why_section_title"]; ?>

                        </h5>
                        <p>
                           <?php echo $data["why_section_para"]; ?>
                        </p>
                     </div>
                  </div>
               </div>

         <?php
            }
         }
         ?>
         <!-- PHP END -->

      </div>
   </div>
</section>
<!-- end why section -->

<!-- arrival section -->
<section class="arrival_section">
   <div class="container">
      <div class="box">
         <!-- New Arrivals Home PHP Statr -->
         <?php
         $sql = "SELECT * FROM new_arrival_home";
         $run = mysqli_query($conn, $sql);
         if (mysqli_num_rows($run) > 0) {
            $data = mysqli_fetch_assoc($run);
         ?>

            <div class="arrival_bg_box">
               <img src=" <?php echo $data["new_arrival_img"]  ?> " alt="">
            </div>
         <?php
         }
         ?>


         <div class="row">

            <?php
            $sql = "SELECT * FROM new_arrival_home";
            $run = mysqli_query($conn, $sql);
            if (mysqli_num_rows($run) > 0) {
               while ($data = mysqli_fetch_assoc($run)) {
            ?>

                  <div class="col-md-6 ml-auto">
                     <div class="heading_container remove_line_bt">
                        <h2>
                           <?php echo $data["new_arrival_title"]  ?>
                        </h2>
                     </div>
                     <p style="margin-top: 20px;margin-bottom: 30px;">
                        <?php echo $data["new_arrival_para"]  ?>
                     </p>

               <?php
               }
            }
               ?>
               <!-- New Arrivals Home PHP End -->


               <a href="newarrival.php">
                  Shop Now
               </a>
                  </div>
         </div>
      </div>
   </div>
</section>
<!-- end arrival section -->

<!-- product section -->
<section class="product_section layout_padding">
   <div class="container">
      <div class="heading_container heading_center">
         <h2>
            Our <span>products</span>
         </h2>
      </div>
      <div class="row">

<?php
            $sql = "SELECT * FROM product";
            $run = mysqli_query($conn, $sql);
            if (mysqli_num_rows($run) > 0) {
               while ($data = mysqli_fetch_assoc($run)) {
            ?>



         <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
               <div class="option_container">
                  <div class="options">
                     <a href="" class="option1">
                        <?php echo $data["product_name"]  ?>
                     </a>
                     <a href="" class="option2">
                        Buy Now
                     </a>
                  </div>
               </div>
               <div class="img-box">
                  <img src=" <?php echo $data["product_img"]  ?>" alt="">
               </div>
               <div class="detail-box">
                  <h5>
                     <?php echo $data["product_name"]  ?>
                  </h5>
                  <h6>
                      <?php echo $data["product_price"]  ?>
                  </h6>
               </div>
            </div>
         </div>
<?php
}}
?>



      </div>
      <div class="btn-box">
         <a href="product.php">
            View All products
         </a>
      </div>
   </div>
</section>
<!-- end product section -->

<!-- subscribe section -->
<section class="subscribe_section">
   <div class="container-fuild">
      <div class="box">
         <div class="row">
            <div class="col-md-6 offset-md-3">
               <div class="subscribe_form ">
                  <div class="heading_container heading_center">
                     <h3>Subscribe To Get Discount Offers</h3>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                  <form action="">
                     <input type="email" placeholder="Enter your email">
                     <button>
                        subscribe
                     </button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end subscribe section -->
<!-- client section -->
<section class="client_section layout_padding">
   <div class="container">
      <div class="heading_container heading_center">
         <h2>
            Customer's Testimonial
         </h2>
      </div>
      <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="box col-lg-10 mx-auto">
                  <div class="img_container">
                     <div class="img-box">
                        <div class="img_box-inner">
                           <img src="images/client.jpg" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="detail-box">
                     <h5>
                        Anna Trevor
                     </h5>
                     <h6>
                        Customer
                     </h6>
                     <p>
                        Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                     </p>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="box col-lg-10 mx-auto">
                  <div class="img_container">
                     <div class="img-box">
                        <div class="img_box-inner">
                           <img src="images/client.jpg" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="detail-box">
                     <h5>
                        Anna Trevor
                     </h5>
                     <h6>
                        Customer
                     </h6>
                     <p>
                        Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                     </p>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="box col-lg-10 mx-auto">
                  <div class="img_container">
                     <div class="img-box">
                        <div class="img_box-inner">
                           <img src="images/client.jpg" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="detail-box">
                     <h5>
                        Anna Trevor
                     </h5>
                     <h6>
                        Customer
                     </h6>
                     <p>
                        Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="carousel_btn_box">
            <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
               <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
               <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
   </div>
</section>
<!-- end client section -->
<!-- footer start -->
<?php
include("shared/footer.php");
?>