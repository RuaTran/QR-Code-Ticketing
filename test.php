
<?php
$q = $_GET['q'];
$conn = mysqli_connect("XXX.XXX.XXX.XXX", "UN", "PW", "TABLE");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT `COL 2`, `COL 7` from `TABLE 1` where `COL 1` = '$q'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$response = array($row["COL 2"],$row["COL 7"]);
echo json_encode($response);
}
} else { echo 'invalid request!'; }
$conn->close();
?>
