<!doctype html>
<?php require_once("../includes/config.php")?>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="../css/style.css">
  
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build incl. Respond.js
       Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects; 
       for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="../js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>

  <div id="container">
    <header class="clearfix">
		<div class="content">
		</div>
    </header>
    <div id="main" role="main">
		<div class="mainContent">
			<h1>ACM Student Chapter at Saginaw Valley</h1>
			<a href="<?php echo $site_root;?>">Home</a>
			<br />
			<div id="ajaxHolder">
			<?php
				if(!isset($_SESSION['user'])){
					include_once('login.php');
				}else{
					echo "<h2>HSPC Registration!</h2>";
					echo $_SESSION['user'];
				}
			?>
			</div>
		</div>
    </div>
    <footer>
		<div class="content">
		SVSU accepts no responsibility for the content of this page.
		Comments on this page should be directed to the page author.
		</div>
    </footer>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.3/jquery.min.js"></script> -->
  <!-- <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.3.min.js"><\/script>')</script> -->

  <script src="http://code.jquery.com/jquery-1.7b1.min.js"></script>
  <script>window.jQuery || document.write('<script src="../js/libs/jquery-1.7b1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script defer src="../js/slides.min.jquery.js"></script>
  <script defer src="../js/plugins.js"></script>
  <script defer src="../js/script.js"></script>
  <!-- end scripts -->


  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview'],['_trackPageLoadTime']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>
