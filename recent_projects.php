<?php
function place_images($dir, $galery) {
	foreach(glob($dir.'*.*') as $filename){
		echo '<a class="fancybox" rel="fancybox" data-fancybox-group="',$galery,'"  href="',$filename,'">';
		echo '<img src="',str_replace("screenshots", "screenshots_thumbs", $filename),'" alt="',basename($filename),'">';
		echo '</a>';
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Resume Rik Vanmechelen</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Curriculum Vitae of Rik Vanmechelen">
	<meta name="author" content="Rik Vanmechelen">
		
	<!-- Styles --> 
	<link href="assets/stylesheets/styles.css" rel="stylesheet">
	<link href="assets/stylesheets/styles.css" rel="stylesheet" media="print">
	
	<script src="assets/javascripts/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="assets/javascripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="http://fancyapps.com/fancybox/source/jquery.fancybox.js"></script>
	
	<script src="assets/javascripts/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox -->
	<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js"></script>

	<!-- Optionally add helpers - button, thumbnail and/or media -->
	<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js"></script>

	<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>	


	<script src="assets/javascripts/script.js" type="text/javascript" charset="utf-8"></script>	
	
</head>
<body>

	<div id="container" class="container clearfix content">

		<div class="navbar navbar-inverse navbar-fixed-top no_print">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a href="/" class="brand">Rik Vanmechelen</a>
					<div class="nav-collapse">
						<ul class="nav pull-left">
							<li> <a href="recent_projects.php" data-remote="true">Recent Projects</a> </li>
							<!-- <li class="divider-vertical"></li>
							<li class="hilight"> <a href="pictures.html">Pictures</a>  </li> -->
						</ul>
						<ul class="nav pull-right">
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="header">

			<div class="row-fluid header-inner">		
				<div class="span2 pull-left">
					<img src="assets/images/rik.JPG" class="img-polaroid">
				</div>
				<div class="span10 ">
					<div class="name-text">My Fairly Recent Projects</div>
				</div>
				
				<!--/contacts-->

			</div>

		</div><!-- /header -->

		<div class="main">  	

			<div class="row-fluid">
				<div class="span3 section-title">
					WiSport
				</div>

				<div class="span9 section-body">
					<div class="row-fluid">
						<div class="span8">
							<div class="item-name">Track, share and log workouts</div>
							<div class="item-desc">by Rik Vanmechelen, Roeland Matthijssens and Ayrton Vercruysse</div>
						</div>	
						<div class="span2 align-right">
							<a class="icon" href="project-resources/wisport/WiSport_Final_document.pdf" target="_blank" rel="tooltip" data-original-title="Download Report">
								<img class="pdf-attachment" src="assets/images/pdf_icon.png" >
							</a>
							<a href="https://github.com/rikvanmechelen/web_info_sys_sport" class="zocial icon github" rel="tooltip" data-original-title="GitHub"></a>
						</div>
						<div class="span2">
							<div class="item-period pull-right">winter 2012</div>
						</div>
					</div>
					<div class="row-fluid margin-top-10">
						<p>WiSport offers its users a means to log and plan their personal training sessions. <br />
							A user can either use a session made by someone else, or create a training session of his own.
							When creating a training session the user can again, use exercises he created, or use exercises created by other people.<br />
							When a session is performed, the user will be presented with some nice graphs of his progress.
						</p>
					</div>
					<div class="row-fluid galery">
						<p style="display: block;">
							<?php
								place_images("project-resources/wisport/screenshots/", "WiSport_gallery");
							?>						
						</p>
					</div>
				</div>
				
			</div>	        	

			<div class="seperator"></div>
			
			<div class="row-fluid">
				<div class="span3 section-title">
					justPoker
				</div>
				<div class="span9 section-body">
					<div class="row-fluid">
						<div class="span8">
							<div class="item-name">Play poker, together digitally.</div>
							<div class="item-desc">by Rik Vanmechelen and Roeland Matthijssens</div>
						</div>	
						<div class="span2 align-right">
							<a href="https://github.com/rikvanmechelen/justPoker" class="zocial icon github" rel="tooltip" data-original-title="GitHub"></a>
						</div>
						<div class="span2">
							<div class="item-period pull-right">winter 2012</div>
						</div>
					</div>
					<div class="row-fluid margin-top-10">
						<p>JustPoker was created because we like to play poker with friends, but we are rather impatient. 
							When you are playing with 8 players you always have to poke them when it's their turn, when you have to collect the cards, etc.. <br />
							With justPoker this is managed by the application. You have a device in the middle, which acts as dealer and will show the cards that are on the table.<br />
							The player's device will be notified when it his/her turn and they will be dealt new cards automatically. 
						</p>
					</div>
					<div class="row-fluid galery">
						<p style="display: block;">
							<?php
								place_images("project-resources/justpoker/screenshots/", "justPoker_gallery");
							?>
							<a class="fancybox" rel="fancybox" data-fancybox-group="justPoker_gallery"  href="http://www.youtube.com/watch?v=tDZ9V6D-Y4U">
								<img src="project-resources/justpoker/video_thumb.png" alt="Video">
							</a>
						</p>
					</div>
				</div>
			</div>	        	

			<div class="seperator"></div>

			<div class="row-fluid">
				<div class="span3 section-title">
					UI - design
				</div>

				<div class="span9 section-body">
					<div class="row-fluid">
						<div class="span8">
							<div class="item-name">Desktop like app in the cloud</div>
							<div class="item-desc">by Rik Vanmechelen, Roeland Matthijssens and Thiery Janssens</div>
						</div>	
						<div class="span2 align-right">
							<a class="icon" href="project-resources/ui-design/UI-rivmeche-rmatthij-thiejans.pdf" target="_blank" rel="tooltip" data-original-title="Download Report">
								<img class="pdf-attachment" src="assets/images/pdf_icon.png" >
							</a>
						</div>
						<div class="span2">
							<div class="item-period pull-right">winter 2011</div>
						</div>
					</div>
					<div class="row-fluid margin-top-10">
						<p>For the University course "User Interface Design" by prof. Olga De Troyer we had to create a user interface by using the WSDM. <br />
							In this project we started to play with "floating forms". This means that in stead of having the form on a separate page, the form will popup, graying out the background.
						</p>
					</div>
					<div class="row-fluid galery">
						<p style="display: block;">
							<?php
								place_images("project-resources/ui-design/screenshots/", "ui-design_gallery");
							?>						
						</p>
					</div>
				</div>
			</div>	        	

			<div class="seperator"></div>
			
			<div class="row-fluid">
				<div class="span3 section-title">
					Cursusdienst.net
				</div>

				<div class="span9 section-body">
					<div class="row-fluid">
						<div class="span8">
							<div class="item-name">Course material by students for students</div>
							<div class="item-desc">by Rik Vanmechelen, Roeland Matthijssens</div>
						</div>	
						<div class="span2 align-right">
							
						</div>
						<div class="span2">
							<div class="item-period pull-right">2011</div>
						</div>
					</div>
					<div class="row-fluid margin-top-10">
						<p>
							In 2011 the student organizations of the VUB united to sell course material to the students. They needed a platform on which each organization could manage their personal content and supply, while still keeping the management side unified. This platform is what they are currently using. <br />
							The platform processed more than 3000 orders for a total revenue of over 31000 EUR.
							Visit <a href="www.cursusdienst.net">cursusdienst.net</a> to check it out. 
						</p>
					</div>
					<div class="row-fluid galery">
						<p style="display: block;">
							<?php
								place_images("project-resources/cursusdienst/screenshots/", "cursusdienst_gallery");
							?>						
						</p>
					</div>
				</div>
			</div>	        	

			<div class="seperator"></div>

			<div class="clearfix margin-bottom-10 pull-right no_print">
				<a class="dotted" href="javascript:;"
				onclick="jQuery('html,body').animate({scrollTop: jQuery('.header').offset().top}, 'slow');"
				>	
				top
			</a>
		</div>

	</div> <!-- /main -->

</div> <!-- /container -->
</body>
</html>	

