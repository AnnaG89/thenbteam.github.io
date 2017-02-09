<?php
require "newbieConfig.php";
session_start();
if (isset($_SESSION['userid'])){
    $res = new stdClass();
    $res->firstname = 'ffirstname';
    $res->lastname = 'flastname';
    $res->status = True;
    echo json_encode ($res);
    }
else {
  $res = new stdClass();
  $res->status = False;
  echo json_encode ($res);
}
?>
