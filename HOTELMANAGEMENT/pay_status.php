<?php

require('admin/extra/func.php');
require('admin/extra/connect.php');

session_start();

if(!(isset($_SESSION['login']) && $_SESSION['login']==true)){
    redirect('room.php');
}

$frm_data = filteration($_POST);

$q = "INSERT INTO `booking_details`(`user_id`, `room_id`, `room_name`, `price`, `total_pay`, `user_name`, `phonenum`, `address`) VALUES (?,?,?,?,?,?,?,?)";

// insert($q,[$_SESSION['room']['name']]);














?>