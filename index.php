<?php
  session_start();
?>

<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="initial-scale=1, user-scalable=yes, maximum-scale=1">
		<title>ManuelWeb - Développeur &amp; Intégrateur Web</title>
		<meta name="description" content="Page personnelle et portfolio de Manuel Vercucque, développeur et intégrateur web sur Lyon et sa région.">
		<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    	<![endif]-->
    	<link rel="shortcut icon" type="image/x-icon" href="images/logoM-favicon.png" />
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    	<link href="animate.css" rel="stylesheet" />	
    	<link href="index.css" rel="stylesheet" />	
	</head>

	<body>
	<?php include_once("analyticstracking.php") ?>
	<main>
		<header id="header">	
	        <nav class="navbar navbar-default">
				<div class="container">					
					<div class="navbar-header">
						<img class="logo" src="images/logoM.png" alt="logo-manuelweb" />
						<span class="intit">Bienvenue sur ManuelWeb.fr</span>

	                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    </button>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                    <ul class="nav navbar-nav">
							<li class="li-home"><a href="index.php"><i class="fa fa-home fa-lg"></i><br />Accueil</a></li>
							<li class="li-about"><a href="#about"><i class="fa fa-user fa-lg"></i><br />A propos</a></li>
							<li class="li-skills"><a href="#skills"><i class="fa fa-code fa-lg"></i><br />Compétences</a></li>
							<li class="li-folio"><a href="#projects"><i class="fa fa-briefcase fa-lg"></i><br />Portfolio</a></li>	
							<li class="li-contact"><a href="#contact"><i class="fa fa-envelope fa-lg"></i><br />Contact</a></li>							
						</ul>						
					</div>										
				</div>
			</nav>

			<section class="container maintitle">							
				<h1 class="animated zoomIn">ManuelWeb.fr</h1>
				<h2 class="animated zoomIn">Développeur &amp; Intégrateur Web</h2>				
			</section>
		</header>

		<article id="about" class="container aboutme">													
				<h3>A propos</h3>
				<span><i class="fa fa-angle-double-up fa-2x"></i><i class="fa fa-angle-double-up fa-2x"></i><i class="fa fa-angle-double-up fa-2x"></i><i class="fa fa-angle-double-up fa-2x"></i></span>					
				<p class="subtitle">
					<i class="fa fa-quote-left hidden-xs"></i>Qui je suis, d'où je viens...<i class="fa fa-quote-right hidden-xs"></i>
				</p>
				<p class="paragraphe">
					Passionné par le web et son évolution depuis les années 1990, j'ai récemment décidé d'en faire un projet professionnel. 
					J'ai travaillé par le passé dans le domaine paramédical, en tant qu'ambulancier, j'ai profité de cette expérience pour acquérir maturité, patience et responsabilité.<br />
					J'ai trouvé aujourd'hui dans le cadre de ma reconversion une motivation nouvelle, et une profonde satisfaction de pouvoir mettre à profit mes compétences professionnelles  dans ce qui m'a toujours passionné.
				</p>					
		</article>
		
		<section class="container boxes">
			<div class="col-md-3 col-sm-6 col-xs-12 photobox">
				<div class="photo"></div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 codebox">
				<div class="code"></div>
			</div>
			<div class="devbox col-md-5 col-sm-12 col-xs-12">
				<h3>Développement</h3>
				<span><i class="fa fa-angle-double-up fa-2x"></i><i class="fa fa-angle-double-up fa-2x"></i><i class="fa fa-angle-double-up fa-2x"></i><i class="fa fa-angle-double-up fa-2x"></i></span>
				<p class="paragraphe">
					J'ai commencé à étudier le développement en autodidacte en 2014, même si j'avais fréquemment touché à du code par le passé. J'aime travailler sur des projets à la fois ergonomiques, efficaces et attrayants. C'est pourquoi je m'efforce d'apprendre les technologies liées au développement, tout en ayant un goût prononcé pour le beau style.
				</p>
			</div>
		</section>

		<section class="fixed">			
				<p class="quote">"Le meilleur moyen de prédire l'avenir, c'est de l'inventer."</p>
				<p class="kay">Alan Kay</p>			
		</section>

		<article id="skills" class="container skillbox">
			<h3>Compétences</h3>
			<span><i class="fa fa-angle-double-up fa-2x"></i><i class="fa fa-angle-double-up fa-2x"></i><i class="fa fa-angle-double-up fa-2x"></i><i class="fa fa-angle-double-up fa-2x"></i></span>
			<p class="subtitle">
				<i class="fa fa-quote-left hidden-xs"></i>Ce que je sais faire, ce que je souhaite perfectionner, mes objectifs...<i class="fa fa-quote-right hidden-xs"></i>
			</p>

			<div>
		        <p class="paragraphe">Etant à l'aise dans le domaine de l'intégration et du responsive design, je cherche aujourd'hui à approfondir mes compétences en développement. Il est primordial pour moi d'allier le métier de développeur à celui d'intégrateur. Je souhaite à terme maîtriser PHP, ainsi qu'un ou plusieurs frameworks tels que Zend et Symfony. Dans ce but, je suis à la recherche d'un poste sur Lyon et sa région qui me permettra de développer mes compétences.</p>
		    </div>

		    <div class="col-md-6 comp">
		    	<div class="html col-md-4">
		    		<span data-tip="HTML5" tabindex="0">
		    		<button data-toggle="modal" href="#html" class="btn btn-primary bouton"><img class="img-responsive" src="images/logo-html5.png" alt="" /></button>
					</span>
					<div class="modal fade" id="html">
  						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">x</button>
									<h4 class="modal-title">HTML</h4>
								</div>
								<div class="modal-body">
									HTML5 est la dernière évolution du langage HTML, avec de nouveaux éléments, attributs et comportements ; mais aussi un ensemble plus large de technologies qui permettent des sites web plus variés et puissants, et des applications web.
								</div>
								<div class="modal-footer">
									<button class="btn btn-info" data-dismiss="modal">Fermer</button>
								</div>
							</div>
						</div>
					</div>
		    	</div>

		    	<div class="css col-md-4">
		    		<span data-tip="CSS3" tabindex="0">
		    		<button data-toggle="modal" href="#css" class="btn btn-primary bouton"><img class="img-responsive" src="images/logo-css3.png" alt="" /></button>
					</span>
					<div class="modal fade" id="css">
  						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">x</button>
									<h4 class="modal-title">CSS</h4>
								</div>
								<div class="modal-body">
									CSS3 est le dernier standard définissant CSS, langage informatique indispensable pour la mise en page, la présentation et la conception de sites web.
								</div>
								<div class="modal-footer">
									<button class="btn btn-info" data-dismiss="modal">Fermer</button>
								</div>
							</div>
						</div>
					</div>
		    	</div>

		    	<div class="bootstrap col-md-4">
		    		<span data-tip="Bootstrap" tabindex="0">
		    		<button data-toggle="modal" href="#bootstrap" class="btn btn-primary bouton"><img class="img-responsive" src="images/logo-bootstrap.png" alt="" /></button>
					</span>
					<div class="modal fade" id="bootstrap">
  						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">x</button>
									<h4 class="modal-title">Bootstrap</h4>
								</div>
								<div class="modal-body">
									Bootstrap est un framework de développement front-end, destiné à faciliter et accélérer le développement, notamment le responsive design. Bootstrap inclut des templates basés sur les fonctionnalités HTML / CSS, ainsi que quelques plugins Javascript.
								</div>
								<div class="modal-footer">
									<button class="btn btn-info" data-dismiss="modal">Fermer</button>
								</div>
							</div>
						</div>
					</div>
		    	</div>

		    	<div class="wordpress col-md-4">
		    		<span data-tip="Wordpress" tabindex="0">
		    		<button data-toggle="modal" href="#wordpress" class="btn btn-primary bouton"><img class="img-responsive" src="images/logo-wordpress.png" alt="" /></button>
					</span>
					<div class="modal fade" id="wordpress">
  						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">x</button>
									<h4 class="modal-title">Wordpress</h4>
								</div>
								<div class="modal-body">
									Wordpress est un CMS écrit en PHP, reposant sur une base de données MySQL. Ses fonctionnalités lui permettent de gérer n'importe quel site web. L’idée est de donner la possibilité de facilement créer du contenu sur le site, sans avoir à mettre les mains dans le code ni même avoir de connaissances techniques particulières.
								</div>
								<div class="modal-footer">
									<button class="btn btn-info" data-dismiss="modal">Fermer</button>
								</div>
							</div>
						</div>
					</div>
		    	</div>
		    
		    	<div class="php col-md-4">
		    		<span data-tip="PHP" tabindex="0">
		    		<button data-toggle="modal" href="#php" class="btn btn-primary bouton"><img class="img-responsive" src="images/logo-php.png" alt="" /></button>
					</span>
					<div class="modal fade" id="php">
  						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">x</button>
									<h4 class="modal-title">PHP</h4>
								</div>
								<div class="modal-body">
									PHP est un langage de programmation interprété, exécuté du côté serveur. Il est aujourd'hui considéré comme la base de la création des sites dits "dynamiques".
								</div>
								<div class="modal-footer">
									<button class="btn btn-info" data-dismiss="modal">Fermer</button>
								</div>
							</div>
						</div>
					</div>
		    	</div>

		    	<div class="jquery col-md-4">
		    		<span data-tip="JQuery" tabindex="0">
		    		<button data-toggle="modal" href="#jquery" class="btn btn-primary bouton"><img class="img-responsive" src="images/logo-jquery.png" alt="" /></button>
					</span>
					<div class="modal fade" id="jquery">
  						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">x</button>
									<h4 class="modal-title">JQuery</h4>
								</div>
								<div class="modal-body">
									JQuery est un framework Javascript libre, créé pour faciliter l'écriture de scripts côté client dans le code HTML des pages web. De la sélection d'éléments à la manipulation du DOM, en passant par l'animation, les requêtes AJAX, l'utilisation et la création de plugins... JQuery dispose de multiples facettes.
								</div>
								<div class="modal-footer">
									<button class="btn btn-info" data-dismiss="modal">Fermer</button>
								</div>
							</div>
						</div>
					</div>
		    	</div>

		    	<div class="mysql col-md-4">
		    		<span data-tip="MySQL" tabindex="0">
		    		<button data-toggle="modal" href="#mysql" class="btn btn-primary bouton"><img class="img-responsive" src="images/mysql-logo.png" alt="" /></button>
					</span>
					<div class="modal fade" id="mysql">
  						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">x</button>
									<h4 class="modal-title">MySQL</h4>
								</div>
								<div class="modal-body">
									MySQL est un système de gestion de bases de données relationnelles. Il permet entre autres de développer à moindre coût des applications de bases de données Web et intégrées fiables, hautement performantes et évolutives.
								</div>
								<div class="modal-footer">
									<button class="btn btn-info" data-dismiss="modal">Fermer</button>
								</div>
							</div>
						</div>
					</div>
		    	</div>

		    	<div class="git col-md-4">
		    		<span data-tip="Git" tabindex="0">
		    		<button data-toggle="modal" href="#git" class="btn btn-primary bouton"><img class="img-responsive" src="images/logo-git.png" alt="" /></button>
					</span>
					<div class="modal fade" id="git">
  						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">x</button>
									<h4 class="modal-title">Git - GitHub</h4>
								</div>
								<div class="modal-body">
									Git est un logiciel de gestion de versions. Sa principale tâche est de gérer l'évolution du contenu d'une arborescence.
								</div>
								<div class="modal-footer">
									<button class="btn btn-info" data-dismiss="modal">Fermer</button>
								</div>
							</div>
						</div>
					</div>
		    	</div>

		    	<div class="eclipse col-md-4">
		    		<span data-tip="Eclipse" tabindex="0">
		    		<button data-toggle="modal" href="#eclipse" class="btn btn-primary bouton"><img class="img-responsive" src="images/logo-eclipse.png" alt="" /></button>
		    		</span>
					<div class="modal fade" id="eclipse">
  						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">x</button>
									<h4 class="modal-title">Eclipse</h4>
								</div>
								<div class="modal-body">
									Eclipse est un projet visant à développer un environnement de production de logiciels libre qui soit extensible, universel et polyvalent, en s'appuyant principalement sur Java.
								</div>
								<div class="modal-footer">
									<button class="btn btn-info" data-dismiss="modal">Fermer</button>
								</div>
							</div>
						</div>
					</div>
		    	</div>
		    </div>	

			<div class="cv col-md-6">
			    <a href="assets/CV Manuel VERCUCQUE Dev Web.pdf" rel="nofollow" target="_blank">
				<img class="img-responsive" src="images/cv-pdf.png" alt="cv-logo" />
				<p>Télécharger mon CV</p>
				</a>			    		    
			</div>	        
		</article>

		<section id="projects">
			<div class="boxhead col-md-12">
				<h3>Mes Réalisations</h3>
				<span><i class="fa fa-angle-double-up fa-2x"></i><i class="fa fa-angle-double-up fa-2x"></i><i class="fa fa-angle-double-up fa-2x"></i><i class="fa fa-angle-double-up fa-2x"></i></span>	
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 projectbox">					
						<a class="bscreen" href="#kwoon" data-toggle="modal" data-tip="kwoon" tabindex="0">
			    			<span class="bouton2">Kwoon - Projet de Formation</span>
			    			<img class="img-responsive" src="images/screenshot-kwoon.jpg" alt="screenshot-kwoon" />
			    		</a>
			    		<div class="modal fade" id="kwoon">
	  						<div class="modal-dialog">
								<div class="modal-content content-projects">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">x</button>
										<h4 class="modal-title modal-title1">Kwoon</h4>
									</div>
									<div class="modal-body">
										<a href="projects/kwoon/projet-index.html" target=_blank><img src="images/screenshot-kwoon.jpg" class="img-responsive" alt="screenshot-kwoon" /></a>
									</div>
									<div class="modal-footer modal-footer1">
										<div class="col-md-6">Projet scolaire d'intégration<br /><em>Reproduction de template responsive</em></div>
										<div class="col-md-6">Technologies utilisées :
											<ul>
												<li>HTML5</li>
												<li>CSS3</li>
												<li>Bootstrap</li>
												<li>Javascript</li>
												<li>Plugins JQuery</li>
											</ul>
										</div>
										<button class="btn btn-info" data-dismiss="modal">Fermer</button>
									</div>
								</div>
							</div>
						</div>					
					</div>
					<div class="col-md-6 projectbox">				
						<a class="bscreen" href="#portfolio" data-toggle="modal" data-tip="portfolio" tabindex="0">
			    			<span class="bouton2">Mon Premier Portfolio</span>
			    			<img class="img-responsive" src="images/screenshot-portfolio.jpg" alt="screenshot-portfolio" />
			    		</a>
			    		<div class="modal fade" id="portfolio">
	  						<div class="modal-dialog">
								<div class="modal-content content-projects">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">x</button>
										<h4 class="modal-title modal-title1">Mon Premier Portfolio</h4>
									</div>
									<div class="modal-body">
										<a href="index.php" target=_blank><img src="images/screenshot-portfolio.jpg" class="img-responsive" alt="screenshot-portfolio" /></a>
									</div>
									<div class="modal-footer modal-footer1">
										<div class="col-md-6">Création de mon Portfolio<br /><em>Présentation &amp; Réalisations</em></div>
										<div class="col-md-6">Technologies utilisées :
											<ul>
												<li>HTML5</li>
												<li>CSS3</li>
												<li>Bootstrap</li>
												<li>PHP</li>
												<li>Plugins JQuery</li>
											</ul>
										</div>
										<button class="btn btn-info" data-dismiss="modal">Fermer</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>					
		</section>

		<section id="contact" class="container contact">
			<div class="boxhead col-md-12">
				<h3>Contactez moi</h3>
				<span><i class="fa fa-angle-double-up fa-2x"></i><i class="fa fa-angle-double-up fa-2x"></i><i class="fa fa-angle-double-up fa-2x"></i><i class="fa fa-angle-double-up fa-2x"></i></span>
			</div>
			<p>Pour de plus amples informations quant à ma recherche d'emploi à Lyon, ma situation actuelle, ainsi que pour toute proposition, n'hésitez pas à me contacter.</p>
			
			
			<div>
				<?php if(array_key_exists('errors',$_SESSION)){ ?>
    			<div class="alert alert-danger">
        		<?php implode('<br>', $_SESSION['errors']); ?>
    			</div>
  				<?php } ?>

  				<?php if(array_key_exists('success',$_SESSION)){ ?>
    			<div class="alert alert-success">
        			Votre email à bien été transmis !
    			</div>
  				<?php } ?>

  				<form action="traitement.php" method="post">    				
        				<div class="champ col-md-6">
            				<div class="form-group">
                				<label for="inputname">Votre nom</label>
                				<input required type="text" name="name" class="form-control" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
            				</div>
        				</div>

        				<div class="champ col-md-6">
          					<div class="form-group">
						 		<label for="inputemail">Votre email</label>
						    	<input required type="email" name="email" class="form-control" id="inputemail" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
							</div>
						</div>

						<div class="champ col-md-12">
					  		<div class="form-group">
					  			<label for="inputmessage">Votre message</label>
					  			<textarea required id="inputmessage" name="message" class="form-control"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
					  		</div>
					  	</div>

						<div class="champ col-md-12">
					  		<button type='submit' class='btn btn-primary'>Envoyer</button>
					  	</div>					
    			</form>
			</div>
			<p class="mailme">Ou écrivez-moi à : <a class="mail" href="mailto:manuelvercucque@gmail.com">manuelvercucque[at]gmail.com</a></p>
		</section>

		<footer class="container">
			<div class="hidden-xs footlogo">			
				<img class="logofooter" src="images/logoM.png" alt="logo-manuelweb" />
				<div class="intitfooter">ManuelWeb.fr</div>			
			</div>
			<div class="rights">
	            <p class="copyright">© 2015 ManuelWeb.fr</p>
	        </div>
	        <div class="social">
	        	<a class="github" href="https://github.com/Steele07" target=_blank><img class="img-responsive imggit" src="images/logo-github.png" alt="logo-git" />GitHub</a>
	            <ul class="footsocial">
	                <li class="twitter"><a href="https://twitter.com/ManuelVercucque" target=_blank title="Twitter"><img class="img-responsive" src="images/Twitter-icon.png" alt="twitter" /></a></li>
	                <li class="facebook"><a href="https://www.facebook.com/manuel.vercucque" target=_blank title="Facebook"><img class="img-responsive" src="images/icone_facebook.gif" alt="facebook" /></a></li>
	                <li class="linkedin"><a href="https://fr.linkedin.com/pub/manuel-vercucque/b7/79a/640" target=_blank title="LinkedIn"><img class="img-responsive" src="images/Linkedin-icon.png" alt="linkedin" /></a></li>
	                <li class="viadeo"><a href="http://www.viadeo.com/fr/profile/manuel.vercucque" target=_blank title="Viadeo"><img class="img-responsive" src="images/Viadeo.png" alt="viadeo" /></a></li>
	            </ul>
	        </div>         
        </footer>
        <a id="boutonfixe" href="#header"><i class="fa fa-arrow-up"></i></a>
	</main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
	</body>	
</html>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']); ?>