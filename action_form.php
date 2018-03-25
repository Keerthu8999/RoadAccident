<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_select_db($conn,"testdb");
//include_once 'C:\xamp\htdocs\connect.php';
$veh_no=$_POST['veh_no'];
echo $veh_no;
$p_aadhar=$_POST['p_aadhar'];
echo $p_aadhar;

$sql = "SELECT * FROM  vehicle inner join accident on vehicle.owner_aadhar = accident.p_aadhar where veh_no = $veh_no and p_aadhar = $p_aadhar" ;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["owner"] . "  ".$row["owner_aadhar"]."   ".  $row["veh_name"].  "   ".$row["veh_no"]."   ". $row["acc_location"]. "   ".$row["acc_type"]. "   ".$row["cause"]. "   ".$row["road_type"]."<br>"."<br>"."<hr>";
    }
} else {
    echo "0 results";
    }

$sql1 = "select name,aadhar_no,address,dateofbirth,dependent_name,relation from person inner join dependents on person.aadhar_no = dependents.main_aadhar";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
        echo  $row["name"] . "     ".$row["aadhar_no"]."         ".  $row["address"].  "            ".$row["dateofbirth"]."           ". $row["dependent_name"]. "     ".$row["relation"]. "<br>";
}}    
else
{
echo "o results";
}
$conn->close();
?>
