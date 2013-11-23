<?php
function place_pics($dir) {
	foreach(glob($dir.'*.*') as $filename){
		echo '<a class="fancybox" rel="fancybox" data-fancybox-group="',"pics",'"  href="',$filename,'">';
		echo '<img src="',str_replace("pics", "pics_thumbs", $filename),'" alt="',basename($filename),'">';
		echo '</a>';
	};
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Some Pictures</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Curriculum Vitae of Rik Vanmechelen">
	<meta name="author" content="Rik Vanmechelen">
		
	<!-- Styles --> 
	<link href="/assets/stylesheets/styles.css" rel="stylesheet">
	<link href="/assets/stylesheets/styles.css" rel="stylesheet" media="print">
	
	<script src="/assets/javascripts/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/assets/javascripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="http://fancyapps.com/fancybox/source/jquery.fancybox.js"></script>
	
	<script src="/assets/javascripts/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox -->
	<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js"></script>

	<!-- Optionally add helpers - button, thumbnail and/or media -->
	<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
	<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
	<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js"></script>

	<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
	<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>	


	<script src="/assets/javascripts/script.js" type="text/javascript" charset="utf-8"></script>	
	
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
							<li> <a href="/recent_projects.php" data-remote="true">Recent Projects</a> </li>
							<li class="hilight"> <a href="#" data-remote="true">Private</a> </li>
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
				</div>
				<div class="span10 ">
					<div class="name-text">Some Pictures :)</div>
				</div>
				
				<!--/contacts-->

			</div>

		</div><!-- /header -->

		<div class="main">  	

			<div class="row-fluid">
				<div class="row-fluid galery">
					<p style="display: block;">
						<?php
							place_pics("resources/pics/");
						?>						
					</p>
				</div>
				
			</div>	        	

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

