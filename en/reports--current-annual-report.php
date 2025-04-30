<!doctype html>
<html>
<head>
<?php
	$pageTitle = "Our All Projects";
	include 'include/head.php';
?>
</head>
<body>
<!--Header -->
<?php include 'include/header.php' ?>

<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-container align-center">
					<h1 class="section-title"><?php echo $reports["current"]["our-title-en"]; ?></h3>
					<iframe src="<?php echo $reports["current"]["file-en"]; ?>" width="100%" height="2000" allow="autoplay"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Footer -->
<?php include 'include/footer.php' ?>
</body>
</html>