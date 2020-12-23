<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milk Rate List</title>
    <style type="text/css">
        table,td {
            border: 1px solid black;
            background-color: rgba(56, 83, 207,0.1);
            text-align: center;
        }
        tr:nth-child(odd){
            background-color: rgba(56, 83, 207,0.2);
        }
    </style>
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
        </div>
    </div>
    <div class="middle">
        <div class="menu">
            <h1>Menu</h1>
            <?php
                $user = $_GET['user'];
                //echo ($user);
                echo ("<a href='Profile.PHP?user=$user'><h2>View Profile</h2></a>");
                echo ("<a href='milkrate.PHP?user=$user'><h2>Milk Rate</h2></a>");
                echo ("<a href='order.PHP?user=$user'><h2>Order</h2></a>");
            ?>
        </div>
        <div class="about">
        <h1 style="text-decoration-line: underline;">Milk Rate</h1>
        <?php
            $mysqli = new mysqli("localhost", "root", "", "dairy_management");
            if($mysqli-> connect_error)
                die();
            $result = $mysqli->query("select fat,cow,buffalo,udate from milk;");
            if($result-> num_rows>0){
                echo '<table>';
                echo '<tr style="background-color: rgb(60, 126, 240); color: white"><td>Fat</td><td>Cow\'s Milk Rate </td><td>Buffalo\'s Milk Rate</td><td>Updated Date</td></tr>';
                while($row = $result ->fetch_assoc()){
                    echo "<tr><td>".$row['fat']."</td><td>".$row['cow']."</td><td>".$row['buffalo']."</td><td>".$row['udate']."</td></tr>";
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