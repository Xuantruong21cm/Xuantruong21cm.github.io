<?php
require 'vendor/autoload.php' ;
$client = new MongoDB\Client(
	'mongodb+srv://Xuantruong21:Xuantruong21@cluster0.pxnqp.mongodb.net/?retryWrites=true&w=majority');
$noteServer = $client -> ColorNote ; //select database
$empcollection = $noteServer -> User ; //select table database

$account = $_POST['account'] ;
$password = $_POST['password'] ;
$username = $_POST['username'] ;
$avatar = $_POST['avatar'] ;


$insertManyResult = $empcollection -> insertMany([
	['_id' => rand(1,1000),'account' => $account, 'password' => $password, 'username' => $username,'avatar' => $avatar]
]);

echo json_encode("Inserted %d document",$insertManyResult->getInsertedCount()) ;
var_dump($insertManyResult->getInsertedIds());

?>