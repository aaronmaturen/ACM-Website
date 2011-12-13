<?php /* Smarty version Smarty-3.1.6, created on 2011-12-13 18:10:58
         compiled from "./templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14504720584ee786693620b5-48803364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a4f6f0d327fc7bc3ea86f63906a1bf934ca50c7' => 
    array (
      0 => './templates/footer.tpl',
      1 => 1323796241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14504720584ee786693620b5-48803364',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_4ee78669384a4',
  'variables' => 
  array (
    'footerText' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ee78669384a4')) {function content_4ee78669384a4($_smarty_tpl) {?><footer>
	<div class="content">
		<?php echo $_smarty_tpl->tpl_vars['footerText']->value;?>

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
</html><?php }} ?>