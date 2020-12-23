<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Staff</title>
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
            <h1>Manage Milk Rate</h1>
            <form action="..\PHP\Milk\milk.php" method="POST">
                <table style="font-size: 3vw; border-spacing: 30px; border: 8px solid black; text-align: right;">
                    <tr>
                        <td>Fat: <input type="text" name="fat"></td>
                        <td><input type="submit" name="insert" value="Add"></td>
                    </tr>
                    <tr>
                        <td>Buffalo's Milk Rate: <input type="text" name="buffalo"></td>
                        <td><input type="submit" value="Update" name="update"></td>
                    </tr>
                    <tr>
                        <td>Cow's Milk Rate: <input type="text" name="cow"></td>
                        <td><input type="submit" value="Delete" name="delete"></td>
                    </tr>
                    <tr>
                        <td>Updated Date: <input type="text" name="date"></td>
                        <td><input type="reset"></td>
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