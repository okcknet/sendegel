<!doctype html>
<html>
	<head>
		<?php
			$pageTitle = "Güncel Faaliyet Raporu";
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
								<h1 class="section-title"><?php echo $reports["annual_reports"]["current"]["tr"]["title"]; ?></h3>
								<iframe src="<?php echo $reports["annual_reports"]["current"]["tr"]["file"]; ?>" width="100%" height="2000" allow="autoplay"></iframe>
							</div>
						</div>
					</div>
				</div>
			</section>

		<?php include 'include/footer.php' ?>
	</body>
</html>