<?php  
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$age = $_REQUEST['age'];
$mobile = $_REQUEST['mobile'];
$date = $_REQUEST['date'];
$pic = $_REQUEST['pic'];
$address = $_REQUEST['address'];

require 'vendor/autoload.php';  
// Creating Connection  
$serverApi = new \MongoDB\Driver\ServerApi(\MongoDB\Driver\ServerApi::V1);
$client = new \MongoDB\Client(
    'mongodb+srv://vibhabm2002:vibshree123@cluster0.8lcsjkv.mongodb.net/test', [], ['serverApi' => $serverApi]);

// Creating Document  
$collection = $client->test1->employee;  
// Insering Record  
$insertOneResult = $collection->insertOne([
    'firstname' => $firstname,
    'lastname' => $lastname,
    'age' => $age,
    'mobile' => $mobile,
    'date' => $date,
    'pic' => $pic,
    'address' => $address

]);
?>

