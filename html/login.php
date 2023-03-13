<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['email']) && isset($_POST['email']) &&
        isset($_POST['pass']) && isset($_POST['pass'])) 
        
        $email = $_POST['email'];
        $pass = $_POST['pass'];
$con = new mysqli("localhost","root","","digital_lib");
if($con->connect_error){
    die("Failed to connect : ".con->connect_error);
}
else{
    $stmt =  $con->prepare("select * from registeration where email = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows>0){
        $data = $stmt_result->fetch_assoc();
        if($data['pass'] == $pass){
            echo "Welecome Back....Click here to go to Profile Page";
            echo '<a href="http://localhost/digital%20library/html/profile.html">Click here</a>';
        }else{
            echo "Invalid Email or password";
        }

    }
    else{
        echo "Invalid Email or password";
    }
}
}
?>