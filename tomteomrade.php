<?php
require_once 'connect.php';
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
    <link rel="stylesheet" href="css/tomteomrade.css?<?php echo time(); ?>">
</head>
<body>
    <!--include images/svg/svgXML.svg-->
    <div class="menu">
        <ul>
        	<!-- SVG LOGO-->
        	<li id="menuLogo">
                <a href="index.php"><!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
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
            <li><a class="menu1" href="index.php">Hjem</a></li>
            <li><a class="menu2" href="tomteomrade.php">Tomteområder</a></li>
        	<li><a class="menu3" href="kontakt.php">Kontakt</a></li>
    	</ul>
    </div>
    <div class="header"></div>
    <!--meny funker ikke uten denne, har bare padding-top 20px, men må ha det for å funke-->
   
    <!--main-->
    <div class="main">
        <div class="content">
           
           	<!--OUTPUT OF Tomteområder-->
			<?php
				
				//statement to find all the fylker that TindeUtvikling owns
				$stmt = $db->prepare("
					SELECT *
					FROM fylke
					ORDER BY fylke DESC;");
				$stmt->execute();
				//Just to check if there are any fylker
				$numRows = $stmt->rowCount();
			
				if($numRows == 0){
					echo '<p style="text-align: center;">Ingen tomteområder enda!</p>';
				}else{
					//goes through db to find all tomteomrader within the fylke
					while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						echo '<div id="'.$row['fylke'].'">';
						echo '<h1>'.strtoupper($row['fylke']).'</h1>';
						
						$tstmt = $db->prepare("
						SELECT *
						FROM tomteomrade t
						INNER JOIN fylke f
						ON t.fylke = f.fylke
						WHERE t.fylke = :fylke
						ORDER BY t.omradeID;");
						$tstmt->bindParam(':fylke', $row['fylke']);
						$tstmt->execute();
						
						//prints out all the tomteområder within a fylke
						while($tRow = $tstmt->fetch(PDO::FETCH_ASSOC)){
							/*
							//to find bilde
							$bstmt = $db->prepare("
							SELECT *
							FROM bilder b
							INNER JOIN tomteomrade t
							ON b.omradeID = t.:id
							WHERE b.bildetype = 'Header'");
							$bstmt->bindParam(':id', $tRow['omradeID']);
							$bstmt->execute();
							$bstmt->fetch(PDO::FETCH_ASSOC);*/
							echo '<div class="nyttOmrade" id="tomteomrade'.$tRow['omradeID'].'">';
							echo '
							<a href="tomteomrader/tomteomrade'.$tRow['omradeID'].'/tomteomrade'.$tRow['omradeID'].'.php" >
							<div class="omradeBox">
								<img class="omradeImg" src="images/hytte'.$tRow['omradeID'].'.jpg" alt="hytte">
									<div class="stedText">
										<div>'.$tRow['omradenavn'].'</div>
									</div>
									<div class="omradeBoxText">
										<div>"'.$tRow['oneliner'].'" </div>
										<ul>
											<li><b>Pris:</b> 1.5m <b>-</b> 2m</li>
											<li><b>Areal:</b> 400km^2 <b>-</b> 1000km^2</li>
										</ul>
									</div>
								</div>
							</a>';
							echo '</div>';
						};
						
						echo '<hr>';
						echo '</div>';
					};
				};
			?>
        </div>
    </div>
    
	<!-- SORTERINGS MENYEN-->
    <div id="sort">
		
		<form method="post">
			<?php
			$stmt = $db->prepare("
				SELECT fylke
				FROM fylke
				ORDER BY fylke DESC;");
			$stmt->execute();

			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				//skriver ut alle fylke valgene
				echo ' 
				<div>
					<section class="valg" title="'.$row['fylke'].'">
						<span>'.$row['fylke'].'</span>
						<div class="checkBox">
							<input type="checkbox" value="'.$row['fylke'].'" id="'.$row['fylke'].'checkbox" name="'.$row['fylke'].'" checked>
							<label for="'.$row['fylke'].'checkbox"> </label>
						</div>
					</section>
				</div>';

				
				//shows the fylkecheckboxes clicked and displays them, if not removes them
				if(isset($_POST[$row['fylke']])){
					echo '
						<script>
							$("#'.$row['fylke'].'").css("display", "block");
							$("#'.$row['fylke'].'checkbox").prop("checked", true);
						</script>';
				} else {
					echo '
						<script>
							$("#'.$row['fylke'].'").css("display", "none");
							$("#'.$row['fylke'].'checkbox").removeProp("checked");
						</script>';
                }
			};
				
			?>

			<h4>Fasiliteter</h4>
			
			<!--knapper for fasiliteter-->
			<div>
				<section class="valg" title="Vann">
					<span>Vann</span>
					<div class="checkBox">
						<input type="checkbox" value="Vann" id="vanncheckbox" name="vann" >
						<label for="vanncheckbox"> </label>
					</div>
				</section>
			</div>
			
			<div>
				<section class="valg" title="Strøm">
					<span>Strøm</span>
					<div class="checkBox">
						<input type="checkbox" value="Strøm" id="stromcheckbox" name="strom" >
						<label for="stromcheckbox"> </label>
					</div>
				</section>
			</div>
			
			<div>
				<section class="valg" title="Vei">
					<span>Vei</span>
					<div class="checkBox">
						<input type="checkbox" value="Vei" id="veicheckbox" name="vei" >
						<label for="veicheckbox"> </label>
					</div>
				</section>
			</div>
			
			<hr style="margin-top: 2%; margin-bottom: 2%;">
			
			<div>
				<section class="valg" title="Alpint">
					<span>Alpint</span>
					<div class="checkBox">
						<input type="checkbox" value="Alpint" id="alpintcheckbox" name="alpint" >
						<label for="alpintcheckbox"> </label>
					</div>
				</section>
			</div>
			
			<div>
				<section class="valg" title="Fiske">
					<span>Fiske</span>
					<div class="checkBox">
						<input type="checkbox" value="Fiske" id="fiskecheckbox" name="fiske" >
						<label for="fiskecheckbox"> </label>
					</div>
				</section>
			</div>
			
			<div>
				<section class="valg" title="Jakt">
					<span>Jakt</span>
					<div class="checkBox">
						<input type="checkbox" value="Jakt" id="jaktcheckbox" name="jakt" >
						<label for="jaktcheckbox"> </label>
					</div>
				</section>
			</div>
			
			<div>
				<section class="valg" title="Tur">
					<span>Tur</span>
					<div class="checkBox">
						<input type="checkbox" value="Tur" id="turcheckbox" name="tur" >
						<label for="turcheckbox"> </label>
					</div>
				</section>
			</div>
			<?php

			//Function to check if a button is checked
			function checked ($name){
				
				if(isset($_POST[$name])){
					echo  '<script>';
					echo '$("#'.$name.'checkbox").prop("checked", true);</script>';
				}else {
					echo '<script>$("#'.$name.'checkbox").removeProp("checked");</script>';
                }
			};

			$removestmt = $db->prepare("
				SELECT omradeID
				FROM tomteomrade
				;");
			$removestmt->execute();

			//FUNCTION TO SHOW THE SELECTED TOMTEOMRÅDER WITH FASILITETER
            function runSQL($sql, $removestmt){
                echo '<script>';
                while ($row1 = $removestmt->fetch(PDO::FETCH_ASSOC)){
                    echo '$("#tomteomrade'.$row1['omradeID'].'").css("display", "none");';
                };
                //shows all tomteområder that got $name
                while ($row = $sql->fetch(PDO::FETCH_ASSOC)){
                    echo '$("#tomteomrade'.$row['omradeID'].'").css("display", "inline-block");';
                };
                echo '</script>';
            };


			//creates an array to be filled with the names of the fasiliteter selected
			$selected = array();

			//if statements to fill the array with the selected checkbox
			if(isset($_POST['vann'])){

			    $selected[] = 'vann';
			}
			if(isset($_POST['strom'])){

				$selected[] = 'strom';
			}
			if(isset($_POST['vei'])){

				$selected[] = 'vei';
			}
			if(isset($_POST['alpint'])){

				$selected[] = 'alpint';
			}
			if(isset($_POST['fiske'])){

				$selected[] = 'fiske';
			}
			if(isset($_POST['jakt'])){

				$selected[] = 'jakt';
			}
			if(isset($_POST['tur'])){

				$selected[] = 'tur';
			}

            //checks the length of the array to see how many checkboxes were selected
			$whichSQLtoUSE=count($selected);

            //IF 1 checkbox is selected
			if($whichSQLtoUSE == 1) {
				//SQL STATEMENTS FOR WATER
				$stmt = $db->prepare("
				SELECT omradeID
				FROM tomteomrade
				WHERE {$selected[0]} = 1
				;");
				$stmt->execute();

				//calling functions
				runSQL($stmt, $removestmt);
				checked($selected[0]);
			}

			//IF 2 checkbox is selected
			if($whichSQLtoUSE == 2) {
				//SQL STATEMENTS FOR WATER
				$stmt = $db->prepare("
				SELECT omradeID
				FROM tomteomrade
				WHERE {$selected[0]} = 1
				AND {$selected[1]} = 1
				;");
				$stmt->execute();

				//calling functions
				runSQL($stmt, $removestmt);
				checked($selected[0]);
				checked($selected[1]);
			}

			//IF 3 checkbox is selected
			if($whichSQLtoUSE == 3) {
				//SQL STATEMENTS FOR WATER
				$stmt = $db->prepare("
				SELECT omradeID
				FROM tomteomrade
				WHERE {$selected[0]} = 1
				AND {$selected[1]} = 1
				AND {$selected[2]} = 1
				;");
				$stmt->execute();

				//calling functions
				runSQL($stmt, $removestmt);
				checked($selected[0]);
				checked($selected[1]);
				checked($selected[2]);
			}
			//IF 4 checkbox is selected
			if($whichSQLtoUSE == 4) {
				//SQL STATEMENTS FOR WATER
				$stmt = $db->prepare("
				SELECT omradeID
				FROM tomteomrade
				WHERE {$selected[0]} = 1
				AND {$selected[1]} = 1
				AND {$selected[2]} = 1
				AND {$selected[3]} = 1
				;");
				$stmt->execute();

				//calling functions
				runSQL($stmt, $removestmt);
				checked($selected[0]);
				checked($selected[1]);
				checked($selected[2]);
				checked($selected[3]);
			}

			//IF 5 checkbox is selected
			if($whichSQLtoUSE == 5) {
				//SQL STATEMENTS FOR WATER
				$stmt = $db->prepare("
				SELECT omradeID
				FROM tomteomrade
				WHERE {$selected[0]} = 1
				AND {$selected[1]} = 1
				AND {$selected[2]} = 1
				AND {$selected[3]} = 1
				AND {$selected[4]} = 1
				;");
				$stmt->execute();

				//calling functions
				runSQL($stmt, $removestmt);
				checked($selected[0]);
				checked($selected[1]);
				checked($selected[2]);
				checked($selected[3]);
				checked($selected[4]);
			}

			//IF 6 checkbox is selected
			if($whichSQLtoUSE == 6) {
				//SQL STATEMENTS FOR WATER
				$stmt = $db->prepare("
				SELECT omradeID
				FROM tomteomrade
				WHERE {$selected[0]} = 1
				AND {$selected[1]} = 1
				AND {$selected[2]} = 1
				AND {$selected[3]} = 1
				AND {$selected[4]} = 1
				AND {$selected[5]} = 1
				;");
				$stmt->execute();

				//calling functions
				runSQL($stmt, $removestmt);
				checked($selected[0]);
				checked($selected[1]);
				checked($selected[2]);
				checked($selected[3]);
				checked($selected[4]);
				checked($selected[5]);
			}

			//IF 7 checkbox is selected
			if($whichSQLtoUSE == 7) {
				//SQL STATEMENTS FOR WATER
				$stmt = $db->prepare("
				SELECT omradeID
				FROM tomteomrade
				WHERE {$selected[0]} = 1
				AND {$selected[1]} = 1
				AND {$selected[2]} = 1
				AND {$selected[3]} = 1
				AND {$selected[4]} = 1
				AND {$selected[5]} = 1
				AND {$selected[6]} = 1
				;");
				$stmt->execute();

				//calling functions
				runSQL($stmt, $removestmt);
				checked($selected[0]);
				checked($selected[1]);
				checked($selected[2]);
				checked($selected[3]);
				checked($selected[4]);
				checked($selected[5]);
				checked($selected[6]);
			}

            // Checks if nothing is checked and shows everything
			if(!isset($_POST['vann']) && !isset($_POST['strom']) && !isset($_POST['vei']) && !isset($_POST['alpint']) && !isset($_POST['fiske']) && !isset($_POST['jakt']) && !isset($_POST['tur'])) {

                $stmt = $db->prepare("
                    SELECT omradeID
                    FROM tomteomrade
                    ;");
                $stmt->execute();
				echo '<script>';
				//shows all tomteområder
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					echo '$("#tomteomrade'.$row['omradeID'].'").css("display", "inline-block");';
				};
				echo '</script>';
            }
                //Checks if search button is not clicked, and shows all fylkeboxes
			    if(!isset($_POST['sok'])) {
					$stmt = $db->prepare("
                    SELECT fylke
                    FROM fylke
                    ORDER BY fylke DESC;");
					$stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						echo '
						<script>
							$("#'.$row['fylke'].'").css("display", "block");
						</script>';
					}
                }
			?>

			<!--.valgIcon Vanninclude images/svg/icons/vannico_default.svg
			-->
			<!--.valgIcon Strøminclude images/svg/icons/stromico_default.svg
			-->
			<!--.valgIcon Veiinclude images/svg/icons/bilico_default.svg
			-->
			<!--.valgIcon Alpintinclude images/svg/icons/skiico_default.svg
			-->
			<!--.valgIcon Fiskeinclude images/svg/icons/fiskico_default.svg
			-->
			<!--.valgIcon Jaktinclude images/svg/icons/jaktico_default.svg
			-->
			<!--.valgIcon Badeinclude images/svg/icons/swimico_default.svg
			-->
			<!--.valgIcon Tur
			include images/svg/icons/turico_default.svg


			-->
        	
			<input type="submit" value="SØK" name="sok">
 		</form>
    </div>
    
    <!-- FOOTER -->
    <div class="footer">
        <div class="footerText">Innholdet er beskyttet etter åndsverksloven. Bruk av automatiserte tjenester (roboter, spidere, indeksering m.m.) samt andre fremgangsmåter for systematisk eller regelmessig bruk er ikke tillatt uten eksplisitt samtykke fra tinde.no. <br><br>©  2017 Tinde utvikling AS</div>
    </div>
    <script type="text/javascript" src="js/menuheader.js"></script>
    
    </body>
</html>