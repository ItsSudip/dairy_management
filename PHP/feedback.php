<?php
    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $feedback = $_POST["feedback"];
    echo "$name $address $mail $phone $feedback";
    $mysqli = new mysqli("localhost", "root", "", "dairy_management");
    /*if($mysqli->connect_error)
    {
        echo "Connection Failed.";
    }
    else    
        echo "Connection established.";*/
    $result = $mysqli->query("insert into feedback values('$name','$address','$phone','$mail','$feedback')");
    if($result == TRUE)
    {
        header('Location: ..\feedback.php?return=1');
    }
    else
        header('Location: ..\feedback.php?return=0');
?>