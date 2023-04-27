<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
    
   $email = mysqli_real_escape_string($conn, $_POST['usermail']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $select = " SELECT * FROM fit WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist';
   }else{
      if($pass != $cpass){
         $error[] = 'password not mathched!';
      }else{
         $insert = "INSERT INTO fit(email, password) VALUES('$email','$pass')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Freak - No Pain No Gain</title>
    <link rel="stylesheet" href="style2.css">

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css">




    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap" rel="stylesheet">

    <!-- 
    - preload images
  -->
    <link rel="preload" as="image" href="./assets/images/hero-banner.png">
    <link rel="preload" as="image" href="./assets/images/hero-circle-one.png">
    <link rel="preload" as="image" href="./assets/images/hero-circle-two.png">
    <link rel="preload" as="image" href="./assets/images/heart-rate.svg">
    <link rel="preload" as="image" href="./assets/images/calories.svg">

</head>

<body id="top">

    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <a href="#" class="logo">
                <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>

                <span class="span">Fitness Freak</span>
            </a>






    </header>



  <div>
   
  </div>

    <main>
        <article>

            <!-- 
        - #HERO
      -->

            <section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section style="background-image: url('./assets/images/hero-bg.png')">
                <div class="container">
                

                    <div class="hero-content">
                    
                    <center><h1>Good health starts with what you eat.</h1></center>
    <br>
    <center><h3> Please! First Register Yourself</h3></center>
    <br>
                        <p class="hero-subtitle">
                        

                            <div class="form-container">
                              

                                <form action="" method="post">
                                    <h3 class="title">register now</h3>
                                    <?php
                             if(isset($error)){
                                foreach($error as $error){
                                   echo '<span class="error-msg">'.$error.'</span>';
                                }
                             }
                          ?>
                                        <input type="email" name="usermail" placeholder="enter your email" class="box" required>
                                        <input type="password" name="password" placeholder="enter your password" class="box" required>
                                        <input type="password" name="cpassword" placeholder="confirm your password" class="box" required>
                                        <input type="submit" value="register now" class="form-btn" name="submit">
                                        <p>already have an account? <a href="login_form.php">login now!</a></p>
                                </form>

                            </div>

                    </div>

                    <div class="hero-banner">

                        <img src="./assets/images/hero-banner.png" width="660" height="753" alt="hero banner" class="w-100">

                        <img src="./assets/images/hero-circle-one.png" width="666" height="666" aria-hidden="true" alt="" class="circle circle-1">
                        <img src="./assets/images/hero-circle-two.png" width="666" height="666" aria-hidden="true" alt="" class="circle circle-2">

                        <img src="./assets/images/heart-rate.svg" width="255" height="270" alt="heart rate" class="abs-img abs-img-1">
                        <img src="./assets/images/calories.svg" width="348" height="224" alt="calories" class="abs-img abs-img-2">

                    </div>

                </div>
            </section>










            <!-- 
    - custom js link
  -->
            <script src="./assets/js/script.js" defer></script>

            <!-- 
    - ionicon link
  -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>