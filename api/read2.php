<?php
session_start();
?>

<?php
require "newbieConfig.php";


$userid= $_POST['id'];

echo $userid;
$sql= "SELECT `id`, `firstname`, `lastname`, `company`, `email`, `profilepic`, `insta`, `website`, `city`, `bio`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5` FROM `Fotografer` WHERE `id`= :id";
$count=$pdo->prepare($sql);
$count->bindParam(":id",$userid,PDO::PARAM_INT,5);
$count->execute();
$row = $count->fetch(PDO::FETCH_OBJ);
$personal = array('data'=>$row);
echo json_encode($personal);

/*//Namn, företag, stad

$sql= "SELECT `id`, `firstname`, `lastname`, `company`, `city` FROM `Fotografer`";
$count=$pdo->prepare($sql);
$count->execute();
$row = $count->fetchAll(PDO::FETCH_OBJ);
echo json_encode($row);


//Allt utom lösenord på alla fotografer
$sql="SELECT `id`, `firstname`, `lastname`, `company`, `email`, `insta`, `website`, `city`, `bio` FROM `Fotografer` WHERE `id` >0"; 
$row=$pdo->prepare($sql);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);

$allInfo = array('data'=>$result);

echo json_encode($allInfo); */


//All information för fotograf som är inloggad.
/*$_SESSION['userid']= `id`;

$sql= "SELECT `id`, `firstname`, `lastname`, `company`, `email`, `insta`, `website`, `city`, `bio`  FROM `Fotografer` WHERE `id`= :id";
$count=$pdo->prepare($sql);
$count->bindParam(":id",$$_SESSION['userid']= `id`,PDO::PARAM_INT,5);
$count->execute();
$row = $count->fetch(PDO::FETCH_OBJ);
$personal = array('Fotografer'=>array($row));
echo json_encode($personal);
*/



?>