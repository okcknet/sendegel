<!doctype html>
<html>
	<head>
		<?php
			$pageTitle = "Videos";
			include 'include/head.php';
		?>
	</head>
	<body>
		<!--Header -->
		<?php include 'include/header.php' ?>

		<section class="section section5">
			<h1 class="page-title">Videos</h1>
			<div class="img-wrapper">
				<img src="/assets/images/content/bg-haberler.jpg" alt="" class="img-responsive">
			</div>
		</section>

		<section class="section section4">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-container align-center">
							<?php include 'include/modules/card6.php' ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="filter-container">
			<div class="error-text"></div>
			<div data-ajax-content></div>
			<div class="pagination" data-ajax-pagination>
				<div class="prev"></div>
				<a href="videos-2.php">
					<div class="next"></div>
				</a>
			</div>
		</div>

		<!-- Footer -->
		<?php include 'include/footer.php' ?>
	</body>
</html>