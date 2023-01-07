<!doctype html>
<html>
	<head>
		<?php
			$pageTitle = "Our Projects";
			include '../include/head.php';
		?>
	</head>
	<body>
		<!--Header -->
		<?php include 'include/header.php' ?>

		<section class="section section5">
			<h1 class="page-title">Our Projects</h1>
			<div class="img-wrapper">
				<img src="/assets/images/content/bg-neleryapiyoruz.jpg" alt="" class="img-responsive">
			</div>
		</section>

		<section class="subpage">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
					<?php include 'include/modules/section-description.php' ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="module card card1 v2">
							<div class="card1-item">
								<i class="icon icon-leaf"></i>
								<h4 class="card1-title">Improvement</h4>
								<p>We plan to improve the life standards of people of the least developed countries through our regional improvement and economic development programs.</p>
							</div>
							<div class="card1-item">
								<i class="icon icon-dot-circle"></i>
								<h4 class="card1-title">Empowerment</h4>
								<p>We plan to empower and ensure social development of women and youth through our specifically targeted micro credit programs.</p>
							</div>
							<div class="card1-item">
								<i class="icon icon-graph"></i>
								<h4 class="card1-title">Sustainable Development</h4>
								<p>We plan to ensure sustainable economic development in the regions we work through water well, agriculture and animal husbandry projects, vocational trainings, and micro credit applications.</p>
							</div>
						</div>
					</div>
				</div>
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

		<?php include 'include/modules/section8.php' ?>

		<!-- Footer -->
		<?php include 'include/footer.php' ?>
	</body>
</html>