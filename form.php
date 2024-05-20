<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="lahcennl1";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("hhhhhRCA5_WAC1". $conn->connect_error);
} else {
    echo "sf rca rb7te widad b5";
}
//code dyal tableau li ankhedmo bin

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email  = $_POST["email"];
    $phonenumber  = $_POST["phonenumber"];

    $sql = "INSERT INTO rca (name, email, phonenumber)
            VALUES ('$name', '$email', '$phonenumber')";
            if ($conn ->query($sql) === TRUE) {
                 echo "safi, sifeti lma3loumat mzyan a " . $name;
} else {
   echo "hadchi makhedamch a sahbi" . $conn->error;
}
}
