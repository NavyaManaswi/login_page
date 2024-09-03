<!DOCTYPE html>
<html>
    <title>login</title>
    <link rel="stylesheet" href="style.css">
<body>
    <form method="post" action="login.php">
        <h1> LOGIN</h1>
        <div class="textbox">
            <input type="text" placeholder="username" name="username">
        </div>
        <div class="passbox">
            <input type="text" placeholder="password" name="password">
        </div>
        <input type="button" value="Login" class="login" name="login_btn">
        <div class="signup">
            Don't have an account ? <br>
            <a href="#">sign up</a>
        </div>
    </form>
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","");
if( isset($_POST['login_btn '])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from  websitelogin.logindetails where username='$username' ";
    $result= mqsqli_query($conn,$sql);
    while ($row=mqsqli_fetch_assoc($result)){
        $resultpassword=$row['password'];
        if ($password == $resultpassword){
            header('Location:index.html');
        }else{
            echo " <script>
                    alert('login unsuccessful, please check username or password');
                    </script>";
        }
    }
}



?>