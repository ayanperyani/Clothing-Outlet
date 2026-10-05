<?php 
session_start();
?>

      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Register</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
         <!-- JQuery Link -->
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

 


<!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <div class="" ></div>
                     <h3>Sign Up</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                     <form action="#" method="post" onsubmit="return velidation()">
                        
                         
                               <label >Name</label>
                           <input type="text" placeholder="Enter your full name" name="u_name" class="form-control name"   />
                           <p id="p1" ></p>

                              <label >E-Mail</label>
                           <input type="email" placeholder="Enter your email address" name="u_email" class="form-control email"  />
                           <p class="p2"></p>
                           
                            <label >Phone</label>
                           <input type="tel" placeholder="Enter your phone phone" name="u_phone" class="form-control phone"  />
                           <p id="p3"></p>

                            <label >Password</label>
                            <input type="password" placeholder="Enter your password" name="u_password" class="form-control password"  />
                           <p id="p4"></p>

                            <label >Conform Passwor</label>
                            <input type="password" placeholder="Enter your conform password" name="u_cpassword" class="form-control cpassword"  />
                           <p id="p5"></p>
                           
                            <input type="submit" value="Submit" name="signup"/><br>

                            <p>You Already Have An Account <a href="login.php"> <b> Click Here </b> </a> </p>
                        
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->

<?php
// include("shared/connection.php");
if(isset($_POST["signup"])){
$name=$_POST["u_name"];
$email=$_POST["u_email"];
$phone=$_POST["u_phone"];
$password=$_POST["u_password"];
$cpassword=$_POST["u_cpassword"];

$sql="INSERT INTO users(user_name,user_email, user_phone, user_password, user_cpassword, role) VALUES('{$name}', '{$email}', '{$phone}', '{$password}', '{$cpassword}','User')";
$run =mysqli_query($conn,$sql);
if($run){
   echo "<script>alert('Registration successful!');</script>";
   echo "<script>location.href='login.php';</script>";
}else{
   echo "<script> alert('Registrtion faield! please try again');</script>";
   // echo "<script>location.href='register.php';</script>";
} 

}
?>


