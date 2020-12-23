<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <style type="text/css">
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
                echo ("<a href='Profile.PHP?user=$user'><h2>View Profile</h2></a>");
                echo ("<a href='milkrate.PHP?user=$user'><h2>Milk Rate</h2></a>");
                echo ("<a href='order.PHP?user=$user'><h2>Order</h2></a>");
            
        echo ("</div>");
        echo ('<div class="about">');
        echo ('<h1 style="text-decoration-line: underline;">Order</h1>');
        echo ("<form action='generate_bill.php?user=$user' method='POST'>");
            ?>
                <table style="font-size: 3vw; border-spacing: 30px; border: 8px solid black; text-align: right;">
                    <tr>
                        <td>Fat:
                        <?php
                            $mysqli = new mysqli("localhost", "root", "", "dairy_management");
                            if($mysqli-> connect_error)
                                die();
                            $result = $mysqli->query("select fat from milk;");
                            if($result-> num_rows>0){
                                echo ('<select name="fat">');
                                while($row = $result ->fetch_assoc()){
                                    echo("<option value=".$row['fat'].">".$row['fat']."</option>");
                                    /*echo "<tr><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['phone_no']."</td><td>".$row['mail']."</td><td>".$row['feedback']."</td></tr>";*/
                                }
                                echo "</select>";
                            }
                            else
                                $mysqli->close();
                            ?></td>

                    </tr>
                    <tr>
                        <td>Cattle Type:
                        <select name="cattle">
                        <option value="cow">Cow</option>
                        <option value="buffalo">Buffalo</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Quantity:<input type="number" name="quantity"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Generate Bill"></td>
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