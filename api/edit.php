<?php
session_start();
?>
<?php
require "newbieConfig.php";
?>
<?php

/*$passwd= $_POST['fpassword2'];
$salt1 = "18gI%f5A";
$salt2 = "@Y4p91bN";
$salt_password = md5($salt1.$passwd.$salt2);
*/
$userid= $_SESSION['userid'];

$sql= "SELECT `id`, `firstname`, `lastname`, `company`, `email`, `profilepic`, `insta`, `website`, `city`, `bio`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5` FROM `Fotografer` WHERE `id`= :id";
$count=$pdo->prepare($sql);
$count->bindParam(":id",$userid,PDO::PARAM_INT,5);
$count->execute();
$row = $count->fetch(PDO::FETCH_OBJ);
$personal = array('info'=>$row);
echo json_encode($personal);

if(isset($_SESSION['userid'])){
    $sql="UPDATE `Fotografer` SET `firstname`= :firstname,`lastname`= :lastname,`company`= :company, `email`= :email, `profilepic`=:profilepic,`insta`= :insta, `website`= :website, `city`=:city, `bio`= :bio, `pic1`=:pic1, `pic2`=:pic2, `pic3`=:pic3, `pic4`=:pic4, `pic5`=:pic5 WHERE `id`= $userid";
    $stm_update = $pdo->prepare($sql);
    $stm_update->execute(['firstname' => $_POST['ufirstname'], 'lastname' => $_POST['ulastname'], 'company' => $_POST['ucompany'], 'email' => $_POST['uemail'], 'profilepic' => $_POST['uprofilepic'], 'insta' => $_POST['uinsta'], 'website' => $_POST['uwebsite'], 'city' => $_POST['ucity'], 'bio' => $_POST['ubio'], 'pic1' => $_POST['upic1'], 'pic2' => $_POST['upic2'], 'pic3' => $_POST['upic3'], 'pic4' => $_POST['upic4'], 'pic5' => $_POST['upic5']]);

    $result = $stm_update->fetch(PDO::FETCH_ASSOC);
    $_SESSION['firstname']= $_POST['ufirstname'];
    $_SESSION['lastname']= $_POST['ulastname'];
        echo json_encode(1);
    }else{
       echo json_encode(2); 
}

/*
 if(isset($_POST['uemail']) ) {
        $sql="SELECT COUNT(*) AS 'antal_rader' FROM `Fotografer` WHERE `email`= :email";
        $stm_count = $pdo->prepare($sql);
        $stm_count->execute(['email' => $_POST['uemail']]);
        foreach($stm_count as $row){
        $antal_rader = $row['antal_rader'];
        }
}*/
?>