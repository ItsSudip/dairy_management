<?php
    if(isset($_POST['insert']))
    {
        $user_id = $_POST["user_id"];
        $staff_no = $_POST["staff_no"];
        $name = $_POST["name"];
        $address = $_POST["address"];
        $salery = $_POST["salery"];
        $designation = $_POST["designation"];
        $phone_no = $_POST["phone"];
        $gender = $_POST["gender"];
        echo "$name $address  $user_id $staff_no $salery $designation $gender $phone_no";
        $mysqli = new mysqli("localhost", "root", "", "dairy_management");
        $result = $mysqli->query("insert into staff values('$staff_no','$user_id','$name','$address','$gender','$designation','$salery','$phone_no')");
        if($result == TRUE)
        {
            header('Location: ..\..\ADMIN\manage_staff.php?return=Data stored.');
        }
        else
            header('Location: ..\..\ADMIN\manage_staff.php?return=Data is not stored.');
    }
    else if($_POST['update'])
    {
        $user_id = $_POST["user_id"];
        $staff_no = $_POST["staff_no"];
        $name = $_POST["name"];
        $address = $_POST["address"];
        $salery = $_POST["salery"];
        $designation = $_POST["designation"];
        $phone_no = $_POST["phone"];
        $gender = $_POST["gender"];
        $mysqli = new mysqli("localhost", "root", "", "dairy_management");
        /*echo ("update seller set s_code='$s_code',user_id='$user_id',name='$name',address='$address',ani_cattle='$ani_cattle',r_date='$r_date',sell_milk='$sell_milk' where s_code='$s_code'");*/
        $result = $mysqli->query("update staff set staff_no='$staff_no',user_id='$user_id',name='$name',address='$address',gender='$gender',designation='$designation',sallery='$salery',phone_no='$phone_no' where staff_no='$staff_no';");
        if($result == TRUE)
        {
            header('Location: ..\..\ADMIN\manage_staff.php?return=Table Updated.');
        }
        else
            header('Location: ..\..\ADMIN\manage_staff.php?return=Table is not Updated.');
    }   
    else if($_POST['delete'])
    {
        $staff_no = $_POST["staff_no"];
        $mysqli = new mysqli("localhost", "root", "", "dairy_management");
        $result = $mysqli->query("select * from staff where staff_no='$staff_no'");
        if($result-> num_rows>0)
        {
            $result = $mysqli->query("delete from staff where staff_no='$staff_no';");
            header('Location: ..\..\ADMIN\manage_staff.php?return=Data Deleted.');
        }
        else    
            header('Location: ..\..\ADMIN\manage_staff.php?return=Data is not Deleted.');
    }
    else if($_POST['search'])
    {

    }
    /*$mysqli = new mysqli("localhost", "root", "", "dairy_management");
    $result = $mysqli->query("insert into seller values('$name','$address','$phone','$mail','$feedback')");
    if($result == TRUE)
    {
        header('Location: ..\feedback.php?return=1');
    }
    else
        header('Location: ..\feedback.php?return=0');*/
?>