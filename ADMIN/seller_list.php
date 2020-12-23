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
        </div>
        <div class="about">
            <h1>Seller List</h1>
            <?php
            $mysqli = new mysqli("localhost", "root", "", "dairy_management");
            if($mysqli-> connect_error)
                die();
            $result = $mysqli->query("select name,address,s_code,user_id,name,ani_cattle,r_date,sell_milk from seller;");
            if($result-> num_rows>0){
                echo '<table>';
                echo '<tr><td>S_code</td><td>User_Id</td><td>Name</td><td>Address</td><td>Ani_cattle</td><td>Registration Date</td><td>Milk Quantity</td></tr>';
                while($row = $result ->fetch_assoc()){
                    echo "<tr><td>".$row['s_code']."</td><td>".$row['user_id']."</td><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['ani_cattle']."</td><td>".$row['r_date']."</td><td>".$row['sell_milk']."</td></tr>";
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