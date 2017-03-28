<?php
session_start();
require "config.php";
header('Content-Type: application/json');
if (isset($_SESSION['userid'])) {
    $status_true = array('id' => $_SESSION['userid'], 'firstname' => $_SESSION['firstname'], 'lastname' => $_SESSION['lastname'], 'status' => true);
    echo json_encode($status_true);
} else {
    $status_false = false;

    echo json_encode($status_false);
}