 <?php
     //Authorization - Access Control
     //Check whether the user is logged in or out
     if(! isset($_SESSION['user'])) //if user session is not set
     {
       // user is not logged in
       //Redirect to login page with message
       $_SESSION['no-login-message'] ="<div class='error'>Please login to access Admin Panel.</div>";
       //Redirect to login page 
       header('location:'.SITEURL.'admin/login.php'); 
      
       
     }
     ?> 
      