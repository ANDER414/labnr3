<?php
/*
$dbServername = "localhost";
$dbUsername = "z51PQPB0f2";
$dbPassword = "wIgBdKkfkz";
$dbName = "z51PQPB0f2";*/



define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'z51PQPB0f2');
define('DB_PASSWORD', 'wmpCFCmz1h');
define('DB_NAME', 'z51PQPB0f2');


$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM Masuratori;";
$reult = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0) {
while($row =mysqli_fetch_assoc($result))
{
  echo $row[]."<br>"
}
}

?>
