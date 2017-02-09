<?php
session_start();
?>
<?php
require "config.php";

$passwd='fpassword2';
$hash = crypt($passwd, "salt");

if(isset($_POST['femail']) ){
    $sql="SELECT COUNT(*) AS 'antal_rader' FROM `Fotografer` WHERE `email`= :email";
    $stm_count = $pdo->prepare($sql);
    $stm_count->execute(['email' => $_POST['femail']]);
    foreach($stm_count as $row){
        $antal_rader = $row['antal_rader'];
    }if($antal_rader == 0){
        $sql = "INSERT INTO `Fotografer`(`firstname`, `lastname`, `company`, `email`, `website`, `city`, `password`)VALUES(:firstname, :lastname, :company, :email, :website, :city, :password)";
        $stm_insert = $pdo->prepare($sql);
        $stm_insert->execute(['firstname' => $_POST['ffirstname'], 'lastname' => $_POST['flastname'], 'company' => $_POST['fcompany'], 'email' => $_POST['femail'], 'website' => $_POST['fwebsite'], 'city' => $_POST['fcity'], 'password' => $hash]);
        echo json_encode(TRUE);
    }else{
       echo json_encode(FALSE); 
    }
}
?>