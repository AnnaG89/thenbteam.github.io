<?php
require "newbieConfig.php";
session_start();
if (isset($_SESSION['userid'])){
    $res = new stdClass();
    $res->id = $_SESSION['userid'];
    $res->firstname = $_SESSION['firstname'];
    $res->lastname = $_SESSION['lastname'];
    $res->status = true;
    echo json_encode ($res);
}else{
  $res = new stdClass();
  $res->status = False;
  echo json_encode ($res);
}
?>
