<?php
session_start();
?>
<?php
require('newbieConfig.php');

// username and password sent from form
$email=$_POST['email'];
$password=$_POST['password'];

$sqlquery="SELECT * FROM `Fotografer` WHERE `email`= '$email'";
$stm= $pdo->prepare($sqlquery);
try{
    $stm->execute();
}
catch (PDOException $e){
    echo "Error: " . $e->getMessage();
}

if($stm->rowCount() == 1){
    $result = $stm->fetch(PDO::FETCH_ASSOC);
    if(password_verify($password, $result['password'])){
        $_SESSION['userid']= $result['id'];
        $_SESSION['firstname']= $result['firstname'];
        $_SESSION['lastname']= $result['lastname'];
        $_SESSION['status']=true;
    echo json_encode(TRUE);
    }else{
    echo json_encode(FALSE);
    }    
}else{
    echo json_encode(FALSE);
}

/*

// To protect MySQL injection (more detail about MySQL injection)
$STH = $pdo->prepare("SELECT * FROM `Fotografer` WHERE `email`='$email' AND `password`='$password'");
 try {
        $STH->execute();
    }
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
if ($STH->rowCount() == 1){
    $result = $STH->fetch(PDO::FETCH_ASSOC);
   
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