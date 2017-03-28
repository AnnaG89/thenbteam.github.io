<?php
session_start();
require "config.php";
header('Content-Type: application/json');

//delete user
$numeric = $_SESSION['userid'];

foreach ($numeric as $element) {
    if (is_numeric($element)) {
        $sql = "DELETE FROM `Fotografer` WHERE `id` = :id";
        $stm_delete = $pdo->prepare($sql);
        $stm_delete->execute(['id' => $_SESSION['userid']]);
        echo json_encode(TRUE);
        session_destroy();
    } else {
        echo json_encode(FALSE);
    }
}

//OLD CODE

if (isset($_SESSION['userid'])) {
    $sql = "DELETE FROM `Fotografer` WHERE `id` = :id";
    $stm_delete = $pdo->prepare($sql);
    $stm_delete->execute(['id' => $_SESSION['userid']]);
    echo json_encode(TRUE);
    session_destroy();
} else {
    echo json_encode(FALSE);
}