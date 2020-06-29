<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=e-tourism','root','');
	//echo "Connection is established...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pack=$_GET['pack'];
	$query=$dbhandler->query('delete from package_list where title="'.$pack.'"');
	echo '<script>alert("Package Deleted Successfully!!!");window.location.href="http://localhost/E-Tourism/adminview.php";</script>';
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}

?>