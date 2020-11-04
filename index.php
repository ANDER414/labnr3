<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "z51PQPB0f2";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

echo"janel";
$sql = "SELECT * FROM Masuratori;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
while ($row = mysqli_fetch_assoc($result)){
echo $row[]}
}
?>
