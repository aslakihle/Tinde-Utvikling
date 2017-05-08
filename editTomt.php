<?php
require_once 'connect.php';

//variable to change which ansatt is logged in, with ID
$loggedInID = 1;

function redirect($url){
	header("Location: $url");
}

if (isset($_POST['nyTomt'])){
	redirect("leggTilTomt.php?omradeID=".$_GET['omradeID']);
};


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <!--Jquery and UI-->
    <script src="jquery-ui/external/jquery/jquery.js"></script>
    <link rel="stylesheet" href="jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="jquery-ui/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="jquery-ui/jquery-ui.theme.min.css">
    <script src="jquery-ui/jquery-ui.min.js"></script>
    <!--Tab icon-->
    <link rel="icon" type="image/png" href="images/logo_tab.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="images/favicon/manifest.json">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <title>Tinde Utvikling - TomteOmråde</title>
    <!--Our Css-->
    <link rel="stylesheet" href="css/nyttOmrade.css?<?php echo time(); ?>">
</head>
<body>
    <!--include images/svg/svgXML.svg-->
    <div class="menu">
        <ul>
        	<!-- SVG LOGO-->
        	<li id="menuLogo">
                <a href="cmsDashboard.php"><!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 225.5 95.4"><style type="text/css">
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
                </style><polygon class="st0" points="33 50.6 19.1 50.6 2.6 65 2.6 92.4 222.2 92.4 222.2 65 205.6 50.6 192 50.6 147 11.2 136.1 20.7 122.3 8.5 107.8 21.2 87.1 3.2 "/><path d="M205.6 50.6l-0.1 0.2L205.6 50.6zM2.7 65.1l16.5-14.3h13.9l54-47.3 20.6 18 14.5-12.7 13.9 12.1 10.8-9.5 45 39.4h13.6L222 65.2v27.1H2.7V65.1zM87.1 2.9L33 50.4H19L2.4 64.9v27.6h220V64.9l-16.6-14.6h-0.1 -13.6L147 10.8l-10.8 9.5L122.3 8.2l-14.5 12.7L87.1 2.9z"/><polygon class="st1" points="202.8 57.9 189.2 57.9 147 20.9 136.1 30.4 122.3 18.2 107.8 31 87.1 13 35.8 57.9 21.9 57.9 9.9 68.4 9.9 85 214.8 85 214.8 68.4 "/><polygon class="st2" points="121.6 52.9 127.4 57.9 178.1 57.9 147 30.6 "/><path class="st3" d="M121.6 52.9l5.1-4.5L121.6 52.9z"/><polygon class="st4" points="156.4 57.9 127.4 57.9 121.6 52.9 121.6 52.9 127.4 57.9 "/><polygon class="st5" points="156.4 57.9 127.4 57.9 121.6 52.9 126.3 48.7 126.7 48.4 136.1 40.2 "/><polygon class="st4" points="121.6 52.9 107.8 40.7 122.3 28 136.1 40.2 "/><polygon class="st5" points="121.6 52.9 121.6 52.9 136.1 40.2 126.3 48.7 "/><polygon class="st6" points="121.6 52.9 121.6 52.9 126.3 48.7 "/><polygon class="st6" points="121.6 52.9 121.6 52.9 126.3 48.7 "/><polygon class="st7" points="127.4 57.9 47 57.9 87.1 22.6 107.8 40.7 88.1 57.9 107.8 40.7 88.1 57.9 115.9 57.9 "/><polygon class="st8" points="127.4 57.9 115.9 57.9 121.6 52.9 "/><polygon class="st8" points="115.9 57.9 88.1 57.9 107.8 40.7 121.6 52.9 "/><polygon class="st9" points="115.9 57.9 115.9 57.9 121.6 52.9 "/><path class="st10" d="M88.1 57.9l19.6-17.2L88.1 57.9z"/><polygon class="st0" points="19.3 70 24.8 70 24.8 77.1 27.1 77.1 27.1 70 32.4 70 32.4 67.8 19.3 67.8 "/><rect x="33.5" y="67.8" class="st0" width="2.3" height="9.3"/><path class="st0" d="M47.9 75L47.9 75c-0.3 0-0.6-0.1-0.8-0.2 -0.2-0.2-0.4-0.3-0.6-0.5L42 69.1c-0.4-0.4-0.8-0.7-1.2-1 -0.4-0.2-1-0.3-1.5-0.3H37v9.3h2.2v-7h0.1c0.2 0 0.5 0.1 0.7 0.2 0.2 0.2 0.4 0.3 0.6 0.5l4.4 5.1c0.4 0.5 0.8 0.8 1.2 1s1 0.3 1.6 0.3h2.4v-9.4H48L47.9 75 47.9 75z"/><path class="st0" d="M62.2 67.8H51.4v9.3h10.8c2.4 0 3.5-1 3.5-2.9v-3.4C65.7 68.8 64.6 67.8 62.2 67.8zM63.4 74.1c0 0.5-0.4 0.8-1.2 0.8h-8.6v-5h8.6c0.8 0 1.2 0.2 1.2 0.8C63.4 70.7 63.4 74.1 63.4 74.1z"/><path class="st0" d="M69.1 74.5v-1h10.7v-2.1H69.1v-1c0-0.3 0.2-0.5 0.5-0.5h10.2v-2.1H69.6c-1.9 0-2.8 0.7-2.8 2.3v4.7c0 1.5 0.9 2.3 2.8 2.3h10.3V75H69.6C69.3 75 69.1 74.8 69.1 74.5z"/><path class="st0" d="M99.7 74.9c0 0.2-0.1 0.7-1 0.7h-9c-0.9 0-1-0.6-1-0.7v-7.1h-1.8v7.4c0 0.9 0.2 2.1 2.7 2.1h9c2.4 0 2.7-1.2 2.7-2.1v-7.4h-1.8L99.7 74.9 99.7 74.9z"/><polygon class="st0" points="103.5 69.3 109.5 69.3 109.5 77.2 111.3 77.2 111.3 69.3 117.1 69.3 117.1 67.7 103.5 67.7 "/><path class="st0" d="M127.6 75c-0.1 0.2-0.2 0.4-0.4 0.5 -0.2 0.1-0.3 0.2-0.6 0.2h-0.7c-0.3 0-0.7-0.1-1-0.7l-4.1-7.2h-2l5.1 8.8c0.1 0.2 0.2 0.2 0.2 0.3 0.1 0.1 0.1 0.2 0.2 0.2 0.1 0.1 0.2 0.1 0.2 0.1 0.2 0 0.3 0.1 0.5 0.1h2.4c0.6 0 1-0.2 1.2-0.7l5.1-8.9h-2L127.6 75z"/><rect x="135.4" y="67.7" class="st0" width="1.8" height="9.5"/><polygon class="st0" points="152.2 67.7 149.9 67.7 146.1 71.5 140.9 71.5 140.9 67.7 139.2 67.7 139.2 77.2 140.9 77.2 140.9 73.1 146.3 73.1 150.3 77.2 152.7 77.2 147.6 72.1 "/><path class="st0" d="M156.4 74.7v-7h-1.8v7.4c0 0.9 0.2 2.1 2.7 2.1h10.8v-1.6h-10.8C156.6 75.6 156.4 75.1 156.4 74.7z"/><rect x="169.9" y="67.7" class="st0" width="1.8" height="9.5"/><path class="st0" d="M185.9 75.6h-0.5c-0.3 0-0.7-0.1-1-0.2 -0.3-0.2-0.6-0.4-0.7-0.7l-5-5.7c-0.4-0.4-0.8-0.7-1.2-1 -0.4-0.2-1-0.3-1.5-0.3h-2.2v9.5h1.7v-7.9h0.5c0.3 0 0.7 0.1 1 0.2s0.6 0.4 0.7 0.7l4.9 5.6c0.4 0.5 0.8 0.8 1.2 1s1 0.3 1.6 0.3h2.2v-9.5h-1.7V75.6z"/><path class="st0" d="M202.2 71.7v3c0 0.4-0.2 0.9-1 0.9h-8.9c-0.6 0-1-0.3-1-0.9v-4.5c0-0.4 0.2-0.9 1-0.9h11.3v-1.6h-11.3c-2.4 0-2.8 1.2-2.8 2.1V75c0 0.9 0.2 2.1 2.7 2.1h8.9c2.4 0 2.7-1.2 2.7-2.1v-3.4L202.2 71.7 202.2 71.7z"/></svg>
                </a>
            </li>
            <!-- RESTEN AV MENYEN -->
            
            <?php
			//statement to find name of logged in ansatt
			$stmt = $db->prepare("
				SELECT ansattnavn
				FROM ansatt a
				WHERE a.ansattID = :ansattID
				;");
			$stmt->bindParam(':ansattID', $loggedInID);
			$stmt->execute();
			
			//finds and prints logged in ansatt
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				echo '<li><a class="" href="cmsDashboard.php">'.$row['ansattnavn'].'</a></li>';
			}
			
			?>
        	<li style="float:right;"><a style="color:#e04747" href="index.php">Log Out</a></li>
    	</ul>
    </div>
    <div class="header"></div>
    <!--meny funker ikke uten denne, har bare padding-top 20px, men må ha det for å funke-->
   
    <!--main-->
    <div class="main">
    	<div class="content">
			<h1 class="topH1">OPPDATER TOMT</h1>
			
			<?php
			
			//UPdatering av område
			if (isset($_POST['update'])){
				$stmt = $db->prepare("
				UPDATE tomt
				SET adresse = '".htmlentities($_POST['adresse'])."',
					areal = '".htmlentities($_POST['areal'])."',
					pris = '".htmlentities($_POST['pris'])."',
					info = '".htmlentities($_POST['merknad'])."',
					status = ".$_POST['status']."
				WHERE tomtID = ".htmlentities($_GET['tomtID'])."
					;
				");
				$stmt->execute();
				
				//after clicking update and updating database, displayes a div that fades out
				echo '<div id="updated">OPPDATERT</div>';
				echo '
				<script>
					$("#updated").fadeOut(1500);
				</script>';
			};

			
			?>
			
			<form method="post" id="newTomtForm" >
				<div class="borderdiv">
				
					<?php
					$stmt = $db->prepare("
						SELECT *
						FROM tomt
						WHERE tomtID = ".htmlentities($_GET['tomtID'])."
						;");
					$stmt->execute();
				
					while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						echo '
							<h3 class="topH3">'.$row['adresse'].'</h3>
							<label>Adresse</label>
							<input type="text" placeholder="" name="adresse" value="'.$row['adresse'].'" required autofocus>
							
							<label>Areal (km&sup2;)</label>
							<input type="number" placeholder="" name="areal" value="'.$row['areal'].'" required>
							
							<label>Prisantydning</label>
							<input type="number" placeholder="" max="10000000" min="1000000" name="pris" value="'.$row['pris'].'" required>
							
							<label>Merknad/Info om tomten</label>
							<textarea form="newTomtForm" rows="4" placeholder="" name="merknad">'.$row['info'].'</textarea>
						';
						
						
					if($row['status'] == 0){
						echo '<div class="statusBox">
							<label>Status (checkmark = solgt)</label>
							<input class="checkbox" type="hidden" name="status" value="0">
							<input class="checkbox" type="checkbox" name="status" value="1">
						</div>';
					}else{
						echo '<div class="statusBox">
							<label>Status (checkmark = solgt)</label>
							<input class="checkbox" type="hidden" name="status" value="0">
							<input class="checkbox" type="checkbox" name="status" value="1" checked>
						</div>';
					}
					}
					?>
					
				</div>	
				<input type="submit" name="update" value="OPPDATER TOMT" id="createKnapp">
			</form>
			
        </div>
		<div id="allTomts">
        	<div id="tomtliste">
        		<h3>Tomteliste</h3>
				<?php
				//statement to find name of logged in ansatt
				$stmt = $db->prepare("
					SELECT tomtID, adresse, status
					FROM tomt t
					INNER JOIN tomteomrade tom
					ON t.tomteomradeID = tom.omradeID
					WHERE t.tomteomradeID = ".htmlentities($_GET['omradeID'])."
					ORDER BY adresse ASC
					;");
				$stmt->execute();

				//finds and prints logged in ansatt
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					echo '<a class="" href="editTomt.php?omradeID='.$_GET['omradeID'].'&tomtID='.$row['tomtID'].'">'.$row['adresse'].' ';
						if($row['status']==0){
							echo '<span class="span ledig" title="Ledig"></span>';
						} else {
							echo '<span class="span solgt" title="Solgt"></span>';
						}
							echo '</a>';
				}
			 	
				?>
				
				
    		</div>
			<form method="post">
				<input class="nyTomtKnapp" type="submit" name="nyTomt" value="LAG NY TOMT">
			</form>
   		</div>
    </div>
	<!--FOOTER-->
	<!--<div class="footer">
		<div class="footerText">Innholdet er beskyttet etter åndsverksloven. Bruk av automatiserte tjenester (roboter, spidere, indeksering m.m.) samt andre fremgangsmåter for systematisk eller regelmessig bruk er ikke tillatt uten eksplisitt samtykke fra tinde.no. <br><br>©  2017 Tinde utvikling AS</div>
	</div>-->
	
	<!--JAVASCRIPTS-->
	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/menuheader.js"></script>
	<script type="text/javascript" src="js/tomtefinner.js"></script>
</body>
</html>