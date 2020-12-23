<?php
    if(isset($_POST['insert']))
    {
        $user_id = $_POST["user_id"];
        $s_code = $_POST["s_code"];
        $name = $_POST["name"];
        $address = $_POST["address"];
        $ani_cattle = $_POST["ani_cattle"];
        $r_date = $_POST["date"];
        $sell_milk = $_POST["sell_milk"];
        echo "$name $address $ani_cattle $s_code $user_id $r_date $sell_milk";
        $mysqli = new mysqli("localhost", "root", "", "dairy_management");
        $result = $mysqli->query("insert into seller values('$s_code','$user_id','$name','$address','$ani_cattle','$r_date','$sell_milk')");
        if($result == TRUE)
        {
            header('Location: ..\..\ADMIN\manage_seller.php?return=Data stored.');
        }
        else
            header('Location: ..\..\ADMIN\manage_seller.php?return=Data is not stored.');
        }
    else if($_POST['update'])
    {
        $user_id = $_POST["user_id"];
        $s_code = $_POST["s_code"];
        $name = $_POST["name"];
        $address = $_POST["address"];
        $ani_cattle = $_POST["ani_cattle"];
        $r_date = $_POST["date"];
        $sell_milk = $_POST["sell_milk"];
        echo "$name $address $ani_cattle $s_code $user_id $r_date $sell_milk";
        $mysqli = new mysqli("localhost", "root", "", "dairy_management");
        /*echo ("update seller set s_code='$s_code',user_id='$user_id',name='$name',address='$address',ani_cattle='$ani_cattle',r_date='$r_date',sell_milk='$sell_milk' where s_code='$s_code'");*/
        $result = $mysqli->query("update seller set s_code='$s_code',user_id='$user_id',name='$name',address='$address',ani_cattle='$ani_cattle',r_date='$r_date',sell_milk='$sell_milk' where s_code='$s_code';");
        if($result == TRUE)
        {
            header('Location: ..\..\ADMIN\manage_seller.php?return=Table Updated.');
        }
        else
            header('Location: ..\..\ADMIN\manage_seller.php?return=Table is not Updated.');
    }   
    else if($_POST['delete'])
    {
        $s_code = $_POST["s_code"];
        $mysqli = new mysqli("localhost", "root", "", "dairy_management");
        $result = $mysqli->query("select * from seller where s_code='$s_code'");
        if($result-> num_rows>0)
        {
            $result = $mysqli->query("delete from seller where s_code='$s_code';");
            header('Location: ..\..\ADMIN\manage_seller.php?return=Data Deleted.');
        }
        else    
            header('Location: ..\..\ADMIN\manage_seller.php?return=Data is not Deleted.');
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