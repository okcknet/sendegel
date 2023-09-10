<!doctype html>
<html>
	<head>
		<?php
			$pageTitle = "Homepage";
			include 'include/head.php';
			include __DIR__ . 'assets/data/site-data.php';
		?>
	</head>
	<body>
		<!--Header -->
		<?php include 'include/header.php' ?>
		<!-- Slider - Carousel -->
		<?php include 'include/modules/banner1.php' ?>
		<!-- Biz Kimiz -->
		<?php include 'include/modules/section1.php' ?>
		<!-- Neler Yapıyoruz? -->
		<?php include 'include/modules/section2.php' ?>
		<!-- Çalışma Alanlarımız -->
		<?php echo __DIR__ ?>
		<section class="section section3">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-container align-center">
							<h3 class="section-title wo-section-description">Our Projects</h3>
							<?php include 'include/modules/card--projects.php' ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Güncel Haberler -->
		<?php include 'include/modules/section4.php' ?>
		<!--Videolarımız -->
		<?php include 'include/modules/section5.php' ?>
		<!-- Footer -->
		<?php include 'include/footer.php' ?>
	</body>
</html>