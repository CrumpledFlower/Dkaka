<?php 
			$dbhost ='localhost';
            $dbuser="admin";
            $dbpassword="pass";
            $db='peresdacha';
            $connect = mysqli_connect($dbhost,$dbuser,$dbpassword,$db);
            if(!$connect == false) 
            {
	           echo "Ошибка";
            }
?>