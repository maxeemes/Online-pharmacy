<?php
session_start();
	
	$host = "localhost";
  	$login = "root";
  	$passwd = "";
  	$db = "pharmacy_db";
	

  	$conn = mysqli_connect($host, $login, $password, $db);

  	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
      exit;
  	}
	$cat = $_GET['cat'];
	echo <<<HTML
				<div id='char{$cat}'>
				<b>Наименование</b>
				<input class="form-control" type='text' maxlength=50 name='CharacteristicName{$cat}' required>
				<b>Значение</b>
				<input class="form-control" type='text' maxlength=15 name='ProductNameValue{$cat}' required>
				</div>
HTML;
	
?>