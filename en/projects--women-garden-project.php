<!doctype html>
<html>
<head>
	<?php
			$pageTitle = "Women’s Garden Project";
			include 'include/head.php';
		?>
</head>
<body>
<!--Header -->
<?php include 'include/header.php' ?>

<section class="section section5">
	<h1 class="page-title">Women’s Garden Project</h1>
	<div class="img-wrapper">
		<img src="/assets/images/content/projects/bg-kadin-bahceleri-projesi.jpg" alt="" class="img-responsive">
	</div>
</section>

<section class="subpage">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="page-description">As Sen De Gel, we think sustainability is very important for our projects fighting against poverty.</h2>
				<div class="content">
					<p>More than 50% of the world's agriculture is done by small farmers. In a sense, small farmers who feed the world are struggling with many difficulties, especially in sub-Saharan Africa. Empowering small farmers is of vital importance in preventing hunger and poverty, especially in Africa.</p>
					<p><br/></p>
					<p><h2>Our Women's Gardens Project</h2></p>
					<p>It covers the fencing of a minimum 10,000m2 area in accordance with appropriate standards, cleaning it by making it suitable for agriculture, creating a water source by drilling and creating an irrigation system using solar energy. The main aim of the project is to provide employment for women by creating conditions where they can produce vegetables and to contribute to their own economy.</p>
					<p><h3>Project budget is 18500 USD.</h3></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section section11">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-container">
					<h3 class="section-title">Photos</h3>
					<div class="card5">
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12 card5-item">
								<a data-fancybox="images" href="../../assets/images/content/projects/kadin-bahceleri-l1.jpg" title="Fotoğraf">
									<div class="mask"><i class="icon icon-zoom"></i></div>
									<img src="../../assets/images/content/projects/kadin-bahceleri-s1.jpg" alt="Proje" width="255" height="255" class="img-responsive">
								</a>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 card5-item">
								<a data-fancybox="images" href="../../assets/images/content/projects/kadin-bahceleri-l2.jpg" title="Fotoğraf">
									<div class="mask"><i class="icon icon-zoom"></i></div>
									<img src="../../assets/images/content/projects/kadin-bahceleri-s2.jpg" alt="Proje" width="255" height="255" class="img-responsive">
								</a>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 card5-item">
								<a data-fancybox="images" href="../../assets/images/content/projects/kadin-bahceleri-l3.jpg" title="Fotoğraf">
									<div class="mask"><i class="icon icon-zoom"></i></div>
									<img src="../../assets/images/content/projects/kadin-bahceleri-s3.jpg" alt="Proje" width="255" height="255" class="img-responsive">
								</a>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 card5-item">
								<a data-fancybox="images" href="../../assets/images/content/projects/kadin-bahceleri-l4.jpg" title="Fotoğraf">
									<div class="mask"><i class="icon icon-zoom"></i></div>
									<img src="../../assets/images/content/projects/kadin-bahceleri-s4.jpg" alt="Proje" width="255" height="255" class="img-responsive">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-container align-center">
					<h1 class="section-title"><?php echo $projects["women_garden_projects"]["our-title-en"]; ?></h3>
					<iframe src="<?php echo $projects["women_garden_projects"]["file-en"]; ?>" width="100%" height="1000" allow="autoplay"></iframe>
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
					<h3 class="section-title wo-section-description">Our Projects</h3>
					<?php include 'include/modules/card--projects.php' ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Footer -->
<?php include 'include/footer.php' ?>
</body>
</html>
