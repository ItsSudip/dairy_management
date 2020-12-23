<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PAGE</title>
<link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="title">
        <h1>S&S Dairy Private Ltd.</h1>
        <div  class="logo">
            <a href="home.php"><img src="images\logo.png"></a></div>
        <div class="contact">
            <a href="home.PHP"><img src="images\home.png"></a>
            <a href="contact_us.PHP"><img src="images\contact.png"></a>
            <a href="feedback.PHP"><img src="images\feedback.png"></a>
        </div>
    </div>
    <?php
        if(isset($_GET["user"]))
        if($_GET["user"]) 
        echo '<script>alert("Failed to login!!!!")</script>'; 
    ?>
    <div class="middle">
        <div class="menu">
            <h1>Menu</h1>
            <a href="home.PHP"><h2>Home</h2></a>
            <a href="login.PHP"><h2>Login</h2></a>
            <a href="about_us.php"><h2>About Us</h2></a>
            <a href="service_facility.PHP"><h2>Service/Facility</h2></a>
            <a href="milk_preparation.PHP"><h2>Milk Preparation</h2></a>
            <a href="milk_rate.PHP"><h2>Milk Rate</h2></a>
            <a href="contact_us.PHP"><h2>Contact Us</h2></a>
        </div>
        <div style="text-align: center; margin: 200px auto; align-items: center;">
            <h1>Login</h1>
            <form action="PHP\login.php" method="POST">
                <table style="font-size: 2em; border-spacing: 30px; border: 8px solid black;">
                    <tr>
                        <td>Name:<input type="text" name="user"></td>
                    </tr>
                    <tr>
                        <td>Password:<input type="password" name="pass"></td>
                    </tr>
                    <tr>
                        <td><input type="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="gallery">
            <h1>Gallery</h1>
            <div>
                <a href="images\img1.jpg"><img src="images\img1.jpg" alt="here"></a>
            </div>
            <div>
                <img src="images\img2.jpg" alt="here">
            </div>
        </div>
    </div>
    <h2 style="margin-top: -50px;">Developed By: Sudip and Shibam</h2>
    <div class="copyright"><h3>COPYRIGHT © @2020 S&S Dairy Pvt Limited </h3></div>
</body>
</html>