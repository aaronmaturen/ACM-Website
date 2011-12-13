<?php
 /**
 * Brand Spankin' new acm website
 */

require('libs/Smarty.class.php');
require_once('includes/config.php');

$smarty = new Smarty;


//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

//$smarty->assign("Name","Fred Irving Johnathan Bradley Peppergill",true);
$smarty->assign("pageTitle","ACM");

$smarty->assign("pageHeader","ACM Student Chapter at Saginaw Valley");
$smarty->assign("breadcrumbs","<a href=\"home\">Home</a> / <a href=\"<?php echo $site_root;?>/hspc\">HSPC</a>");

$smarty->assign("contentHeader","Welcome to ACM at SVSU");
$smarty->assign("contentHTML","The Association for Computing Machinery(ACM) is a group on campus for Students, Staff, and Faculty to promote Computer Science in our community and on our campus. Meetings are on Thursdays at 4:00pm in SE121. Come stop by and talk with us a bit.");

$smarty->assign("footerText","SVSU accepts no responsibility for the content of this page. Comments on this page should be directed to the page author.");
$smarty->display('templates/acm.tpl');
?>
