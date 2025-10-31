<?php
$servername = "127.0.0.1";
$username = "coffee";
$password = "coffee123";
$dbname = "my";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully :)";
// data recevie ke liye
$user = $_POST['username'];
$pass = $_POST['password'];
$phone= $_post['phone'};
$email= $_post['email'];
$address= $_post['address'];

// data base ke liye
sql = "insert into customers( username,email, pass_hash,address'phone)
   values('$user','$email','$pass_hash','$address','$phone')";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Login successful!";
} else 
    echo "Invalid !";
}


?>
