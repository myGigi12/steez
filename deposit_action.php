<?php
include 'connection.php';


$accountNo = $_REQUEST['number'];
$amount = $_REQUEST['amount'];
$password = $_REQUEST['password'];



$deposit = $con->query($sql);

$user = $deposit->fetch_assoc();

$_SESSION['user_id'] = $user['id'];





