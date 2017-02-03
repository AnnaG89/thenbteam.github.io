<?php
session_start();
?>
<?php
require "config.php";
if(isset($_POST['femail']) ){
    $sql="SELECT COUNT(*) AS 'antal_rader' FROM `Fotografer` WHERE `email`= :email";
    $stm_count = $pdo->prepare($sql);
    $stm_count->execute(['email' => $_POST['femail']]);
    foreach($stm_count as $row){
        $antal_rader = $row['antal_rader'];
    }if($antal_rader == 0){
        $sql = "INSERT INTO `Fotografer`(`firstname`, `lastname`, `company`, `email`, `insta`, `website`, `city`, `password`)VALUES(:firstname, :lastname, :company, :email, :insta, :website, :city, :password)";
        $stm_insert = $pdo->prepare($sql);
        $stm_insert->execute(['firstname' => $_POST['ffirstname'], 'lastname' => $_POST['flastname'], 'company' => $_POST['fcompany'], 'email' => $_POST['femail'], 'insta' => $_POST['finsta'], 'website' => $_POST['fwebsite'], 'city' => $_POST['fcity'], 'password' => $_POST['fpassword']]);
        echo "<h1>OK</h1>";
    }else{
       echo "<h1>Denna emailadress är redan registrerad, logga in.</h1>"; 
    }
}
?>
</body>
</html>