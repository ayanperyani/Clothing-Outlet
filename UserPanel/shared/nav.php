<?php
session_start();
include("shared/connection.php");
?>

<!DOCTYPE html>
<html>

<head>

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
   <title>Famms - Fashion HTML Template</title>
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
</head>

<body>
   <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
               <a class="navbar-brand" href="index.php"><img width="250" src="images/logo.png" alt="#" /></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                     <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Brands <span class="caret"></span></a>
                        <ul class="dropdown-menu">

                           <?php
                           $sql = "SELECT * FROM brand";
                           $run = mysqli_query($conn, $sql);
                           if (mysqli_num_rows($run) > 0) {
                              while ($data = mysqli_fetch_assoc($run)) {
                           ?>

                                 <li><a href="brandshop.php?Id=<?php echo $data["brand_id"] ?>"> <?php echo $data["brand_name"] ?> </a></li>
                           <?php }
                           } ?>
                        </ul>

                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="product.php">Products</a>
                     </li>

                      <?php
                           $sql = "SELECT * FROM product";
                           $run = mysqli_query($conn, $sql);
                           $data = mysqli_fetch_assoc($run)
                        ?>

                     <li class="nav-item">
                        <a class="nav-link" href="newarrival.php?Id=<?php echo $data["new_arrival_id"] ?>"> NewArrivals </a>
                     </li>
                     <?php
                     // }
                     ?>

                     <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                     </li>

                     <!-- // Signup and login button session set// -->
                     <?php
                     if (!isset($_SESSION["id"])) {
                     ?>
                        <li class="nav-item">
                           <a class="nav-link" target="_blank" href="register.php">SignUp/</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" target="_blank" href="login.php">Login</a>
                        </li>
                        </li>
                     <?php
                     } else {
                     ?>
                        <li class="nav-item">
                           <a class="nav-link" href="#"> <?php echo $_SESSION["name"] ?> </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="logout.php"> Logout </a>
                        </li>
                     <?php
                     }
                     ?>
                     <!-- // end // -->

                     <li class="nav-item">
                        <a class="nav-link" href="#">
                           <img src="./images/grocery-store (1).png" alt=""></a>
                     </li>
                     <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <img src="./images/search.png" alt="">
                        </button>
                     </form>
                  </ul>
               </div>
            </nav>
         </div>
      </header>


      <!-- <li class="nav-item">
                           <a class="nav-link" href="register.php" target blank>
                               <img src="./images/avatar.png" alt="">/</a> -->