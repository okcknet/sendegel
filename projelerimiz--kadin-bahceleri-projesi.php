<!doctype html>
<html>
	<head>
		<?php
			$pageTitle = "Kadın Bahçeleri Projesi";
			include 'include/head.php';
		?>
	</head>

	<body>
		<?php include 'include/header.php' ?>

<section class="section section5">
	<h1 class="page-title">Kadın Bahçeleri Projesi</h1>
	<div class="img-wrapper">
		<img src="/assets/images/content/projects/bg-kadin-bahceleri-projesi.jpg" alt="" class="img-responsive">
	</div>
</section>

<section class="subpage">

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<h2 class="page-description">Sen De Gel olarak yoksullukla mücadelede, projelerimizde sürdürebilirliğe önem veriyoruz. Yardıma ihtiyacı bulunan bölgelerde, tarımı Tohum Projeleri ile destekliyoruz.</h2>

				<div class="content">

				<p>Dünyada yapılan tarımın %50'sinden fazlası küçük çiftçiler tarafından yapılmaktadır. Bir anlamda dünyayı besleyen küçük çiftçiler özellikle sahra altı Afrikası'nda bir çok güçlükle mücadele etmektedir. Küçük çiftçilerin güçlendirilmesi özellikle Afrika'da açlığın ve yoksulluğun önlenmesi noktasında hayati önem taşımaktadır.</p>

				<p><br/></p>

				<p><h2>Kadın Bahçeleri Projemiz</h2></p>

				<p>Minimum 10,000m2 lik bir alanın uygun standartlarda çitlenmesi, tarıma uygun hale getirilerek temizlenmesi, sondajla su kaynağı yaratılması ve güneş enerjisi kullanılarak sulama sistemi oluşturulmasını kapsamaktadır. Projenin temel amacı; kadınlara sebze üretebilecekleri koşulları yaratarak istihdam sağlamak, kendi ekonomilerini oluşturmalarına katkıda bulunmaktır. </p>

				<p><h3>Proje bütçesi 18500 USD’dir</h3></p>

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

					<h3 class="section-title">Fotoğraflar</h3>

					<div class="card5">
						<div class="row">

							<div class="col-md-3 col-sm-6 col-xs-12 card5-item">
								<a data-fancybox="images" href="../assets/images/content/projects/kadin-bahceleri-l1.jpg" title="Fotoğraf">
									<div class="mask"><i class="icon icon-zoom"></i></div>
									<img src="../assets/images/content/projects/kadin-bahceleri-s1.jpg" alt="Proje" width="255" height="255" class="img-responsive">
								</a>
							</div>

							<div class="col-md-3 col-sm-6 col-xs-12 card5-item">
								<a data-fancybox="images" href="../assets/images/content/projects/kadin-bahceleri-l2.jpg" title="Fotoğraf">
									<div class="mask"><i class="icon icon-zoom"></i></div>
									<img src="../assets/images/content/projects/kadin-bahceleri-s2.jpg" alt="Proje" width="255" height="255" class="img-responsive">
								</a>
							</div>

							<div class="col-md-3 col-sm-6 col-xs-12 card5-item">
								<a data-fancybox="images" href="../assets/images/content/projects/kadin-bahceleri-l3.jpg" title="Fotoğraf">
									<div class="mask"><i class="icon icon-zoom"></i></div>
									<img src="../assets/images/content/projects/kadin-bahceleri-s3.jpg" alt="Proje" width="255" height="255" class="img-responsive">
								</a>
							</div>

							<div class="col-md-3 col-sm-6 col-xs-12 card5-item">
								<a data-fancybox="images" href="../assets/images/content/projects/kadin-bahceleri-l4.jpg" title="Fotoğraf">
									<div class="mask"><i class="icon icon-zoom"></i></div>
									<img src="../assets/images/content/projects/kadin-bahceleri-s4.jpg" alt="Proje" width="255" height="255" class="img-responsive">
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
					<h1 class="section-title"><?php echo $projects["women_garden_projects"]["our-title"]; ?></h3>
					<iframe src="<?php echo $projects["women_garden_projects"]["file"]; ?>" width="100%" height="1000" allow="autoplay"></iframe>
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