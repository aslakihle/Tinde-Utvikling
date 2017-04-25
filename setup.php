<?php
try{
	$db = new PDO ("mysql: host='localhost';charset=utf8",'root', '');
} catch(PDOException $e){
	die ("Error(Could not connect): ".$e->getMessage());
};

$query = 'DROP DATABASE IF EXISTS webprosjekt2_db';
if ($db->exec($query)===false){
	die('Query failed(1):' . $db->errorInfo()[2]);
};

$query = 'CREATE DATABASE IF NOT EXISTS webprosjekt2_db';
if ($db->exec($query)===false){
	die('Query failed(1):' . $db->errorInfo()[2]);
};

// Select the database
$query = 'USE webprosjekt2_db';
if ($db->exec($query)===false){
	die('Can not select database:' . $db->errorInfo()[2]);
}

//CREATES USERS TABLE AND NEWS TABLE
$query = 
	"CREATE TABLE IF NOT EXISTS tomteomrade(
		omradeID INT AUTO_INCREMENT PRIMARY KEY,
		omradenavn varchar(30),
		fylke varchar(30),
		oneliner varchar(30),
		longtekst varchar(2000),
		regulering varchar(30),
		reguleringskart varchar(30),
		skrivut varchar(30),
		maplong varchar(50),
		maplat varchar(50),
		mapzoom varchar(3),
		ansattID INT(3),
		
		CONSTRAINT FK_ansatt FOREIGN KEY (ansattID)     
		REFERENCES ansatt (ansattID)
		OB DELETE CASCADE ON UPDATE CASCADE)
	);
	
	CREATE TABLE IF NOT EXISTS tomt(
		tomtID INT AUTO_INCREMENT PRIMARY KEY,
		pris INT(10),
		areal INT(3),
		info varchar(250),
		punkta varchar(50),
		punktb varchar(50),
		punktc varchar(50),
		punktd varchar(50),
		tomteomradeID INT(3),

		CONSTRAINT FK_tomteomrade FOREIGN KEY (tomteomradeID)     
		REFERENCES tomteomrade (omradeID)
		OB DELETE CASCADE ON UPDATE CASCADE)
	);
	
	CREATE TABLE IF NOT EXISTS ansatt(
		ansattID INT AUTO_INCREMENT PRIMARY KEY,
		ansattnavn varchar(70),
		tlf INT(8),
		epost varchar(50),
		stilling varchar(30)
	);
	
	CREATE TABLE IF NOT EXISTS bilder(
		omradeID INT(3),
		fil varchar(5000),
		type varchar(30),
		PRIMARYKEY (omradeID, fil)
	);"
;
if ($db->exec($query)===false){
	die('Can not create tables:' . $db->errorInfo()[2]);
}
?>