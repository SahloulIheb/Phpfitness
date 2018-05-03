<?php session_start(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Fitness City - Nos Services</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style1.css">
  <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
        <style>
            .face {
        background: url(data:image/jpg;base64,<?php echo base64_encode($_SESSION["photo"]);?>);
    display: block;
    background-size:100% 100% ;
    border-radius: 70%;

}
            
        </style>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						
                                            <h1 id="fh5co-logo"><a href="Accueil.php">Fit<span>ness</span></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li>
									<a href="Accueil.php">Accueil</a>
								</li>
								
								<li>
                                    <a href="schedule.php" target="_blank">Planning</a>
								</li>
                                                                <li>
									<a href="cours.php" class="fh5co-sub-ddown">Cours</a>
									
								</li>
                                                                <li>
                                                                    <a href="tarif.php">Tarifs</a>
								</li>
                                                                <li><a href="entraineurs.php">Entraineurs</a></li>
								<li class="active"><a href="client.php">Espace Client</a></li>
                                                                <li><a href="produits.php">Espace Magasin</a></li>
								 <li><a href="contact.php">Contact</a></li>
								
							
                                                                 <li><a style="color:whitesmoke"> <u><b>
                                                                            <?php  if (isset($_SESSION["login"]))
                                                                         {echo "Salut ".$_SESSION["login"]." !";} ?></u>
                                                                        </b></a></li>
                                                                        
                                 
<li> 
	
									<button class="face" type="button" >
                                                                    <span style="color: transparent;">____</span>
                                                                                                      </button>
									<ul class="fh5co-sub-menu">
									 	<li><a href="signout.php">Se Deconnecter</a></li>
									 	
									</ul>
								</li>
                                                       
                                                        </ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		<!-- end:fh5co-header -->
		<div class="fh5co-parallax" style="background-image: url(images/client1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Espace Client</h1>
                                                        <p>Nos Services</p>
                                                        
                                                        
                                                        <p></p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
		<!-- end:fh5co-hero -->
		<div id="fh5co-team-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading-section text-center animate-box">
							<h2>Nos Services</h2>
                                                        <br>
                                                        <div class="row row-1">
        <div class="col-md-3 ser-col-4">
          <div class="ser-col ser-1">
              <a href="Paiement.php">
            <div class="icon-col">
              <i class="fa fa-money" aria-hidden="true"></i>
            </div></a>
              <br>
            <h2>Regler votre abonnement &nbsp;&nbsp;&nbsp;</h2>
            <p> </p>
            <a href="Paiement.php">
            <span class="circle hidden-xs">
            <i class="fa fa-circle-thin" aria-hidden="true"></i>
            </span></a>
          </div>
        </div>

        <div class="col-md-3 ser-col-4">
          <div class="ser-col ser-2">
              <a href="chat.php">
            <div class="icon-col">
              <i class="fa fa-comments" aria-hidden="true"></i>
                  </div></a>
              <br>
            <h2>Contacter les entraineurs</h2>
            <p> </p>
           
            <span class="circle hidden-xs">
            <i class="fa fa-circle-thin" aria-hidden="true"></i>
            </span>
          </div>
        </div>

        <div class="col-md-3 ser-col-4">
          <div class="ser-col ser-2">
              <a href="reserver.php">
            <div class="icon-col">
              <i class="fa fa-calendar" aria-hidden="true"></i>
                  </div></a>
              <br>
            <h2>Réserver un cours &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
            <p> </p>
           
            <span class="circle hidden-xs">
            <i class="fa fa-circle-thin" aria-hidden="true"></i>
            </span>
          </div>
        </div>
        <div class="col-md-3 ser-col-4-l">
          <div class="ser-col ser-3">
              <a href="reservation.php">
            <div class="icon-col">
              <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
            </div></a> <br>
            <h2>Mes Réservations</h2>
            <p></p>
            
          </div>
        </div>
      </div>
						</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
			<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 animate-box">
							<h3 class="section-title">A Propos de nous
</h3>
							<p>Chez Fitness, nous croyons que tout le monde devrait avoir la possibilite de profiter d'un style de vie sain et en forme. Nous l'avons donc rendu simple, abordable et pratique pour que chacun puisse atteindre ses objectifs de sante personnels. Que vous soyez un débutant ou un pro, jeune ou vieux, nous sommes la pour tout le monde.</p>
						</div>

						<div class="col-md-4 animate-box">
							<h3 class="section-title">Notre Adresse </h3>
							<ul class="contact-info">
								<li><i class="icon-map-marker"></i>Tunis , Tunisia</li>
								<li><i class="icon-phone"></i>+ 1235 2355 98</li>
								<li><i class="icon-envelope"></i>fitnesscitytn@gmail.com</li>
								<li><i class="icon-globe2"></i>www.yoursite.com</li>
                                                                
							</ul>
						</div>
						<div class="col-md-4 animate-box">
							<h3 class="section-title">Heures d'ouverture : </h3>
							<ul class="contact-info">
								<li>Lundi à Vendredi : 9:00 à 22h00</li>
								<li>Samedi et Dimanche : 9h00 à 19h00</li>
								
                                                                
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</footer>

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

