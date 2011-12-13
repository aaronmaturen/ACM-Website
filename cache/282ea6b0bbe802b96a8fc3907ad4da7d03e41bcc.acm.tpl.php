<?php /*%%SmartyHeaderCode:8949117694ee77e89ce73c3-94731008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '282ea6b0bbe802b96a8fc3907ad4da7d03e41bcc' => 
    array (
      0 => 'templates/acm.tpl',
      1 => 1323794035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8949117694ee77e89ce73c3-94731008',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ee77e89d829f',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ee77e89d829f')) {function content_4ee77e89d829f($_smarty_tpl) {?><!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php echo '<?php'; ?> require_once('includes/config.php');<?php echo '?>'; ?>
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

  <link rel="stylesheet" href="css/style.css">
  
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build incl. Respond.js
       Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects; 
       for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
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
			<a href="home">Home</a> / 
			<a href="<?php echo '<?php'; ?> echo $site_root;<?php echo '?>'; ?>/hspc">HSPC</a> 
			<br />
			<div id="ajaxHolder">
			<h2>Welcome to ACM at SVSU</h2>
				<p>
					The Association for Computing Machinery(ACM) is a group on campus for Students, Staff, and Faculty to promote Computer Science in our community and on our campus. Meetings are on Thursdays at 4:00pm in SE121. Come stop by and talk with us a bit.
				</p>
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
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7b1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script defer src="js/slides.min.jquery.js"></script>
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <script defer src="js/chromeFrame.js"></script>
  <!-- end scripts -->

</body>
</html>
<?php }} ?>