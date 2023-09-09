<!doctype html>
<html>
	<head>
		<?php
		$pageTitle = "Projelerimiz";
		include 'include/head.php';
	?>
	</head>
	<body>
		<!--Header -->
		<?php include 'include/header.php' ?>

		<section class="section section5">
			<h1 class="page-title">Projelerimiz</h1>
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
								<h4 class="card1-title">İyileştirme</h4>
								<p>Bölgesel iyileştirme ve ekonomik kalkındırma programlarımızla, en az gelişmiş ülkelerde insanların hayat standartlarını arttırmayı planlıyoruz</p>
							</div>
							<div class="card1-item">
								<i class="icon icon-dot-circle"></i>
								<h4 class="card1-title">Güçlendirme</h4>
								<p>Özellikle kadınlar ve gençleri hedef alan mikro kredi programlarımızla, kadın ve gençlerin sosyal gelişimini sağlamayı ve toplum içindeki rollerini güçlendirmeyi planlıyoruz.</p>
							</div>
							<div class="card1-item">
								<i class="icon icon-graph"></i>
								<h4 class="card1-title">Sürdürülebilir Kalkınma</h4>
								<p>Su kuyusu, tarım ve hayvancılık programlarımız, mesleki eğitimlerimiz ve mikro kredi uygulamalarımızla, çalıştığımız bölgelerde sürdürülebilir ekonomik gelişmeyi sağlamayı planlıyoruz.</p>
							</div>
						</div>
					</div>
				</div>

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

		<?php include 'include/modules/section8.php' ?>

		<!-- Footer -->
		<?php include 'include/footer.php' ?>
	</body>
</html>