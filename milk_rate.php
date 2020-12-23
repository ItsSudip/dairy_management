<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milk Rate List</title>
    <link rel="stylesheet" href="style/style.css">
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
    </div>
    <h2 style="margin-top: -50px;">Developed By: Sudip and Shibam</h2>
    <div class="copyright"><h3>COPYRIGHT © @2020 S&S Dairy Pvt Limited </h3></div>
</body>
</html>