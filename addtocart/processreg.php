<?php
include "connect.php";

$fname = $_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$email = $_REQUEST["email"];
$pass = $_REQUEST["pass"];

$qr = "select count(*) from registrations where email='$email'";
$res = mysqli_query($cn, $qr);
$row = mysqli_fetch_array($res);

if ($row[0]) {
    echo "User is Already Registered, Please login";
    setcookie("oldUser", $email);

} else {
    $qr = "insert into registrations values (null,'$fname','$lname','$email','$pass')";
    mysqli_query($cn, $qr);
    echo "User Registration Successfull";
}
?>