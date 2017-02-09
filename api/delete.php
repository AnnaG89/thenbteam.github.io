<?php

if(isset($_GET['action']) && ($_GET['action'] == 'delete')) {
  $stmt_select = $DB_con->prepare('SELECT Fotograf FROM Fotografers WHERE Id =:uid');
  $stmt_select->execute(array(':uid'=>$_GET['delete_id']));
  $imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
  unlink("user_images/".$imgRow['Fotograf']); //change "user_files" to something that fits the DB
  $stmt_delete = $DB_con->prepare('DELETE FROM Fotografers WHERE Id =:uid');
  $stmt_delete->bindParam(':uid',$_GET['delete_id']);
  $stmt_delete->execute();
  header("Location: index.php");//what is this for??
} else  {
    // ...
}
?>
