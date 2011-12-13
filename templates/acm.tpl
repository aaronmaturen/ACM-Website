{include file="header.tpl" pageTitle={$pageTitle}}

<div id="main" role="main">
	<div class="mainContent">
		<h1>{$pageHeader}</h1>
		{$breadcrumbs}
		<br />
		<div id="ajaxHolder">
			<h2>{$contentHeader}</h2>
			<p>{$contentHTML}</p>
		</div>
	</div>
</div>

{include file="footer.tpl" footerText={$footerText}}