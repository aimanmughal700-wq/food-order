
<?php include('partials-front/menu.php'); ?>
<div class="login" style="border: 1px solid grey;
    width: 20%; text-align:center;
    margin: 5% auto;
    padding: 2%;">
    <h2>Login</h2>
    <form action="" method="POST">
        <input type="text" name="username" autocomplete="new-password" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <input type="submit" name="submit" value="Login"style="color:white; background:red; width:50px">
        <p style="margin-top:10px">Do not have login account?<a href=signup.php style="color:green;font-weight:bold;font-size:20px;">Signup</a></p>
    </form>
</div>

<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";
        $res = mysqli_query($conn, $sql);

        if(mysqli_num_rows($res) == 1){
            $_SESSION['user'] = $username; 
            echo "<script>alert('Login Successful!');window.location='index.php';</script>";
        } else {
            echo "<script>alert('Invalid Username or Password');</script>";
        }
    }
?>
<?php include('partials-front/footer.php'); ?>
