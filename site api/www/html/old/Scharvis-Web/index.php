<?php
    include "include/nav.php"; 
    include "scripts/connexion.php";
    include "classes/house.php";  ?> 

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title>Scharvis</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta charset="utf-8"/>
		<link rel="stylesheet" media="screen" type="text/css" title="Design" href="design/style.css" />
	</head>
    	<body>
		<div id="texte"><div id="overflow">
		<div class="cadre"><div class="titre">Bienvenue</div><div class="marge_interne">
			<p>
				Voici la page d'accueille de votre module Scharvis.
			</p>
			<p>
				N'oubliez pas de changer votre mot de passe apres votre premiere connexion.
			</p>
			<p>
				Pour la création d'un compte veuillez contacter votre Administrateur.
			</p>
			<p>
				<?php
					if (!isset($_SESSION["user"])) {
				?>
			<form action="scripts/connexion.php" method="post">
				Numéro de téléphone
			<div id="form-login-username" class="form-group">
			<input id="username" class="form-control" name="username" type="text" size="18" alt="login" required />
			<span class="form-highlight"></span>
			<span class="form-bar"></span>
			<label for="username" class="float-label"></label>
			</div>
				Mot de passe
			<div id="form-login-password" class="form-group">
			<input id="passwd" class="form-control" name="password" type="password" size="18" alt="password" required>
			<span class="form-highlight"></span>
			<span class="form-bar"></span>
			<label for="Password" class="float-label"></label>
			</div>
				</p>
			<p></p>
			<div>
				<button class="btn btn-block btn-info ripple-effect" type="submit" name="signin" alt="sign in">Sign in</button>
				<button class="btn btn-block btn-info ripple-effect" type="submit" name="signup" alt="sign up">Sign up</button>
			</div>
			</form>
				<?php
					} 
						else {
							$curl = curl_init();
							curl_setopt_array($curl, array(CURLOPT_RETURNTRANSFER => 1,
							CURLOPT_URL => '127.0.0.1:4567/rooms?token=' . $_SESSION["token"],
							CURLOPT_USERAGENT => 'Codular Sample cURL Request'
									));
									$resp = curl_exec($curl);
									$house = new House($resp);
									$house->displayHouse();
							?>
							<?php
								if ($_SESSION["isAdmin"]){
							?>
								<form 
action="scripts/addRoom.php" method="post">
									add a room
									<input type='text' 
name='name'>
										<select 
name="type">
											<option 
value="bathroom">Bathroom</option>
											<option 
value="bedroom">Bedroom</option>
											<option 
value="livingroom">Living Room</option>
											<option 
value="kitchen">Kitchen</option>
											<option 
value="restroom">Restroom</option>
											<option 
value="attic">Attic</option>
											<option 
value="garage">Garage</option>
										</select>
									<input type='submit' 
name='add'>
								</form>
							<?php
								}
							}
							?>
							</p>
							<!-- Fin de la zone de texte -->
						</div>
					</div>
					</div>
	</div>
				</div>
			</div>
<br></br>
<br></br>
<br></br>
		</div>
<br></br>
<br></br>
<br></br>
		<div id="pied_de_page">
		</div>
    </body>
</html>
