<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Newbie</title>
</head>
<body>

<?php
$host = 'localhost'; //loclahost, den här datorn
//192.168.*.* är en routeradress. 
$db = 'Newbie';
$user = 'root';
$password = 'root';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES   => false  ];

$pdo = new PDO($dsn, $user, $password, $options);


echo "hello";

$sql= "SELECT * FROM `Fotografer`";
$stm_select= $pdo->prepare($sql);
$stm_select->execute([]);

echo "<div id= \"div1\"><table>";
echo "<tr>
                <th>Id</th>
                <th>Fotograf</th>
                <th>Insta</th>
                <th>Stad</th>
                <th>Webb</th>
            </tr>";
foreach ($stm_select as $row){
    echo "<tr>";
    echo "<td> {$row['Id']}</td>";
    echo "<td> {$row['Fotograf']}</td>";
    echo "<td> {$row['Insta']}</td>";
    echo "<td> {$row['Stad']}</td>";
    echo "<td> {$row['Webb']}</td>";
}    
echo "</table></div>"; 

?>


</body>
</html>