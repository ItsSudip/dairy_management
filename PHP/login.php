<?php
    $name = $_POST["user"];
    $sub = substr($name,0,3);
    if($sub=="SEL")
    {
        $mysqli = new mysqli("localhost", "root", "", "dairy_management");
        $result = $mysqli->query("select s_code from seller where s_code='$name'");
        if($result->num_rows == 1)
            header("Location: ..\seller\seller_home.php?user=$name");
        else
            header('Location: ..\login.php?user=true');
    }
    else
    {
        $password = $_POST["pass"];
        $mysqli = new mysqli("localhost", "root", "", "dairy_management");
        $result = $mysqli->query("select * from ADMIN where ID='$name'");
        $row=$result->fetch_assoc();
        if($row == NULL)
        {
            header('Location: ..\login.php?user=true');
        }
        else
        {
            if($row['ID'] == $name && $row['PASSWORD'] == $password)
            {
                header('Location: ..\ADMIN\admin_home.php');
            }
            else
            {
                header('Location: ..\login.php?user=true');
            }

        }
    }
?>