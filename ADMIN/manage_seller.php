<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
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
    <?php
            if(isset($_GET["return"]))
            {
                $recieved = $_GET["return"];
                echo "<script>alert('$recieved')</script>"; 
            }
    ?>
    <div class="middle">
        <div class="menu">
            <h1>Menu</h1>
            <a href="manage_seller.PHP"><h2>Manage Seller</h2></a>
            <a href="manage_milkrate.PHP"><h2>Manage Milk Rate </h2></a>
            <a href="manage_staff.php"><h2>Manage Staff</h2></a>
            <a href="manage_feedback.PHP"><h2>Manage Feedback</h2></a>
            <a href="view_bill.PHP"><h2>View Bills</h2></a>
        </div>
        <div class="about">
            <h1>Manage Seller</h1>
            <form action="..\PHP\Seller\insert.php" method="POST">
                <table style="font-size: 3vw; border-spacing: 30px; border: 8px solid black; text-align: right;">
                    <tr>
                        <td>User Id: <input type="text" name="user_id" required></td>
                        <td><input type="submit" name="insert" value="Insert"></td>
                    </tr>
                    <tr>
                        <td>Seller Code: <input type="text" name="s_code" required></td>
                        <td><input type="submit" value="Update" name="update"></td>
                    </tr>
                    <tr>
                        <td>Seller Name: <input type="address" name="name" required></td>
                        <td><input type="submit" name="delete" value="Delete"></td>
                    </tr>
                    <tr>
                        <td>Address: <input type="text" name="address" required></td>
                        <td><input type="reset"></td>
                    </tr>
                    <tr>
                        <td>Animale Cattle: <input type="text" name="ani_cattle" required></td>
                        <td><a href="seller_list.php"><input type="button" value="Seller List"></a></td>
                    </tr>
                    <tr>
                        <td>Registration Date: <input type="text" name="date" required></td>
                        <td><span style="font-size: 1vw;">(YYYY-MM-DD)</span></td>
                    </tr>
                    <tr>
                        <td>Sell Milk: <input type="text" name="sell_milk" required></td>
                    </tr>
                </table>
            </form>
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