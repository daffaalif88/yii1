<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
		media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
		media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<!-- <link rel="stylesheet" href="../../../assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
	<script src="../../../assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script> -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/bootstrap/css/bootstrap.min.css">
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
		integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
		integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
	</script>

	<!-- Letakkan kode JavaScript ini di bawah file jQuery dan Bootstrap -->
	<script>
		$(document).ready(function () {
			$('.dropdown-toggle').dropdown(); // Inisialisasi dropdown
		});


		$(document).ready(function () {
			// Smooth scrolling for all links
			$("a").on('click', function (event) {
				if (this.hash !== "") {
					event.preventDefault();
					var hash = this.hash;
					$('html, body').animate({
						scrollTop: $(hash).offset().top
					}, 800, function () {
						window.location.hash = hash;
					});
				}
			});
		});
	</script>

	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


	<style>
		/* p,h1,h2,h3,h4,h5,h6 {
			color: antiquewhite;
		} */

		html {
			scroll-behavior: smooth;
		}
	</style>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body style="background-color: darkgrey;" class="container">

	<div id="page" style="background-color:ghostwhite">
		<?php $this->renderPartial('//layouts/navbar'); ?>


		<?php if (isset($this->breadcrumbs)) : ?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links' => $this->breadcrumbs,
			)); ?>
		<!-- breadcrumbs -->
		<?php endif ?>

		<?php echo $content; ?>

		<div class="clear"></div>

		<?php $this->renderPartial('//layouts/footer'); ?>


	</div><!-- page -->

</body>

</html>