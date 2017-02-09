<?php
session_start();
?>
<?php
require "config.php";
?>
<?php

/*$sql= "SELECT * FROM `Fotografer` WHERE `id`LIKE 30";
$stm_select= $pdo->prepare($sql);
$stm_select->execute([]);*/


$passwd='upassword2';
$hash = crypt($passwd, "salt");

 if(isset($_POST['uemail']) ) {
        $sql="SELECT COUNT(*) AS 'antal_rader' FROM `Fotografer` WHERE `email`= :email";
        $stm_count = $pdo->prepare($sql);
        $stm_count->execute(['email' => $_POST['uemail']]);
        foreach($stm_count as $row){
        $antal_rader = $row['antal_rader'];
    }
    if($antal_rader > 0){
        $sql = "UPDATE `Fotografer` SET `firstname`= :firstname,`lastname`= :lastname,`company`= :company, `email`= :email, `insta`= :insta, `website`= :website, `city`=:city, `bio`= :bio, `password`= :password WHERE `id` LIKE 30";
        $stm_update = $pdo->prepare($sql);
        $stm_update->execute(['firstname' => $_POST['ufirstname'], 'lastname' => $_POST['ulastname'], 'company' => $_POST['ucompany'], 'email' => $_POST['uemail'], 'insta' => $_POST['uinsta'], 'website' => $_POST['uwebsite'], 'city' => $_POST['ucity'], 'bio' => $_POST['ubio'], 'password' => $hash]);
        echo "<h1>Din information har uppdaterats</h1>";
    }else{
       echo "<h1>Något gick fel.</h1>"; 
    }
}
?>
</body>
</html>