
<?php

$con = mysqli_connect("172.19.0.2","root","trucorp","Trucorp");

if($con->connect_error){
	die("Koneksi gagal: " .$con->connect_error);
}

$tbl = "SELECT ID, Nama, Kantor FROM users";
$res = $con->query($tbl);

if($res->num_rows > 0){
	$idx = 1;
	while($row = $res->fetch_assoc()){
		echo "Data " . $idx . "<br>";
		echo "----------------------------------------------" . "<br>";
		echo "ID : " . $row["ID"] . "<br>";
		echo "Nama : " . $row["Nama"] . "<br>";
		echo "Kantor : " . $row["Kantor"] . "<br><br>";
		$idx++;
	}
}

mysqli_close($con);

?>
