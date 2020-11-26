<?php
$user = "root";
$pw = "";
try
{
	 $pdo_conn = new PDO('mysql:host=localhost;dbname=book_store',$user,$pw);
}
catch(PDOException $e) 
{
	echo "not connection".$e->getMessage();
	die();
}
?>