<?php
require_once '../../connect.php';
?>
<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="utf-8">
  <title>Tinde Utvikling - TomteOmraade</title>
  <!--Jquery and UI-->
  <script src="../../jquery-ui/external/jquery/jquery.js"></script>
  <link rel="stylesheet" href="../../jquery-ui/jquery-ui.min.css">
  <link rel="stylesheet" href="../../jquery-ui/jquery-ui.structure.min.css">
  <link rel="stylesheet" href="../../jquery-ui/jquery-ui.theme.min.css">
  <script src="../../jquery-ui/jquery-ui.min.js"></script>
  <!--Slick Carousell-->
  <link rel="stylesheet" type="text/css" href="../../tools/slick/slick.css">
  <!--Add the new slick-theme.css if you want the default styling-->
  <link rel="stylesheet" type="text/css" href="../../tools/slick/slick-theme.css">
  <!--Our Css-->
  <link rel="stylesheet" href="../../css/etTomteOmrade.css?<?php echo time(); ?>">
</head>
<body>
  <div class="menu">
    <ul>
      <li id="menuLogo"><a href="../../index.php">
<!-- får annoying error på xml tingen under her :( -->
<?/* xml version="1.0" encoding="utf-8"*/?>
<!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 225.5 95.4" style="enable-background:new 0 0 225.5 95.4;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#FFFFFF;}
	.st1{fill:#004B76;}
	.st2{fill:#35BDB2;}
	.st3{fill:#00AFE1;}
	.st4{fill:#0095CF;}
	.st5{fill:#00B0E1;}
	.st6{fill:#00AEEB;}
	.st7{fill:#BB4C4A;}
	.st8{fill:#C66154;}
	.st9{fill:#CA6656;}
	.st10{fill:#E1433A;}
</style>
<polygon class="st0" points="33,50.6 19.1,50.6 2.6,65 2.6,92.4 222.2,92.4 222.2,65 205.6,50.6 192,50.6 147,11.2 136.1,20.7 
	122.3,8.5 107.8,21.2 87.1,3.2 "/>
<path d="M205.6,50.6l-0.1,0.2L205.6,50.6z M2.7,65.1l16.5-14.3h13.9l54-47.3l20.6,18l14.5-12.7l13.9,12.1l10.8-9.5l45,39.4h13.6
	L222,65.2v27.1H2.7V65.1z M87.1,2.9L33,50.4H19L2.4,64.9v27.6h220V64.9l-16.6-14.6h-0.1h-13.6L147,10.8l-10.8,9.5L122.3,8.2
	l-14.5,12.7L87.1,2.9z"/>
<polygon class="st1" points="202.8,57.9 189.2,57.9 147,20.9 136.1,30.4 122.3,18.2 107.8,31 87.1,13 35.8,57.9 21.9,57.9 9.9,68.4 
	9.9,85 214.8,85 214.8,68.4 "/>
<polygon class="st2" points="121.6,52.9 127.4,57.9 178.1,57.9 147,30.6 "/>
<path class="st3" d="M121.6,52.9l5.1-4.5L121.6,52.9z"/>
<polygon class="st4" points="156.4,57.9 127.4,57.9 121.6,52.9 121.6,52.9 127.4,57.9 "/>
<polygon class="st5" points="156.4,57.9 127.4,57.9 121.6,52.9 126.3,48.7 126.7,48.4 136.1,40.2 "/>
<polygon class="st4" points="121.6,52.9 107.8,40.7 122.3,28 136.1,40.2 "/>
<polygon class="st5" points="121.6,52.9 121.6,52.9 136.1,40.2 126.3,48.7 "/>
<polygon class="st6" points="121.6,52.9 121.6,52.9 126.3,48.7 "/>
<polygon class="st6" points="121.6,52.9 121.6,52.9 126.3,48.7 "/>
<polygon class="st7" points="127.4,57.9 47,57.9 87.1,22.6 107.8,40.7 88.1,57.9 107.8,40.7 88.1,57.9 115.9,57.9 "/>
<polygon class="st8" points="127.4,57.9 115.9,57.9 121.6,52.9 "/>
<polygon class="st8" points="115.9,57.9 88.1,57.9 107.8,40.7 121.6,52.9 "/>
<polygon class="st9" points="115.9,57.9 115.9,57.9 121.6,52.9 "/>
<path class="st10" d="M88.1,57.9l19.6-17.2L88.1,57.9z"/>
<g>
	<polygon class="st0" points="19.3,70 24.8,70 24.8,77.1 27.1,77.1 27.1,70 32.4,70 32.4,67.8 19.3,67.8 	"/>
	<rect x="33.5" y="67.8" class="st0" width="2.3" height="9.3"/>
	<path class="st0" d="M47.9,75L47.9,75c-0.3,0-0.6-0.1-0.8-0.2c-0.2-0.2-0.4-0.3-0.6-0.5L42,69.1c-0.4-0.4-0.8-0.7-1.2-1
		c-0.4-0.2-1-0.3-1.5-0.3H37v9.3h2.2v-7h0.1c0.2,0,0.5,0.1,0.7,0.2c0.2,0.2,0.4,0.3,0.6,0.5l4.4,5.1c0.4,0.5,0.8,0.8,1.2,1
		s1,0.3,1.6,0.3h2.4v-9.4H48L47.9,75L47.9,75z"/>
	<path class="st0" d="M62.2,67.8H51.4v9.3h10.8c2.4,0,3.5-1,3.5-2.9v-3.4C65.7,68.8,64.6,67.8,62.2,67.8z M63.4,74.1
		c0,0.5-0.4,0.8-1.2,0.8h-8.6v-5h8.6c0.8,0,1.2,0.2,1.2,0.8C63.4,70.7,63.4,74.1,63.4,74.1z"/>
	<path class="st0" d="M69.1,74.5v-1h10.7v-2.1H69.1v-1c0-0.3,0.2-0.5,0.5-0.5h10.2v-2.1H69.6c-1.9,0-2.8,0.7-2.8,2.3v4.7
		c0,1.5,0.9,2.3,2.8,2.3h10.3V75H69.6C69.3,75,69.1,74.8,69.1,74.5z"/>
	<path class="st0" d="M99.7,74.9c0,0.2-0.1,0.7-1,0.7h-9c-0.9,0-1-0.6-1-0.7v-7.1h-1.8v7.4c0,0.9,0.2,2.1,2.7,2.1h9
		c2.4,0,2.7-1.2,2.7-2.1v-7.4h-1.8L99.7,74.9L99.7,74.9z"/>
	<polygon class="st0" points="103.5,69.3 109.5,69.3 109.5,77.2 111.3,77.2 111.3,69.3 117.1,69.3 117.1,67.7 103.5,67.7 	"/>
	<path class="st0" d="M127.6,75c-0.1,0.2-0.2,0.4-0.4,0.5c-0.2,0.1-0.3,0.2-0.6,0.2h-0.7c-0.3,0-0.7-0.1-1-0.7l-4.1-7.2h-2l5.1,8.8
		c0.1,0.2,0.2,0.2,0.2,0.3c0.1,0.1,0.1,0.2,0.2,0.2c0.1,0.1,0.2,0.1,0.2,0.1c0.2,0,0.3,0.1,0.5,0.1h2.4c0.6,0,1-0.2,1.2-0.7l5.1-8.9
		h-2L127.6,75z"/>
	<rect x="135.4" y="67.7" class="st0" width="1.8" height="9.5"/>
	<polygon class="st0" points="152.2,67.7 149.9,67.7 146.1,71.5 140.9,71.5 140.9,67.7 139.2,67.7 139.2,77.2 140.9,77.2 
		140.9,73.1 146.3,73.1 150.3,77.2 152.7,77.2 147.6,72.1 	"/>
	<path class="st0" d="M156.4,74.7v-7h-1.8v7.4c0,0.9,0.2,2.1,2.7,2.1h10.8v-1.6h-10.8C156.6,75.6,156.4,75.1,156.4,74.7z"/>
	<rect x="169.9" y="67.7" class="st0" width="1.8" height="9.5"/>
	<path class="st0" d="M185.9,75.6h-0.5c-0.3,0-0.7-0.1-1-0.2c-0.3-0.2-0.6-0.4-0.7-0.7l-5-5.7c-0.4-0.4-0.8-0.7-1.2-1
		c-0.4-0.2-1-0.3-1.5-0.3h-2.2v9.5h1.7v-7.9h0.5c0.3,0,0.7,0.1,1,0.2s0.6,0.4,0.7,0.7l4.9,5.6c0.4,0.5,0.8,0.8,1.2,1s1,0.3,1.6,0.3
		h2.2v-9.5h-1.7V75.6z"/>
	<path class="st0" d="M202.2,71.7v3c0,0.4-0.2,0.9-1,0.9h-8.9c-0.6,0-1-0.3-1-0.9v-4.5c0-0.4,0.2-0.9,1-0.9h11.3v-1.6h-11.3
		c-2.4,0-2.8,1.2-2.8,2.1V75c0,0.9,0.2,2.1,2.7,2.1h8.9c2.4,0,2.7-1.2,2.7-2.1v-3.4L202.2,71.7L202.2,71.7z"/>
</g>
</svg>
</a></li>
      <li><a class="menu1" href="../../index.php">Hjem</a></li>
      <li><a class="menu2" href="../../tomteomrade.php">Tomteområder</a></li>
      <li><a class="menu3" href="../../kontakt.php">Kontakt</a></li>
    </ul>
  </div>
  <div class="header"></div>
  <!--meny funker ikke uten denne, har bare padding-top 20px, men må ha det for å funke-->
  <div class="main">
    <div class="content">
        <a href="javascript:history.back()">
            <div class="backArrow">&#x2190; Tilbake</div>
        </a>
        <?php
		$currOmrade = $_GET['omrade'];
		echo 'Current områdeID is: '.$currOmrade. '<br>';

		if(isset($_GET['tomt']))
		{
			$currTomt = $_GET['tomt'];
			echo 'Current tomtID is: '.$currTomt. '<br>';
		}

        $currTomt = 1;
        ?>
        <!--
        <button value="1" onclick="hue(1)">1</button>
        <button value="2" onclick="hue(2)">2</button>
        <button value="3" onclick="hue(3)">3</button>
        <button value="4" onclick="hue(4)">4</button>


        <script>
            function hue(id){
            	var currTomt = id;
            	var url = "?id=" . id;
                window.history.pushState(url, NULL, url);
            }
        </script>
-->
        <!--
        <script type="text/javascript">
			function ChangeUrl(url) {
				if (typeof (history.pushState) != "undefined") {
					var obj = {Url: url };
					history.pushState(obj, null, obj.Url);
				} else {
					alert("Browser does not support HTML5.");
				}
			}
        </script>
        -->
        <?php
        function editUrl($a) {
            echo'
            <script type="text/javascript">
                if (typeof (history.pushState) != "undefined") {
                    var obj = {Url: ' . $a . '};
                    history.pushState(obj, null, obj.Url);
                } else {
                    alert("Browser does not support HTML5.");
                }
        </script>
            ';
        }
        ?>


        <input type="button" value="ID1" onclick="ChangeUrl('?omrade=<?php echo $currOmrade;?>&tomt=1');" />
        <input type="button" value="ID2" onclick="ChangeUrl('?omrade=<?php echo $currOmrade;?>&tomt=2');" />
        <input type="button" value="ID3" onclick="ChangeUrl('?omrade=<?php echo $currOmrade;?>&tomt=3');" />



<!--
        <script>
				function myMap() {
					var mapProp= {
						center:new google.maps.LatLng(62.251263, 9.681470),
						zoom: 16,
						mapTypeId: 'terrain'
					};
					var map=new google.maps.Map(document.getElementById("map"),mapProp);
					
					
					
					function addPlot(a1, a2, b1, b2, c1, c2, d1, d2) {
						var myCoordinates = [
							new google.maps.LatLng(a1, a2),
							new google.maps.LatLng(b1, b2),
							new google.maps.LatLng(c1, c2),
							new google.maps.LatLng(d1, d2)
						];
						var polyOptions = {
							path: myCoordinates,
							strokeColor: "#FF0000",
							strokeOpacity: 0.8,
							strokeWeight: 2,
							fillColor: "#0000FF",
							fillOpacity: 0.6
						};
						var it = new google.maps.Polygon(polyOptions);
						it.setMap(map);
					}



                }
					
	-->
					


		<?php

		$mStmt = $db->prepare("
			SELECT punkta1,punkta2,punktb1,punktb2,punktc1,punktc2,punktd1,punktd2 
			FROM tomt 
			WHERE tomteomradeID = :current
			");
		$mStmt->bindParam(':current', $currOmrade );
		$mStmt->execute();
		$plotMapArr = array();

		while ($row = $mStmt->fetch(PDO::FETCH_ASSOC)) {
		    $plotMapArr[] = $row;
        }
?>
		<script>
				function myMap() {
					var mapProp= {
						center:new google.maps.LatLng(62.251263, 9.681470),
						zoom: 16,
						mapTypeId: "terrain"
					};
					var map=new google.maps.Map(document.getElementById("map"),mapProp);
					
					
					/*
					function addPlot(a1, a2, b1, b2, c1, c2, d1, d2) {
						var myCoordinates = [
							new google.maps.LatLng(a1, a2),
							new google.maps.LatLng(b1, b2),
							new google.maps.LatLng(c1, c2),
							new google.maps.LatLng(d1, d2)
						];
						var polyOptions = {
							path: myCoordinates,
							strokeColor: "#FF0000",
							strokeOpacity: 0.8,
							strokeWeight: 2,
							fillColor: "#0000FF",
							fillOpacity: 0.6
						};
						var it = new google.maps.Polygon(polyOptions);
						it.setMap(map);
					}
                    */


                }
		</script>


<?php


            echo'<script>
                function addPlot(a1, a2, b1, b2, c1, c2, d1, d2) {
                    var myCoordinates = [
                        new google.maps.LatLng(a1, a2),
                        new google.maps.LatLng(b1, b2),
                        new google.maps.LatLng(c1, c2),
                        new google.maps.LatLng(d1, d2)
                    ];
                    var polyOptions = {
                        path: myCoordinates,
                        strokeColor: "#FF0000",
                        strokeOpacity: 0.8,
                        strokeWeight: 2,
                        fillColor: "#0000FF",
                        fillOpacity: 0.6
                    };
                    var it = new google.maps.Polygon(polyOptions);
                    it.setMap(map);
                }';
		    foreach ($plotMapArr as $row){
				echo 'addPlot('.$row['punkta1'].','. $row['punkta2'].','. $row['punktb1'].','.$row['punktb2'].','. $row['punktc1'].','. $row['punktc2'].','. $row['punktd1'].','. $row['punktd2'] .');';

				/*
				echo'
				var myCoordinates = [
					new google.maps.LatLng('.$row['punkta1'].', '.$row['punkta2'].'),
					new google.maps.LatLng('.$row['punktb1'].', '.$row['punktb2'].'),
					new google.maps.LatLng('.$row['punktc1'].', '.$row['punktc2'].'),
					new google.maps.LatLng('.$row['punktd1'].', '.$row['punktd2'].')
				];
				var polyOptions = {
					path: myCoordinates,
							strokeColor: "#FF0000",
							strokeOpacity: 0.8,
							strokeWeight: 2,
							fillColor: "#0000FF",
							fillOpacity: 0.6
						};
						var it = new google.maps.Polygon(polyOptions);
						it.setMap(map);
				
				
				';
*/


		    }
echo'</script>';
?>



        <?php
		$oStmt = $db->prepare("
					SELECT omradenavn, fylke, oneliner, longtekst
					FROM tomteomrade
					WHERE omradeID = :current
					");
		$oStmt->bindParam(':current', $currOmrade );
		$oStmt->execute();
        //Echo bilde path for now, fikser bilder i database senere
		echo'<div class="headImgWrap"><img src="../../images/omrade1/main.jpg" alt="Bilde av X"></div>';
		while($oRow = $oStmt->fetch(PDO::FETCH_ASSOC)) {
			echo '
        <div class="headImgTitleWrap">
        <div class="headImgPlace">'.$oRow['fylke'].'</div>
        <div class="headImgTitle">'.$oRow['omradenavn'].'</div>
        <div class="headTextQuote">"'.$oRow['oneliner'].'"</div>
        <div class="headText">'.$oRow['longtekst'].'</div>
        </div>
        ';
        }
		?>


<!-- Tar å prioriterer resten av funksjonalitet først, også fikser vi bilder i database siden når vi har bestemt oss for lagrings metode -->
        <div class="sliderWrap">
        <div class="prev">
        <div class="verticalCenter"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
        <path d="M0-.5h24v24H0z" fill="none"/>
        </svg>
        </div>
        </div>
        <div class="next">
        <div class="verticalCenter"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
        <path d="M0-.25h24v24H0z" fill="none"/>
        </svg>
        </div>
        </div>
        <!--BILDER HER MÅ HA AVLANGT UTSEENDE-->
        <section class="regular slider">
        <div class="slide"><img src="../../images/hytte1.jpg"></div>
        <div class="slide"><img src="../../images/hytte3.jpg"></div>
        <div class="slide"><img src="../../images/hytte4.jpg"></div>
        <div class="slide"><img src="../../images/hytte5.jpg"></div>
        </section>
        </div>



        <div class="tomtMapTitle">Tomter</div>
        <div class="tomtMapInfo1">
        <div class="ledigColor"></div>
        <div class="ledigText">Ledig tomt</div>
        <div class="solgtColor"></div>
        <div class="solgtText">Solgt tomt</div>
        </div>
        <div class="tomtMapInfo2">Klikk på tomt for mer info</div>
        <?php
        $tStmt = $db->prepare("
        SELECT tomtID, pris, areal, info, status
        FROM tomt 
        WHERE tomteomradeID = :current
        ");
        $tStmt->bindParam(':current', $currOmrade );
        $tStmt->execute();
        $plotArr = array();

        while ($row = $tStmt->fetch(PDO::FETCH_ASSOC)) {
            $plotArr[] = $row;
        }

        $tomtCount = 1;
        foreach ($plotArr as $p)
            echo'<input type="button" value="'.$tomtCount.'" onclick="ChangeUrl(\'?omrade='.$currOmrade.'&tomt='.$plotArr['tomtID'].'\');" />';
            $tomtCount++
        ?>
        <div id="map"></div>


        <div class="tomtPopup">
        <div class="esc"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg></div>
        <div class="tomtHead">Tomt 1</div>
        <div class="tomtAdress">Hjerkinnhøvegen 1, hus 3</div>
        <div class="tomtDetails">Areal: 150m<sup>2</sup></div>
        <div class="tomtDetails">Pris: 500 000 NOK</div>
        <div class="tomtInfoTitle">Merk:</div>
        <div class="tomtInfoText">Tomtene i dette feltet kan ikke bygges på før juni 2017.</div><a class="tomtBtn">SEND HENVENDELSE</a>
        </div>


        <!--.mapTableWrap
        .mapWrap
        #googleMap
        -->
        <div class="tableWrap"><a class="arrow" href=""><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
        <path d="M0-.5h24v24H0z" fill="none"/>
        </svg></a>
        <table>
        <tr>
        <td class="col">TOMT</td>
        <td class="col">PRISANTYDNING</td>
        <td class="col">AREAL</td>
        <td class="col">STATUS</td>
        </tr>
        <tr>
        <td>1</td>
        <td>373 000 NOK</td>
        <td>1150 m<sup>2</sup></td>
        <td>Ledig</td>
        </tr>
        <tr>
        <td>2</td>
        <td>462 000 NOK</td>
        <td>1920 m<sup>2</sup></td>
        <td>Ledig</td>
        </tr>
        <tr>
        <td>3</td>
        <td>217 000 NOK</td>
        <td>1160 m<sup>2</sup></td>
        <td>Ledig</td>
        </tr>
        <tr>
        <td>4</td>
        <td>431 000 NOK</td>
        <td>1240 m<sup>2</sup></td>
        <td>Solgt</td>
        </tr>
        <tr>
        <td>5</td>
        <td>312 000 NOK</td>
        <td>1640 m<sup>2</sup></td>
        <td>Solgt</td>
        </tr>
        <tr>
        <td>6</td>
        <td>215 000 NOK</td>
        <td>2102 m<sup>2</sup></td>
        <td>Ledig</td>
        </tr>
        <tr>
        <td>7</td>
        <td>325 000 NOK</td>
        <td>1170 m<sup>2</sup></td>
        <td>Ledig</td>
        </tr>
        <tr>
        <td>8</td>
        <td>510 000 NOK</td>
        <td>1370 m<sup>2</sup></td>
        <td>Solgt</td>
        </tr>
        <tr>
        <td>9</td>
        <td>320 000 NOK</td>
        <td>1680 m<sup>2</sup></td>
        <td>Ledig</td>
        </tr>
        <tr>
        <td>10</td>
        <td>400 000 NOK</td>
        <td>1600 m<sup>2</sup></td>
        <td>Ledig</td>
        </tr>
        </table><a class="arrow" href=""><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
        <path d="M0-.25h24v24H0z" fill="none"/>
        </svg></a>
        </div>
        <div class="fileWrap"><a class="oneFileWrap" href="">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 21l-8-9h6v-12h4v12h6l-8 9zm9-1v2h-18v-2h-2v4h22v-4h-2z"/></svg>REGULERINGSPLAN</a><a class="oneFileWrap" href="">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 21l-8-9h6v-12h4v12h6l-8 9zm9-1v2h-18v-2h-2v4h22v-4h-2z"/></svg>REGULERINGSKART</a><a class="oneFileWrap" href="">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 18h-8v-1h8v1zm-2 1h-6v1h6v-1zm10-14v13h-4v6h-16v-6h-4v-13h4v-5h16v5h4zm-18 0h12v-3h-12v3zm12 10h-12v7h12v-7zm4-8h-20v9h2v-3h16v3h2v-9zm-1.5 1c-.276 0-.5.224-.5.5s.224.5.5.5.5-.224.5-.5-.224-.5-.5-.5z"/></svg>SKRIV UT OMRÅDE</a></div>
        <div class="ansattWrap">
        <div class="title">Kontaktpersoner</div>
        <div class="oneAnsattWrap"><img src="http://placehold.it/350x350">
        <div class="ansattName">NAVN HER SOMERLITTLANGTjkfsdhkjgshdfjgkh</div>
        <div class="ansattAnsvar">Ansvarsområde</div>
        <div class="ansattPhone">123 12 123</div>
        <div class="ansattEmail">epostsomerlittlang@tinde.no</div>
        </div>
        <div class="oneAnsattWrap"><img src="http://placehold.it/350x350">
        <div class="ansattName">NAAAVN HER</div>
        <div class="ansattAnsvar">Ansvarsområde</div>
        <div class="ansattPhone">123 12 123</div>
        <div class="ansattEmail">epostsomerlittlang@tinde.no</div>
        </div>
        <div class="oneAnsattWrap"><img src="http://placehold.it/350x350">
        <div class="ansattName">NAVN HER</div>
        <div class="ansattAnsvar">Ansvarsområde</div>
        <div class="ansattPhone">123 12 123</div>
        <div class="ansattEmail">epostsomerlittlang@tinde.no</div>
        </div>
        </div>
        <!--.socialWrap
        a.icon1(href="")
        include ../../images/svg/facebook.svg
        a.icon2(href="")
        include ../../images/svg/twitter.svg
        a.icon3(href="")
        include ../../images/svg/instagram.svg
        -->
        </div>
        </div>
        </body>
        <div class="footer">
        <div class="footerText">Innholdet er beskyttet etter åndsverksloven. Bruk av automatiserte tjenester (roboter, spidere, indeksering m.m.) samt andre fremgangsmåter for systematisk eller regelmessig bruk er ikke tillatt uten eksplisitt samtykke fra tinde.no. <br><br>©  2017 Tinde utvikling AS
        <!--Google maps-->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAv-n8dxD2LyiLpKr2qg4vCbmtJFqPJnI8&callback=myMap"></script>

        <!--script type="text/javascript" src="../../js/googleMap.js"></script-->


        <!--Slick stuff-->
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="../../tools/slick/slick.js"></script>
        <script type="text/javascript" src="../../js/slick.js"></script>


        <!--MenuStickScript-->
        <script type="text/javascript" src="../../js/menuheader.js"></script>
        </div>
        </div>