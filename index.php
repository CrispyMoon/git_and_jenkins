
<?php

$con = mysqli_connect("172.19.0.2","root","trucorp","Trucorp");

if($con->connect_error){
        die("Koneksi gagal: " .$con->connect_error);
}

$tbl = "SELECT * FROM users";
$res = $con->query($tbl);

$counts = mysqli_num_rows($$res);

echo "Pada database Trucorp, terdapat " . $counts . " user(s)";

mysqli_close($con);

?>
