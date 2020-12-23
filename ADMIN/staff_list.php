<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Staff</title>
    <link rel="stylesheet" href="../style/style.css">
    <style type="text/css">
        table,td {
            color: rgb(0, 50, 13);
            border: 1px solid black;
            background-color: rgba(56, 83, 207,0.1);
            text-align: center;
        }
        th{
            background-color: red;
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
        </div>
        <div class="about">
            <h1>Staff List</h1>
            <?php
            $mysqli = new mysqli("localhost", "root", "", "dairy_management");
            if($mysqli-> connect_error)
                die();
            $result = $mysqli->query("select name,address,staff_no,user_id,gender,designation,sallery,phone_no from staff;");
            if($result-> num_rows>0){
                echo '<table>';
                echo '<tr><td>Staff_no</td><td>User_Id</td><td>Name</td><td>Address</td><td>Gender</td><td>Designation</td><td>Salery</td><td>Phone No.</td></tr>';
                while($row = $result ->fetch_assoc()){
                    echo "<tr><td>".$row['staff_no']."</td><td>".$row['user_id']."</td><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['gender']."</td><td>".$row['designation']."</td><td>".$row['sallery']."</td><td>".$row['phone_no']."</td></tr>";
                }
                echo "</table>";
            }
            else
                $mysqli->close();
            ?>
        </div>
        <div style="margin: 200px auto;">
           
        </div>
    </div>
    <h2 style="margin-top: -50px;">Developed By: Sudip and Shibam</h2>
    <div class="copyright"><h3>COPYRIGHT © @2020 S&S Dairy Pvt Limited </h3></div>
</body>
</html>