<!DOCTYPE html>
<html>
	<head>
		<title>Škoda Slovenija</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./fonts/SkodaPro.css">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<script type="text/javascript" src="./js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="./js/bootstrap.min.js"></script>
		<script src="./js/jquery.mobile.custom.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
	<div class="container-fluid">
<?php include_once('./php/top.php') ?>
		<main>
<?php include_once('./php/slider.php') ?>
<?php $c="active";include_once('./php/nav.php'); ?>
			<section>
				<div class="row">
					<div class="col-xs-12 col-lg-8 col-lg-offset-2">
						<article>
							<!-- Google Maps -->
							<iframe class="google-maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2776.1374781888408!2d15.02294691580116!3d45.90856111170302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47651b55716e6835%3A0xd8ff34c845daa067!2sBartog+d.o.o.+Trebnje!5e0!3m2!1ssl!2ssi!4v1448905954853" frameborder="0" style="border:0" allowfullscreen></iframe>
						</article>
					</div>
				</div>
			</section>
<?php include_once('./php/footer.php') ?>
		</main>
	</div>

<?php include_once('./php/modal.php') ?>

<script type="text/javascript" src="./js/script.js"></script>

<?php include_once('./php/time-logger.php') ?>
</body>
</html>
