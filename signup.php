<?php include('partials-front/menu.php'); ?>
<div class="login" style="border: 1px solid grey;
    width: 20%; text-align:center;
    margin: 5% auto;
    padding: 2%;">
    <h2>Sign Up</h2>
    <form action="" method="POST">
        <input type="text" name="full_name" placeholder="Full Name" required><br><br>
        <input type="text" name="username" autocomplete="off"placeholder="Username" required><br><br>
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input type="submit" name="submit" value="Sign Up"style="color:white; background:red; width:50px">
    </form>
</div>

<?php
    if(isset($_POST['submit'])){
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']); // password hash

        $sql = "INSERT INTO tbl_user SET 
            full_name='$full_name',
            username='$username',
            email='$email',
            password='$password'
        ";
        $res = mysqli_query($conn, $sql);

        if($res==true){
            echo "<script>alert('Signup Successful! Please login.');window.location='loginn.php';</script>";
        } else {
            echo "<script>alert('Signup Failed!');</script>";
        }
    }
?>
<?php include('partials-front/footer.php'); ?>