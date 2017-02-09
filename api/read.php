<?php
session_start();
?>

<?php
require "config.php";


//Namn, företag, stad
$email = "idahultberg@gmail.com";

$sql= "SELECT `firstname`, `email`, `city` FROM `Fotografer` WHERE `email`=:email";
$count=$pdo->prepare($sql);
$count->bindParam(":email",$email,PDO::PARAM_INT,5);
$count->execute();
$row = $count->fetch(PDO::FETCH_OBJ);
$main = array('Fotografer'=>array($row));
echo json_encode($main);


//Allt utom lösenord på alla fotografer
$sql="SELECT `id`, `firstname`, `lastname`, `company`, `email`, `insta`, `website`, `city`, `bio` FROM `Fotografer` WHERE `id` >0"; 
$row=$pdo->prepare($sql);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);

$allInfo = array('data'=>$result);

echo json_encode($allInfo); 


//All information för fotograf som är inloggad.
$email = "idahultberg@gmail.com";

$sql= "SELECT `id`, `firstname`, `lastname`, `company`, `email`, `insta`, `website`, `city`, `bio`  FROM `Fotografer` WHERE `email`=:email";
$count=$pdo->prepare($sql);
$count->bindParam(":email",$email,PDO::PARAM_INT,5);
$count->execute();
$row = $count->fetch(PDO::FETCH_OBJ);
$personal = array('Fotografer'=>array($row));
echo json_encode($personal);

?>