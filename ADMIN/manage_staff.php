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
            <h1>Staff Registration</h1>
            <form action="..\PHP\staff\stafftable.php" method="POST">
                <table style="font-size: 3vw; border-spacing: 30px; border: 8px solid black; text-align: right;">
                    <tr>
                        <td>Staff_no: <input type="text" name="staff_no"></td>
                        <td><input type="Submit" name="insert" value="Insert Entry"></td>
                    </tr>
                    <tr>
                        <td>User_id: <input type="text" name="user_id"> </td>
                        <td><input type="submit" name="update" value="Update"></td>
                    </tr>
                    <tr>
                        <td>Name: <input type="text" name="name"></td>
                        <td><input type="submit" name="delete" value="Delete"></td>
                    </tr>
                    <tr>
                        <td>Address: <input type="address" name="address"></td>
                        <td><a href="staff_list.php"><input type="button" value="Staff List"></a></td>
                    </tr>
                    <tr>
                        <td>Gender: <input type="radio" name="gender" value="Male">Male</td>
                        <td><input type="radio" name="gender" value="Female">Female</td>
                    </tr>
                    <tr>
                        <td>Designation: <input type="text" name="designation"></td>
                        <td><input type="reset"></td>
                    </tr>
                    <tr>
                        <td>Salery: <input type="number" name="salery"></td>
                    </tr>
                    <tr>
                        <td>Phone No.: <input type="number" name="phone"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div style="margin: 200px auto;">
           
        </div>
    </div>
    <h2 style="margin-top: -50px;">Developed By: Sudip and Shibam</h2>
    <div class="copyright"><h3>COPYRIGHT © @2020 S&S Dairy Pvt Limited </h3></div>
</body>
</html>