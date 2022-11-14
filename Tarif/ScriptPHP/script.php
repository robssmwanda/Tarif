<?php

   $firstname = $mail = $message = "";
   $firstnameErr = $mailErr = $messageErr = ""; 

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $firstname = checkInfo($_POST["firstname"]);
    $mail = checkInfo($_POST["mail"]);
   //  $message = checkInfo($_POST["message"])

    if(empty($firstname)) {
        $firstnameErr = 'Is required';
    }

    if(empty($mail)) {
        $mailErr = 'Is required'
    }

          
 }


 function checkInfo($var) {
    $var = trim($var);
    $var = stripcslashes($var);
    $var = htmlspecialchars($var);
    return $var;
 }
 
?>
