<?php
session_start();
?>
<?php
require('newbieConfig.php');

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
    $_SESSION['userid']= 'id';
    $_SESSION['firstname']= 'firstname';
    $_SESSION['lastname']= 'lastname';
    $_SESSION['status']=true;


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
echo json_encode(TRUE);
}else{
echo json_encode(FALSE);
}
?>