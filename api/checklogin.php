<?php
session_start();
?>
<?php
require('newbieConfig.php');
echo "begin";
// username and password sent from form
$username=$_POST['email'];
$password=$_POST['password'];
// To protect MySQL injection (more detail about MySQL injection)
$STH = $pdo->prepare("SELECT * FROM `Fotografer` WHERE `email`='$username' AND `password`='$password'");
    try {
        $STH->execute();
    }
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
if ($STH->rowCount() == 1){
        $_SESSION['userid'] = 1;
echo json_encode(TRUE);
        exit;
}else {
echo json_encode(FALSE);
}
?>