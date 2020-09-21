<?php
require 'vendor/autoload.php' ;
$client = new MongoDB\Client(
	'mongodb+srv://Xuantruong21:Xuantruong21@cluster0.pxnqp.mongodb.net/?retryWrites=true&w=majority');
$noteServer = $client -> ColorNote ; //select database
$empcollection = $noteServer -> User ; //select table database

$account = $_POST['account'] ;
$password = $_POST['password'] ;


$documentList = $empcollection->find(
	['account' => $account,'password' => $password]
);
echo "[";
foreach ($documentList as $doc) {
	echo json_encode($doc);
	echo ",";
}
echo "]";
?>