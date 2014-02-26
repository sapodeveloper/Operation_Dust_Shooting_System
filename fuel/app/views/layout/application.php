<!DOCTYPE html>
<html lang="ja" >
	<head>
		<meta charset="utf-8">
		<title>見回り集計システム</title>
		<?php echo Asset::css('uikit.gradient.css'); ?>
		<?php echo Asset::css('font-awesome.css'); ?>
		<?php echo Asset::css('base/jquery.ui.all.css'); ?>
		<?php echo Asset::js('jquery.js'); ?>
		<?php echo Asset::js('uikit.js'); ?>
		<?php echo Asset::js('ui/jquery-ui.js'); ?>
		<?php echo Asset::js('ui/i18n/jquery.ui.datepicker-ja.js'); ?>
		<?php echo Asset::js('jquery.tooltipster.js'); ?>
		<script>
			<!--
			jQuery( function() {
			    jQuery( '#jquery-ui-datepicker' ) . datepicker();
			} );
			// -->
		</script>
	</head>
	<body class="tm-background">

	<!-- Navigation Bar-->
	<nav class="tm-navbar uk-navbar uk-navbar-attached">
		<a href="#" class="uk-navbar-brand"><i class="fa fa-calendar"></i>&nbsp;見回り集計システム</a>
	</nav>
	
	<!-- Padding -->
	<br>
	
	<!-- Contents -->
	<div class="uk-grid" data-uk-grid-margin>
		<div class="tm-main uk-width-medium-1-1">
			<div class="uk-grid">
				<div class="uk-width-medium-1-10">&nbsp;</div>
				<div class="uk-width-medium-8-10">
					<article class="uk-articleuk-panel uk-panel-box">
						<?php echo $contents; ?>
					</article>
				</div>
			</div>	
		</div>
	</div>
	
	<!-- footer -->
	<footer>
		<div style="text-align: center; font-size: small;">
			<br>
			<h6>Copyright ©<?php echo date('Y'); ?> HIT ISMC Support Center All Rights Reserved.</h6>
		</div>
	</footer>
	
	</body>
</html>
