<?php
//include constants.php file here 
include('../config/constants.php');

// 1. get the id of admin to be deleted
 $id = $_GET['id'];

// 2. create sql query to delete admin
$sql = "DELETE FROM tbl_admin WHERE id=$id";

//Execute the query 
$res = mysqli_query($conn, $sql);

//check whether the query executed successfuly or not 
if($res==true)
{
    //query executed successfuly and admin deleted
   // echo "Admin Deleted";
   //Create Session variable to display message 
   $_SESSION['delete'] ="<div class='success'>Admin Delete Successfuly.</div>";
   //redirect to manage admin page
   header('location:'.SITEURL.'admin/manage-admin.php');
}
else
{
   //failed to delete admin
   //echo "Failed to Delete Admin";

   $_SESSION['delete'] ="<div class='error'>Failed To Delete Admin. Try Again Later.</div>";
   header('location:'.SITEURL.'admin/manage-admin.php');
}

// 3. redirect to manage admin page with message (success/error)

?>