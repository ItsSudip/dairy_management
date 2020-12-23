<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
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
            ?>
        </div>
        <div class="about">
            <h1>Bill</h1>
            <?php
                    $s_code = $_GET["user"];
                    $fat = $_POST["fat"];
                    $cattle = $_POST["cattle"];
                    $quantity = $_POST["quantity"];
                    $mysqli = new mysqli("localhost", "root", "", "dairy_management");
                    if(!strcasecmp($cattle,"cow"))
                    {
                        $ammount = $mysqli->query("select cow from milk where fat=$fat");
                        if($ammount-> num_rows>0)
                        {
                            $ammount = $ammount->fetch_assoc();
                            $ammount = $ammount['cow']*$quantity;
                        }
                        else
                            echo ("Can't process"); 
                    }
                    else{
                        $ammount = $mysqli->query("select buffalo from milk where fat=$fat");
                        if($ammount-> num_rows>0)
                        {
                            $ammount = $ammount->fetch_assoc();
                            $ammount = $ammount['buffalo']*$quantity;
                        }
                        else
                            echo ("Can't process"); 
                    }
                    //echo ($ammount);
                    $result = $mysqli->query("insert into bill(s_code,fat,quantity,bdate,ammount) values ('$s_code','$fat','$quantity',curdate(),'$ammount')");
                    
                    $bid = $mysqli->query("select max(bid) from bill");
                    $bid = $bid->fetch_assoc();
                    $bid=$bid['max(bid)'];
                    
                    $date = $mysqli->query("select curdate() from dual;");
                    $date = $date->fetch_assoc();
                    $date = $date['curdate()'];
                    echo ('<table style="font-size: 3vw; border-spacing: 30px; border: 8px solid black; text-align: right;">');
                    echo ("<tr><td>Bid: <input type='text' value='$bid' readonly></td></tr>");
                    echo ("<tr><td>Seller Code: <input type='text' value='$s_code' readonly></td></tr>");
                    echo ("<tr><td>Fat: <input type='address' value='$fat' readonly></td></tr>");
                    echo ("<tr><td>Quantity: <input type='address' value='$quantity' readonly></td></tr>");
                    echo ("<tr><td>Billing date: <input type='address' value='$date' readonly></td></tr>");
                    echo ("<tr><td>Amount Payble: <input type='address' value='$ammount' readonly></td></tr>");
                echo ('</table>
            </form>');
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