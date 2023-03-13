<?php
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "digital_lib";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die('Could not connect to the database.');
} else {
    $Select = "SELECT email FROM registeration WHERE email = ? LIMIT 1";
    $Insert = "INSERT INTO registeration(username, email, pass) values(?, ?, ?)";

    $stmt = $conn->prepare($Select);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($resultEmail);
    $stmt->store_result();
    $stmt->fetch();
    $rnum = $stmt->num_rows;

    if ($rnum == 0) {
        $stmt->close();

        $stmt = $conn->prepare($Insert);
        $stmt->bind_param("ssi", $username, $email, $pass);
        if ($stmt->execute()) {
            echo "New record inserted sucessfully.";
            echo '<a href="/digital%20library/html/create_profile.html">Click here</a>';
        } else {
            echo $stmt->error;
        }
    } else {
        echo "Looks like someone has already registered using this email.";
    }
    $stmt->close();
    $conn->close();
}


?>