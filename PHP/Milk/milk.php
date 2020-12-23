<?php
    if(isset($_POST['insert']))
    {
        $fat = $_POST["fat"];
        $cow = $_POST["cow"];
        $buffalo = $_POST["buffalo"];
        $date = $_POST["date"];
        /*echo "$fat $cow $buffalo $date";*/
        $mysqli = new mysqli("localhost", "root", "", "dairy_management");
        $result = $mysqli->query("insert into milk values('$fat','$cow','$buffalo','$date')");
        if($result == TRUE)
        {
            header('Location: ..\..\ADMIN\manage_milkrate.php?return=Data stored.');
        }
        else
            header('Location: ..\..\ADMIN\manage_milkrate.php?return=Data is not stored.');
    }
    else if($_POST['update'])
    {
        $fat = $_POST["fat"];
        $cow = $_POST["cow"];
        $buffalo = $_POST["buffalo"];
        $date = $_POST["date"];
        $mysqli = new mysqli("localhost", "root", "", "dairy_management");
        /*echo ("update seller set s_code='$s_code',user_id='$user_id',name='$name',address='$address',ani_cattle='$ani_cattle',r_date='$r_date',sell_milk='$sell_milk' where s_code='$s_code'");*/
        $result = $mysqli->query("update milk set fat='$fat',cow='$cow',buffalo='$buffalo',udate='$date' where fat='$fat';");
        if($result == TRUE)
        {
            header('Location: ..\..\ADMIN\manage_milkrate.php?return=Table Updated.');
        }
        else
            header('Location: ..\..\ADMIN\manage_milkrate.php?return=Table is not Updated.');
    }   
    else if($_POST['delete'])
    {
        $fat = $_POST["fat"];
        $mysqli = new mysqli("localhost", "root", "", "dairy_management");
        $result = $mysqli->query("select * from milk where fat=$fat;");
        if($result-> num_rows>0)
        {
            $result = $mysqli->query("delete from milk where fat=$fat;");
            header('Location: ..\..\ADMIN\manage_milkrate.php?return=Data Deleted.');
        }
        else    
            header('Location: ..\..\ADMIN\manage_milkrate.php?return=Data is not Deleted.');
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