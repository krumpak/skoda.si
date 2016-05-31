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
	</head>
	<body>
	<div class="container-fluid">
<?php include_once('./php/top.php') ?>
		<main>
<?php include_once('./php/slider.php') ?>
<?php $a="active";include_once('./php/nav.php'); ?>
			<section>
				<div class="row">
					<div class="col-xs-12 col-sm-7 col-md-8 col-lg-5 col-lg-offset-2">
						<article>
							<div class="dodatna-oprema">
								<div>
									<h2>zunanja barva</h2>
									<p>Candy bela</p>
								</div>
								<div>
									<h2>sedežna prevleka Active črna</h2>
									<p>Barva notranjosti: sedež: črna - vrata:črna</p>
									<p>Preproga: črna</p>
									<p>Armaturne plošče: zgornji del: črna - spodnji del: črna</p>
								</div>
								<div>
									<h2>avtoradio "Swing"</h2>
									<p>5" barvni zaslon 400x240</p>
									<p>občutljiv na dotik</p>
									<p>dvojni FM sprejemnik vključno z RDS</p>
									<p>i-Pod povezava</p>
									<p>priključek za Aux-in in USB - čitalec za SD kartice</p>
									<p>4 x 20W</p>
								</div>
								<div>
									<h2>meglenka spredaj</h2>
								</div>
								<div>
									<h2>priprava za prostoročno telefoniranje</h2>
									<p>"Bluetooth"</p>
								</div>
								<div>
									<h2>rezervno kolo z jeklenim platiščem</h2>
								</div>
								<div>
									<h2>usenjen 3 kraki volan z malim usnjenim paketom</h2>
								</div>
							</div>
						</article>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
						<aside>
							<a href="#"><img src="./img/aside-1.jpg" alt="Škoda"></a>
							<a href="#"><img src="./img/aside-2.jpg" alt="Škoda"></a>
							<a href="#"><img src="./img/aside-3.jpg" alt="Škoda"></a>
						</aside>
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
