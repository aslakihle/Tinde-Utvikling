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
		status int(1),
		punkta1 varchar(50),
		punkta2 varchar(50),
		punktb1 varchar(50),
		punktb2 varchar(50),
		punktc1 varchar(50),
		punktc2 varchar(50),
		punktd1 varchar(50),
		punktd2 varchar(50),
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
		'Gunhild Vike Nerås',
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
		VALUES ('Gunnhilda', 'Jotunheimen', 'Det er her det skjer', 'Longtekst', 'Regulering', 'reguleringsKART', 'SKRIV UT?!?!', '10', '102.4', '15', '2', 0, 0, 1, 1, 1, 1, 1);
	
	INSERT INTO tomteomrade (omradenavn,fylke,oneliner,longtekst,regulering,reguleringskart,skrivut,maplong,maplat,mapzoom,ansattID,vann,strom,vei,alpint,fiske,jakt,tur)
		VALUES ('Snilsefjell', 'Jotunheimen', 'Åløøøsåfett', 'Longtekst', 'Regulering', 'reguleringsKART', 'SKRIV UT?!?!', '10', '102.4', '15', '1', 1, 1, 0, 1, 0, 1, 1);
		
	INSERT INTO tomteomrade (omradenavn,fylke,oneliner,longtekst,regulering,reguleringskart,skrivut,maplong,maplat,mapzoom,ansattID,vann,strom,vei,alpint,fiske,jakt,tur)
		VALUES ('Brunnvika', 'Rogaland', 'Brunnvika er best!', 'Longtekst', 'Regulering', 'reguleringsKART', 'SKRIV UT?!?!', '10', '102.4', '15', '3', 1, 1, 0, 0, 0, 1, 1);
		
	INSERT INTO tomteomrade (omradenavn,fylke,oneliner,longtekst,regulering,reguleringskart,skrivut,maplong,maplat,mapzoom,ansattID,vann,strom,vei,alpint,fiske,jakt,tur)
		VALUES ('Galhøspissland', 'Jotunheimen', 'Rett ved norges høyeste!', 'Longtekst', 'Regulering', 'reguleringsKART', 'SKRIV UT?!?!', '10', '102.4', '15', '2', 1, 1, 0, 0, 0, 1, 1);
	
	INSERT INTO tomteomrade (omradenavn,fylke,oneliner,longtekst,regulering,reguleringskart,skrivut,maplong,maplat,mapzoom,ansattID,vann,strom,vei,alpint,fiske,jakt,tur)
		VALUES ('Solberget', 'Gulbrandslia', 'Sol hele dagen!', 'Longtekst', 'Regulering', 'reguleringsKART', 'SKRIV UT?!?!', '10', '102.4', '15', '1', 1, 1, 0, 0, 0, 1, 1);
		
	INSERT INTO tomteomrade (omradenavn,fylke,oneliner,longtekst,regulering,reguleringskart,skrivut,maplong,maplat,mapzoom,ansattID,vann,strom,vei,alpint,fiske,jakt,tur)

		VALUES ('Hjerkinnhø', 'Storehorn', 'Storslagen utsikt på snaufjellet!', 'Hjerkinnhø ligger i et område med historiske røtter. På hjerkinn lå en gammel skysstasjon(nå Hjerkinn fjellstue) med tradisjoner tilbake til midt på 1200-tallet. Pilegrimsleden og dne gamle kongeveien til Trondheim går like forbi hytteområdene og videre innover Dovrefjell. Her har du inngangen til snøhetta, villreinen og moskusens rike. Hjerkinn-Dovrefjell er hundesportens Mekka med treningsfelt og jaktprøver for fuglehunder. Viewpoint Snøhetta er et attraktivt besøkspunkt og i nærområdet finner du mange natur- og aktivitetsmuligheter', 'Regulering', 'reguleringsKART', 'SKRIV UT?!?!', '9.681470', '62.251263', '16', '1', 1, 1, 0, 0, 0, 1, 1);	
		
	INSERT INTO tomteomrade (omradenavn,fylke,oneliner,longtekst,regulering,reguleringskart,skrivut,maplong,maplat,mapzoom,ansattID,vann,strom,vei,alpint,fiske,jakt,tur)
		VALUES ('The place', 'Storehorn', 'rett og slett, stedet!', 'Longtekst', 'Regulering', 'reguleringsKART', 'SKRIV UT?!?!', '10', '102.4', '15', '2', 1, 1, 0, 0, 0, 1, 1);	
		
	INSERT INTO tomteomrade (omradenavn,fylke,oneliner,longtekst,regulering,reguleringskart,skrivut,maplong,maplat,mapzoom,ansattID,vann,strom,vei,alpint,fiske,jakt,tur)
		VALUES ('Midnattsvika', 'Storehorn', 'Rett ved vannet!', 'Longtekst', 'Regulering', 'reguleringsKART', 'SKRIV UT?!?!', '10', '102.4', '15', '2', 0, 0, 0, 1, 1, 1, 1);		

		
		
		
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',0,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',0,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',1,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',1,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',0,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',0,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',0,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',0,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',0,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',0,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',1,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',1,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',0,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',0,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',0,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',1,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',0,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',1,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (700000, 1200, 'Denne tomten kan ikke bygges på før juli 2017.',0,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	INSERT INTO tomt (pris,areal,info,status,punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2,tomteomradeID)	
		VALUES (8500000, 1400, 'Denne tomten kan ikke bygges på før juli 2017.',0,62.251333,9.676380,62.250644,9.676294,62.250614,9.677668,62.251203,9.677517, 1);
	
	 
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