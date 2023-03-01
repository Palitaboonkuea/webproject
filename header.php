<?php  session_start(); ?>
<link rel="stylesheet" href="style_header.css">
<header>
        <a href="homepage.php" class ="logo"><b>samaang</b></a>
            <ul>
                
                <?php if(isset($_SESSION['username']))
                { ?> 
                    <li ><a class="button" href="homepage.php">HOME</a></li>
                    <li ><a class="button" href="logout.php">LOGOUT</a></li>
                    <li ><a class="button" href="manage.php">MANAGE</a></li>
                    <scrip>
                        <li><a class="button" href="profile.php" > <?php  echo $_SESSION['username']; ?></a></li>
                    </scrip>
                    <li class="profile"><a href="#"><img src="https://i.pinimg.com/564x/33/c3/7c/33c37cb8ddf5abc2e557369f15be69b8.jpg" width="30px" height="30px" style="border-radius: 50px;"></a></li>
            <?php }else
            { ?>
                <li><a class="button" href="homepage.php">HOME</a></li>
                <li ><a class="button" href="login_form.php">LOGIN</a></li>
                <li class="profile"><a ><img src="https://i.pinimg.com/originals/f6/db/3e/f6db3e2288f4c7c0ed28833f1bb998f4.jpg" width="30px" height="30px" style="border-radius: 50px;"></a></li>
           <?php }  ?>

            </ul>
</header>