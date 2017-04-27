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
	"CREATE TABLE IF NOT EXISTS ansatt(
		ansattID INT AUTO_INCREMENT PRIMARY KEY,
		ansattnavn varchar(70),
		tlf INT(8),
		epost varchar(50),
		stilling varchar(30)
	);
	
	CREATE TABLE IF NOT EXISTS fylke (
		fylke VARCHAR(30) PRIMARY KEY
	);

	CREATE TABLE IF NOT EXISTS tomteomrade(
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
		vann tinyint(1),
		strom tinyint(1),
		vei tinyint(1),
		alpint tinyint(1),
		fiske tinyint(1),
		jakt tinyint(1),
		tur tinyint(1),
		
		CONSTRAINT FK_annsatt FOREIGN KEY (ansattID)     
		REFERENCES ansatt (ansattID)
		ON DELETE CASCADE ON UPDATE CASCADE,
		
		CONSTRAINT FK_fylke FOREIGN KEY (fylke)     
		REFERENCES fylke (fylke)
		ON DELETE CASCADE ON UPDATE CASCADE
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
		ON DELETE CASCADE ON UPDATE CASCADE
	);
	
	CREATE TABLE IF NOT EXISTS bildetype (
		bildetype VARCHAR(30) PRIMARY KEY
	);
	
  	CREATE TABLE IF NOT EXISTS bilder (
  		bildeID INT AUTO_INCREMENT PRIMARY KEY,
  		omradeID INT(3), 
  		fil VARCHAR(2000),
  		bildetype VARCHAR(20),
  		
  		CONSTRAINT FK_omradeID FOREIGN KEY (omradeID)     
		REFERENCES tomteomrade (omradeID)
		ON DELETE CASCADE ON UPDATE CASCADE,
		
		CONSTRAINT FK_bildetype FOREIGN KEY (bildetype)     
		REFERENCES bildetype (bildetype)
		ON DELETE CASCADE ON UPDATE CASCADE
  	); 
	"
;
if ($db->exec($query)===false){
	die('Can not create tables:' . $db->errorInfo()[2]);
}

// DUMMY DATA
$query = "
	INSERT INTO ansatt (
		ansattnavn,
		tlf,
		epost,
		stilling
	)
	VALUES (
		'Henrik Snilsberg',
		94736274,
		'henrik@tinde.no',
		'Selger'
	);
	
	INSERT INTO ansatt (
		ansattnavn,
		tlf,
		epost,
		stilling
	)
	VALUES (
		'Aslak Ihle',
		94736274,
		'aslak@tinde.no',
		'Selger'
	);
	
	INSERT INTO ansatt (
		ansattnavn,
		tlf,
		epost,
		stilling
	)
	VALUES (
		'Gunhild Ihle',
		94736274,
		'gunnhild@tinde.no',
		'Selger'
	);
	
	
	INSERT INTO fylke
	VALUE ('Rogaland');

	INSERT INTO fylke
	VALUE ('Jotunheimen');
	
	INSERT INTO fylke
	VALUE ('Gulbrandslia');
	
	INSERT INTO fylke
	VALUE ('Storehorn');
	
	INSERT INTO tomteomrade (omradenavn,fylke,oneliner,longtekst,regulering,reguleringskart,skrivut,maplong,maplat,mapzoom,ansattID,vann,strom,vei,alpint,fiske,jakt,tur)
		VALUES ('Aslakbukta', 'Rogaland', 'Det er her det skjer', 'Longtekst', 'Regulering', 'reguleringsKART', 'SKRIV UT?!?!', '10', '102.4', '15', '1', 
		1, 1, 1, 1, 0, 0, 1);
		
	INSERT INTO tomteomrade (omradenavn,fylke,oneliner,longtekst,regulering,reguleringskart,skrivut,maplong,maplat,mapzoom,ansattID,vann,strom,vei,alpint,fiske,jakt,tur)
		VALUES ('Gunnhilda', 'Jotunheimen', 'Det er her det skjer', 'Longtekst', 'Regulering', 'reguleringsKART', 'SKRIV UT?!?!', '10', '102.4', '15', '1', 0, 0, 1, 1, 1, 1, 1);
	
	INSERT INTO tomteomrade (omradenavn,fylke,oneliner,longtekst,regulering,reguleringskart,skrivut,maplong,maplat,mapzoom,ansattID,vann,strom,vei,alpint,fiske,jakt,tur)
		VALUES ('Snilsefjell', 'Jotunheimen', 'Åløøøsåfett', 'Longtekst', 'Regulering', 'reguleringsKART', 'SKRIV UT?!?!', '10', '102.4', '15', '1', 1, 1, 0, 1, 0, 1, 1);
		
	INSERT INTO tomteomrade (omradenavn,fylke,oneliner,longtekst,regulering,reguleringskart,skrivut,maplong,maplat,mapzoom,ansattID,vann,strom,vei,alpint,fiske,jakt,tur)
		VALUES ('Brunnvika', 'Rogaland', 'Brunnvika er best!', 'Longtekst', 'Regulering', 'reguleringsKART', 'SKRIV UT?!?!', '10', '102.4', '15', '1', 1, 1, 0, 0, 0, 1, 1);
		
	INSERT INTO tomteomrade (omradenavn,fylke,oneliner,longtekst,regulering,reguleringskart,skrivut,maplong,maplat,mapzoom,ansattID,vann,strom,vei,alpint,fiske,jakt,tur)
		VALUES ('Galhøspissland', 'Jotunheimen', 'Rett ved norges høyeste!', 'Longtekst', 'Regulering', 'reguleringsKART', 'SKRIV UT?!?!', '10', '102.4', '15', '1', 1, 1, 0, 0, 0, 1, 1);
	
	INSERT INTO tomteomrade (omradenavn,fylke,oneliner,longtekst,regulering,reguleringskart,skrivut,maplong,maplat,mapzoom,ansattID,vann,strom,vei,alpint,fiske,jakt,tur)
		VALUES ('Solberget', 'Gulbrandslia', 'Sol hele dagen!', 'Longtekst', 'Regulering', 'reguleringsKART', 'SKRIV UT?!?!', '10', '102.4', '15', '1', 1, 1, 0, 0, 0, 1, 1);
		
	INSERT INTO tomteomrade (omradenavn,fylke,oneliner,longtekst,regulering,reguleringskart,skrivut,maplong,maplat,mapzoom,ansattID,vann,strom,vei,alpint,fiske,jakt,tur)
		VALUES ('Nidavik', 'Storehorn', 'Heisanhoppsan!', 'Longtekst', 'Regulering', 'reguleringsKART', 'SKRIV UT?!?!', '10', '102.4', '15', '1', 1, 1, 0, 0, 0, 1, 1);	
		
	INSERT INTO tomteomrade (omradenavn,fylke,oneliner,longtekst,regulering,reguleringskart,skrivut,maplong,maplat,mapzoom,ansattID,vann,strom,vei,alpint,fiske,jakt,tur)
		VALUES ('The place', 'Storehorn', 'rett og slett, stedet!', 'Longtekst', 'Regulering', 'reguleringsKART', 'SKRIV UT?!?!', '10', '102.4', '15', '1', 1, 1, 0, 0, 0, 1, 1);	
		
	INSERT INTO tomteomrade (omradenavn,fylke,oneliner,longtekst,regulering,reguleringskart,skrivut,maplong,maplat,mapzoom,ansattID,vann,strom,vei,alpint,fiske,jakt,tur)
		VALUES ('Midnattsvika', 'Storehorn', 'Rett ved vannet!', 'Longtekst', 'Regulering', 'reguleringsKART', 'SKRIV UT?!?!', '10', '102.4', '15', '1', 0, 0, 0, 1, 1, 1, 1);		
		
	INSERT INTO tomt (pris,areal,info,punkta,punktb,punktc,punktd,tomteomradeID)	
		VALUES (1000000, 60, 'INFOOOOOOOO123', 1, 2, 3, 4, 1);
		
	INSERT INTO bildetype
	VALUE ('Header');
	
	INSERT INTO bildetype
	VALUE ('Slider');
	
	INSERT INTO bilder (omradeID, fil, bildetype)
		VALUES (1, 'bilder', 'Header');
		
	
	
";
if ($db->exec($query)===false){
	die('Can not insert into: ' . $db->errorInfo()[2]);
}


?>