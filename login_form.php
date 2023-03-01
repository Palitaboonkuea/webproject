<?php 
    session_start();
    if(isset($_SESSION['ERROR']))
    {
        echo "<script> alert('username or password is incorrect');</script>";
        session_destroy();
    }
?>
<html>
    <head>
        <link rel = "stylesheet" href = "style_login.css">
    </head>
    <body>
    <div class="container">
        <h1>LOGIN</h1>
        
        <form action ="login_check.php" method="post">
            USERNAME
            <input type="text" name="username" onblur="checkUsername" value="<?php if(isset($_COOKIE['user_name'])){ echo $_COOKIE['user_name'];} ?>" required><br>
            PASSWORD
            <input type="password" name ="password" required value="<?php if(isset($_COOKIE['user_password'])){ echo $_COOKIE['user_password'];} ?>"><br>
            <input type="checkbox" name="remember" id="remember" value="remember" value="<?php if(isset($_COOKIE['user_name'])){?> checked <?php } ?>"  >remember?<br>
            
            <input type = "submit" name = "submit" value ="LOGIN"><br>
        </form>
        <b>don't have account? <a href="register_form.php">click me</a></b>
    </div>
    </body>
</html>