<?php
include ("shared/nav.php");
?>

      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Product Grid</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
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
            $Brand_id=$_GET["Id"];
            $sql = "SELECT * FROM product WHERE brand_id = '{$Brand_id}' ";
            $run = mysqli_query($conn, $sql);
            if (mysqli_num_rows($run) > 0) {
               while ($data = mysqli_fetch_assoc($run)) {
            ?>


               <div class="col-sm-6 col-md-4 col-lg-3">
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
}
}else{
   echo "No Product Available In This Brand";
}
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
      <!-- footer section -->
       <?php
include ("shared/footer.php");
?>
