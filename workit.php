<?php
    //Data collection from the appointment form in the Nannapaneni Associates webpage
    $nam = $_POST['nam'];
    $num = $_POST['num'];
    $mail = $_POST['mail'];

    $data = <<< val
    Appointment details 
    -------------------
    Name    : $nam
    Number  : $num
    Mail id : $mail 
    val;
    echo "$data";
?>