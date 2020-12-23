<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="../style/style.css">
    <style type="text/css">
            table,td {
                color: rgb(0, 50, 13);
                border: 1px solid black;
                background-color: rgba(56, 83, 207,0.1);
                text-align: center;
            }
            th{
                background-color: rgb(56, 83, 207);
                color: white;
            }
            tr:nth-child(odd){
                background-color: rgba(56, 83, 207,0.4);
            }
    </style>
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
            <a href="manage_seller.PHP"><h2>Manage Seller</h2></a>
            <a href="manage_milkrate.PHP"><h2>Manage Milk Rate </h2></a>
            <a href="manage_staff.php"><h2>Manage Staff</h2></a>
            <a href="manage_feedback.PHP"><h2>Manage Feedback</h2></a>
            <a href="view_bill.PHP"><h2>View Bills</h2></a>
        </div>
        <div class="about">
            <h1>Feedbacks</h1>
            <?php
            $mysqli = new mysqli("localhost", "root", "", "dairy_management");
            if($mysqli-> connect_error)
                die();
            $result = $mysqli->query("select name,address,phone_no,mail,feedback from feedback;");
            if($result-> num_rows>0){
                echo '<table>';
                echo '<tr><td>Name</td><td>Address</td><td>Phone No</td><td>Mail</td><td>Feedback</td></tr>';
                while($row = $result ->fetch_assoc()){
                    echo "<tr><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['phone_no']."</td><td>".$row['mail']."</td><td>".$row['feedback']."</td></tr>";
                }
                echo "</table>";
            }
            else
                $mysqli->close();
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