<?php include "connect.php" ?>
<?php
    session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM member WHERE username='$username' && password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    if($row > 0)
    {
        if(!empty($_POST['remember']))
        {
            setcookie('user_name',$_POST['username'],time()+3600*24*7);
            setcookie('user_password',$_POST['password'],time()+3600*24*7);
        }else
        {
            if(isset($_COOKIE['user_name']))
            {
                setcookie('user_name', '');
                if(isset($_COOKIE['user_password'])){
                    setcookie('user_password', '');
                }
            }
        }

        $_SESSION["username"] = $row["username"];
        $_SESSION["address"] = $row["address"];
        header("location:homepage.php");
    }
    else
    {
        $_SESSION['ERROR'] = "username or password is incorrect";
        header("location:login_form.php");
    }
?>