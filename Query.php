<?php

require 'vendor/autoload.php' ;

$client = new MongoDB\Client('mongodb+srv://Xuantruong21:Xuantruong21@cluster0.pxnqp.mongodb.net/?retryWrites=true&w=majority') ;
$companydb = $client ->SanPham ;
$empcollection = $companydb -> sanphams ;


$documentList = $empcollection->find(

);
echo "[";
foreach ($documentList as $doc) {
	echo json_encode($doc);
	echo ",";
}
echo "]";

	
?>