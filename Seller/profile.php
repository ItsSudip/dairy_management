<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
<link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="title">
        <h1>S&S Dairy Private Ltd.</h1>
        <div  class="logo">
            <a href="..\home.php"><img src="..\images\logo.png"></a></div>
            <div style="font-size: 1.5vw; margin-right: -1100px; margin-top: -80px;">
                <a href="..\PHP\logout.php">Log out</a>
            </div>
        <div class="contact">
            <a href="..\home.PHP"><img src="..\images\home.png"></a>
            <a href="..\contact_us.PHP"><img src="..\images\contact.png"></a>
            <a href="..\feedback.PHP"><img src="..\images\feedback.png"></a>
        </div>
    </div>
    <div class="middle">
        <div class="menu">
            <h1>Menu</h1>
            <?php
            $user = $_GET['user'];
            echo ("<a href='Profile.PHP?user=$user'><h2>View Profile</h2></a>");
            echo ("<a href='milkrate.PHP?user=$user'><h2>Milk Rate</h2></a>");
            echo ("<a href='order.PHP?user=$user'><h2>Order</h2></a>");
            /*<a href=""><h2>View Milk Rate </h2></a>
            <a href="order.php"><h2>Order</h2></a>*/
            ?>
        </div>
        <div class="about">
            <h1>Your Profile</h1>
            <?php
                $mysqli = new mysqli("localhost", "root", "", "dairy_management");
                $s_code = $_GET['user'];
                $result = $mysqli->query("select s_code,user_id,name,address,ani_cattle,r_date,sell_milk from seller where s_code='$s_code'");
                $row = $result->fetch_assoc();
                $user_id = $row["user_id"];
                $s_code = $row["s_code"];
                $name = $row["name"];
                $address = $row["address"];
                $ani_cattle = $row["ani_cattle"];
                $r_date = $row["r_date"];
                $sell_milk = $row["sell_milk"];
                echo ('<table style="font-size: 3vw; border-spacing: 30px; border: 8px solid black; text-align: right;">');
                echo ("<tr><td>User Id: <input type='text' value='$user_id' readonly></td></tr>");      
                echo ("<tr><td>Seller Code: <input type='text' value='$s_code' readonly></td></tr>");      
                echo ("<tr><td>Name: <input type='text' value='$name' readonly></td></tr>");      
                echo ("<tr><td>Address: <input type='text' value='$address' readonly></td></tr>");      
                echo ("<tr><td>Animal Cattle: <input type='text' value='$ani_cattle' readonly></td></tr>");      
                echo ("<tr><td>Registration Date: <input type='text' value='$r_date' readonly></td></tr>");      
                echo ("<tr><td>Sell Milk: <input type='text' value='$sell_milk' readonly></td></tr>");      
                echo ('</table>');
            ?>
        </div>
        <div class="gallery">
            <h1>Gallery</h1>
            <div>
                <a href="..\images\img1.jpg"><img src="..\images\img1.jpg" alt="here"></a>
            </div>
            <div>
                <img src="..\images\img2.jpg" alt="here">
            </div>
        </div>
    </div>
    <h2 style="margin-top: -50px;">Developed By: Sudip and Shibam</h2>
    <div class="copyright"><h3>COPYRIGHT © @2020 S&S Dairy Pvt Limited </h3></div>
</body>
</html>