<!doctype html>
<html>
<head>
	<?php
			$pageTitle = "Solar Panels Project";
			include 'include/head.php';
		?>
</head>
<body>
<!--Header -->
<?php include 'include/header.php' ?>

<section class="section section5">
	<h1 class="page-title">Solar Panels Project</h1>
	<div class="img-wrapper">
		<img src="/assets/images/content/projects/bg-solar-panel-projesi.jpg" alt="" class="img-responsive">
	</div>
</section>

<section class="subpage">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="page-description">As Sen De Gel, we manage our projects by taking the region and local people into consideration and by utilizing the most environmentally friendly methods. We use solar energy in many projects in order not to harm any field that we try to improve and in the easiest, safest, and most efficient way possible.</h2>
				<div class="content">
					<p><h2>Our Solar Water Supply Networks Project</h2></p>
					<p>The transportation of the water source created by deep drillings in relatively larger settlements into the village with solar energy and distribution channels includes putting it into use with taps installed at 12 different points. The aim of the project is to bring more radical and humane solutions to drinking water needs.</p>
					<p><h3>Our project budget is 18000 USD.</h3></p>
					<p><br/></p>
					<p><h2>Our Solar Energy Lighting (Solar Kit) Project</h2></p>
					<p>It is our project for people who spend their lives in darkness in villages where there is no electricity access. While we continue our fight against poverty with our sustainable projects, we aim to make people's lives more livable with solar energy systems. Our project, which was developed considering the needs of the region, is created by using solar energy without harming the environment.</p>
					<p>Families living in separate communal areas in villages are deprived of electricity. We want to provide solar energy kits where they can charge their phones and meet their lighting needs.</p>
					<p><b>A solar kit: 50 USD</b><br/>
					At least 2 solar kits are given to 1 household.<br/>
					<h3>Budget: 50 USD x 2 = 100 USD</h3></p>
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
								<a data-fancybox="images" href="../../assets/images/content/projects/solar-panel-projesi-l1.jpg" title="Fotoğraf">
									<div class="mask"><i class="icon icon-zoom"></i></div>
									<img src="../../assets/images/content/projects/solar-panel-projesi-s1.jpg" alt="Proje" width="255" height="255" class="img-responsive">
								</a>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 card5-item">
								<a data-fancybox="images" href="../../assets/images/content/projects/solar-panel-projesi-l2.jpg" title="Fotoğraf">
									<div class="mask"><i class="icon icon-zoom"></i></div>
									<img src="../../assets/images/content/projects/solar-panel-projesi-s2.jpg" alt="Proje" width="255" height="255" class="img-responsive">
								</a>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 card5-item">
								<a data-fancybox="images" href="../../assets/images/content/projects/solar-panel-projesi-l3.jpg" title="Fotoğraf">
									<div class="mask"><i class="icon icon-zoom"></i></div>
									<img src="../../assets/images/content/projects/solar-panel-projesi-s3.jpg" alt="Proje" width="255" height="255" class="img-responsive">
								</a>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12 card5-item">
								<a data-fancybox="images" href="../../assets/images/content/projects/solar-panel-projesi-l4.jpg" title="Fotoğraf">
									<div class="mask"><i class="icon icon-zoom"></i></div>
									<img src="../../assets/images/content/projects/solar-panel-projesi-s4.jpg" alt="Proje" width="255" height="255" class="img-responsive">
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
					<h1 class="section-title"><?php echo $projects["solar_panel_projects"]["our-title-en"]; ?></h3>
					<iframe src="<?php echo $projects["solar_panel_projects"]["file-en"]; ?>" width="100%" height="1000" allow="autoplay"></iframe>
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
