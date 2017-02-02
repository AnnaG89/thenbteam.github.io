<?php
session_start();
?>
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<?php

include_once('config.php');

// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['password']; 
// To protect MySQL injection (more detail about MySQL injection)

$STH = $pdo->prepare("SELECT * FROM $tbl_name WHERE username='$username' and password='$password'");

	try {
		$STH->execute();
	}
	catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}

if ($STH->rowCount() == 1){

		$_SESSION['userid'] = 1;

 
echo "<script type='text/javascript'>
	   	document.location.href = 'login_success.php';
		</script>";
	    exit;   
}else {
echo "Felaktig epost eller lösenord";
}
?>
</body>
</html>