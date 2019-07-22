<?php
//define variables and set to empty values
$name_error = $email_error = "";
$name = $email = $message = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])){
        $name_error = "Það þarf að vera nafn";
    }else {
        $name = test_input($_POST["name"]);
        //check if name only contains letters and whitespace
        if(!preg_match("/^[a-zA-Z ]*$/,$name")){
            $name_error = "Nafnið má aðeins innihalda stafi";
        }
    }

    if (empty($_POST["email"])) {
        $email_error = "Það þarf að vera netfang";
    } else {
        $email = test_input($POST["email"]);
        //check if eail address is well formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Netfang ekki á réttu formi"
        }
    }

    

if (empty($_POST["message"])) {
    $message = "";
}else {
    $message = test_input($_POST["message"]);
}
//submitting the form
if ($name_error == '' and $email_error == '') {
    $message_body = '';
    unset($_POST['submit']);
    foreach ($_POST as $key => $value) {
        $message_body .= "$Key: $value\n";
    }
    $to = 'maggy.moller@gmail.com';
    $subject = 'Contact Form Submit';
    if (mail($to, $subject, $message)){
        $success = "Takk fyrir póstinn. Við höfum samband";
        $name = $email = $message = '';
    }
}

}

function test_inout($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}