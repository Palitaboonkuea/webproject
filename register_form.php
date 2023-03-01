<?php 
    session_start();

    if(isset($_SESSION['ERROR']))
    {
        echo "<script> alert('password not match');</script>";
        session_destroy();
    }

?>
<html>
    <head><meta charset="utf-8"></head>
    <link rel="stylesheet" href = "style_register.css">
    <style>
        .thinking {
                    border-color:#FFFF99;
        }
        .approved {
                    border-color: #99FFFF;
                    
        }
        .denied {
                    border-color: red	;
        }
        #status
        {
            margin:0px;
            color:#6633CC;
        }
    </style>
    <script>
            var xmlHttp;
            function checkUsername() {
            document.getElementById("username").className = "thinking";
            xmlHttp = new XMLHttpRequest();
            xmlHttp.onreadystatechange = showUsernameStatus;
            var username = document.getElementById("username").value;
            var url = "checkusername.php?username=" + username;
            xmlHttp.open("GET", url);
            xmlHttp.send();
            }
            function showUsernameStatus() {
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
            if (xmlHttp.responseText == "okay") {
                const element = document.getElementById("status");
                      element.innerHTML = "can use this user";
                      document.getElementById("status").className = "approved";
                      document.getElementById("username").className = "approved";
            } else {
                      document.getElementById("username").className = "denied";
                      const element = document.getElementById("status");
                      element.innerHTML = "user have already use";
                      document.getElementById("username").focus();
                      document.getElementById("username").select();
                    }
                }
            }
</script>
    <body>
    <div class="container">
        <h1>SIGN UP</h1>
        <form action="save.php" method="post">
            <label>
                <b>username</b><br>
                <input type = "text" name="username" id="username" onblur="checkUsername()" required ><p id = "status" ></p>
                <b>password</b><br>
                <input type = "password" name ="password" id="password" pattern="{4,}" required><br>
            <b>confirm password</b><br>
                <input type="password" name="c_password"id="c_password"required><br>
            <b>name</b><br>
                <input type = "text" name = "name" id="name"required pattern="[ก-๙a-zA-z\s]{1,}"><br>
            <b>email</b><br>
                <input type="email" name ="email" id="email" required><br>
            </label>
            <label>
            <b>phone</b><br>
                <input type = "tel" name="phone" id="phone" pattern="[0-9]{10}" required><br>
            </label>

            <label>
            <b>address</b><br>
                <input type="text" name="address" id="address"required><br>
            </label>

            <label>
                <input type="submit" class="button-56" role="button" value="Register">
            </label>
            <label>
            <i>already have accont?</i> <a href="login_form.php" style="text-decoration:none; color:#FF3399;"><b>click</b></a><br>
            </label>

    </form>
    </div>
    </body>
</html>




