<?php include('config/constants.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make wwbsite responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resturant website</title>
    <!-- Link our css file -->
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <!-- Nevbar Section Starts Here-->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <img src="images/WhatsApp Image 2025-04-27 at 9.41.12 PM.jpeg" alt="Resturant Logo" class="img-responsive">
            </div>
            <div class="menu text-right ">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">HOME</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">CATEGORIES</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>foods.php">FOOD</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>about.php">ABOUT US</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>loginn.php">LOGIN</a>
                    </li>
                   
                  
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
    <!-- Nevbar Section Ends Here-->