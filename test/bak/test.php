<?php
$con=mysqli_connect("localhost","root","","chungkhoan");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM tbl_code_ck_hnx t");

while($row = mysqli_fetch_array($result)) {
	echo $row['id'] . " " . $row['name'];
	echo "<br>";
}

mysqli_close($con);

?>