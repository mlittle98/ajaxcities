<?php

try {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajax_demo";

$state = $_GET['state'];

try {
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT city_name FROM cities where state_name ='$state'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
$city = $row['city_name'];
echo $city . "<br>";
}
}
} else {
echo "0 results";
}
$conn->close();
} catch (Exception $ex) {
error_log("Caught exception: " . $ex->getMessage() . "\n");
echo "Contact IT";
exit;
}

