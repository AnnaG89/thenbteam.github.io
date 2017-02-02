<?php
session_start();
if (isset($_SESSION['userid'])){
    echo "Du är inloggad!";
}
?>
