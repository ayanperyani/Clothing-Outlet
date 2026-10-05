      <?php
      session_start()
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
      <title>Login</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />


      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Log In</h3>
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
                     <form action="#" method="post">
                        
                         
                               

                              <label >E-Mail Address</label>
                           <input type="email" placeholder="Enter your email address" name="u_email" class="form-control email"  />
                           <p id="p2"></p>
                           
                            

                            <label >Password</label>
                            <input type="password" placeholder="Enter your password" name="u_password" class="form-control password"  />
                           <p id="p4"></p>

                            
                           
                            <input type="submit" value="Submit" name="login"><br>

                            <p>You Dont Have An Account Please SignUp <a href="register.php"> <b>Click Here<b></a></p>
                        
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->

<?php
include("shared/connection.php");
if(isset($_POST["login"])){
    $email=$_POST["u_email"];
    $password=$_POST["u_password"];

    $sql = "SELECT * FROM users WHERE user_email='{$email}' AND user_password='{$password}'";
    
    $run = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($run);
    if(mysqli_num_rows($run) > 0){
        if($data["role"] == "Admin"){
            $_SESSION["id"]=$data["user_id"];
            $_SESSION["name"]=$data["user_name"];
            $_SESSION["email"]=$data["user_email"];
            $_SESSION["password"]=$data["user_password"];
            echo "<script> location.href= '../AdminPanel/users.php'</script>;";
        }else{
             $_SESSION["id"]=$data["user_id"];
            $_SESSION["name"]=$data["user_name"];
            $_SESSION["email"]=$data["user_email"];
            $_SESSION["password"]=$data["user_password"];
            echo "<script> location.href= 'index.php'
             alert('login Sucsessful')     </script>";
        }
    }else{
            echo "<script>alert('Inncorrect Email or Password');</script>";

    }
}


















?>














