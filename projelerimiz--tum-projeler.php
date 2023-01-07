<!doctype html>
<html>
	<head>
		<?php
			$pageTitle = "Tüm Projelerimiz";
			include 'include/head.php';
		?>
	</head>

	<body>
		<?php include 'include/header.php' ?>

			<section class="section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-container align-center">
								<h1 class="section-title">Tüm Projelerimizin Listesi</h3>
								<iframe src="https://drive.google.com/file/d/1R2nls2EvAGBpN4N37KxsyeGwUxAG3NVU/preview" width="100%" height="1000" allow="autoplay"></iframe>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="section section3">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="section-container align-center">
								<h3 class="section-title wo-section-description">Projelerimiz</h3>
								<?php include 'include/modules/card--projelerimiz.php' ?>
							</div>
						</div>
					</div>
				</div>
			</section>

		<?php include 'include/footer.php' ?>
	</body>
</html>