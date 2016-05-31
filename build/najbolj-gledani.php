<!DOCTYPE html>
<html>
	<head>
		<title>Škoda Slovenija</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="./fonts/SkodaPro.css">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<script type="text/javascript" src="./js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="./js/bootstrap.min.js"></script>
		<script src="./js/jquery.mobile.custom.min.js"></script>
		<script type="text/javascript" src="./js/range.min.js"></script>
	</head>
	<body>
	<div class="container-fluid">
<?php include_once('./php/top.php') ?>
		<main>
<?php include_once('./php/slider.php') ?>
<?php include_once('./php/switches.php'); ?>
			<section>
				<div class="row">
					<div class="col-xs-12 col-lg-8 col-lg-offset-2">
						<article>
							<div class="row">
								<div id="most-deliverable-title" class="col-md-12">
									Takoj dobavljivi modeli
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<ul id="most-deliverable">
										<li>
											<img src="./img/a_citigo.jpg" alt="Škoda">
											<p>Citigo <span class="green">(9)</span></p>
										</li>
										<li>
											<img src="./img/a_fabia.jpg" alt="Škoda">
											<p>Fabia <span class="green">(15)</span></p>
										</li>
										<li class="not-available">
											<img src="./img/a_fabia_combi.jpg" alt="Škoda">
											<p>Citigo <span class="green">(0)</span></p>
										</li>
										<li>
											<img src="./img/a_rapid.jpg" alt="Škoda">
											<p>Rapid <span class="green">(21)</span></p>
										</li>
										<li>
											<img src="./img/a_rapid-spaceback.jpg" alt="Škoda">
											<p>Rapid Spaceback <span class="green">(19)</span></p>
										</li>
										<li>
											<img src="./img/a_octavia.jpg" alt="Škoda">
											<p>Octavia <span class="green">(17)</span></p>
										</li>
										<li>
											<img src="./img/a_octavia-combi.jpg" alt="Škoda">
											<p>Octavia Combi <span class="green">(14)</span></p>
										</li>
										<li>
											<img src="./img/a_yeti.jpg" alt="Škoda">
											<p>Yeti <span class="green">(12)</span></p>
										</li>
										<li>
											<img src="./img/a_superb.jpg" alt="Škoda">
											<p>Superb <span class="green">(2)</span></p>
										</li>
										<li>
											<img src="./img/a_superb-combi.jpg" alt="Škoda">
											<p>Superb Combi <span class="green">(1)</span></p>
										</li>
									</ul>
								</div>
							</div>
							<div class="row">
								<div id="most-viewed-title" class="col-xs-12">
									Najbolj gledani modeli
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-4 most-viewed">
									<div class="most-viewed-img" style="background-image: url('./img/najbolj-gledani-model_a.jpg');">
										<div class="most-viewed-sub-img" style="background-image: url('./img/najbolj-gledani-model-sub_a.jpg');"></div>
									</div>
									<div class="model-content">
										<div class="model-padding">
											<p><strong>Octavia Active 1.2 TSI</strong></p>
											<p><small>bencin / 86 KM/63 kW / 5-stopenjski / 5-vrat</small></p>
											<p class="most-viewed-highlight"><strong>21.158,86 €</strong><mark class="green">17.158,86 €</mark></p>
										</div>
										<div class="most-viewed-bottom">
											<small>
												Preveri opremo
												<span class="glyphicon glyphicon-menu-up"></span>
											</small>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4 most-viewed">
									<div class="most-viewed-img" style="background-image: url('./img/najbolj-gledani-model_b.jpg');">
										<div class="most-viewed-sub-img" style="background-image: url('./img/najbolj-gledani-model-sub_b.jpg');"></div>
									</div>
									<div class="model-content">
										<div class="model-padding">
											<p><strong>Octavia Active 1.2 TSI</strong></p>
											<p><small>bencin / 86 KM/63 kW / 5-stopenjski / 5-vrat</small></p>
											<p class="most-viewed-highlight"><strong>21.158,86 €</strong><mark class="green">17.158,86 €</mark></p>
										</div>
										<div class="most-viewed-bottom">
											<small>
												Preveri opremo
												<span class="glyphicon glyphicon-menu-up"></span>
											</small>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4 most-viewed-assets">
									<div>
										<strong>Oprema</strong>
										<ul>
											<li><span>6 zračnih blazin (sprednji zračni blazini za voznika in sovoznika, stranski zračni zavesi in stranski zračni blazini spredaj)</span></li>
											<li><span>avtoradio “SWING” s CD in MP3 predvajalnikom ter 4 zvočniki spredaj</span></li>
											<li><span>klimatska naprava</span></li>
											<li><span>centralno zaklepanje z daljinskim upravljalnikom</span></li>
											<li><span>ESC z ABS, EBV, MSR, ASR, EDS, MBA in DSR</span></li>
											<li><span>meglenke spredaj in zadaj</span></li>
											<li><span>pritrdišča za namestitev otroškega sedeža “ISOFIX”</span></li>
											<li><span>sredinski naslon za roke spredaj</span></li>
											<li><span>“OFF ROAD” funkcija za pomoč vozniku</span></li>
										</ul>
									</div>
								</div>
							</div>
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
