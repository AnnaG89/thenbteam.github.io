<?php
session_start();
?>
<?php
require('newbieConfig.php');

/*$passwd= $_POST['password'];
$salt1 = "18gI%f5A";
$salt2 = "@Y4p91bN";
$salt_password = md5($salt1.$passwd.$salt2);*/
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
    $result = $STH->fetch(PDO::FETCH_ASSOC);
    $_SESSION['userid']= $result['id'];
    $_SESSION['firstname']= $result['firstname'];
    $_SESSION['lastname']= $result['lastname'];
    $_SESSION['status']=true;
echo json_encode(TRUE);
}else{
echo json_encode(FALSE);
}

/*    $res = [
    "userid" => $_SESSION['userid'],
    "firstname" => $_SESSION['firstname'],
    "lastname" => $_SESSION['lastname'],
    "status" => true
    ];*/

/*    foreach($STH as $row){
        $_SESSION['userid']={$row[`id`]};
        $_SESSION['firstname']={$row[`firstname`]};
        $_SESSION['lastname']={$row[`lastname`]};
        $_SESSION['status']= true;
    }*/

?>