<?php
$name = $_REQUEST["username"];
$phone = $_REQUEST["phone"];
$email = $_REQUEST["email"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($name)) {
        $nameErr = "Name is required";
    } else if (strlen($name) < 3) {
        $nameErr = "name field needs to have than more 3 chars";
    } else {
        $nameErr = "";
        test_field($name);
    }

    if (empty($phone)) {
        $phoneErr = "Phone is required";
    } else if (!preg_match("/^(\+\d{1,3}\s)?\d{2}[\s.-]\d{3}[\s.-]\d{4}$/", $phone)) {
        $phoneErr = "Please respect the phone number pattern";
    } else {
        $phoneErr = "";
        $phone = test_field($phone);
    }


    if (empty($email)) {
        $emailErr = "Email is required";
    } elseif (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,10})+$/", $email)) {
        $emailErr = "Please Insert the email in the correct form";
    } else {
        $emailErr = "";
        $email = test_field($email);
    };

}

function test_field($data) {
    $data = trim($data); 
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (empty($nameErr) && empty($phoneErr) && empty($emailErr)) {
    include "success.php";
} else {
    include "index.php";
}

?>







<?php

// $nameErr = $phoneErr = $emailErr = "";
// $name = $phone = $email = "";

// $name = $_REQUEST["username"];
// $phone = $_REQUEST["phone"];
// $email = $_REQUEST["email"];


// if ($_SERVER["REQUEST_METHOD"] == 'POST') {
//         if (empty($name)) {
//             $nameErr = "Name is required";
//         } else {
//             $name = test_field($name);
//             if (!preg_match("/^[a-zA-Z]+(.|_)?[a-zA-Z-9]+$/", $name)) {
//                 $nameErr = "Only letters and white space allowed";
//             }
//         }
        
//         if (empty($phone)) {
//             $nameErr = "Phone is required";
//         } else {
//             $phone = test_field($phone);
//             if (!preg_match("/^(\+\d{1,3}\s)?\d{2}[\s.-]\d{3}[\s.-]\d{4}$/", $phone)) {
//                 $phoneErr = "Please respect the phone number pattern";
//             }
//         }
    
//         if (empty($email)) {
//             $email = test_field($email);
//         } else {
//             $emailErr = "Email is required";
        
//             if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,10})+$/", $email)) {
//                 $emailErr = "Email is not valid";
//             }
//         } 
// }

// function test_field($data) {
//     $data = trim($data); 
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }


// require("index.php");


// if ($messageSend == false) { 
//     echo "<script> alert('Message not valid') </script>";
// }


?>