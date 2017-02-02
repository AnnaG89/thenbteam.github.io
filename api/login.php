
<?php header('Access-Control-Allow-Origin: *');

// copy&edit from https://www.scirra.com/tutorials/525/simple-login-using-a-mysql-database
$Epost = $_GET['fEpost'];
$Lösen = $_GET['fLösen'];
$con = new mysqli('localhost','fEpost','fLösen','thenbteam');

// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_errno();
exit();
}
/* Create a prepared statement */
if($stmt = $con -> prepare("SELECT Id FROM Fotografer WHERE Epost=?AND Lösen=?")) {

/* Bind parameters: s - string, b - blob, i - int, etc */
$stmt -> bind_param("ss", $Epost, $Lösen);

/* Execute it */
$stmt -> execute();

/* Bind results */
$stmt -> bind_result($result);

/* Fetch the value */
$stmt -> fetch();

echo $result;

/* Close statement */
$stmt -> close();
}

// Close the connnection
mysqli_close($con);
?>