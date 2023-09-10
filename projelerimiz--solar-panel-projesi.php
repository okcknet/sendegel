<!doctype html>
<html>
	<head>
		<?php
			$pageTitle = "Solar Panel Projesi";
			include 'include/head.php';
		?>
	</head>
<body>
<?php include 'include/header.php' ?>

<section class="section section5">
	<h1 class="page-title">Solar Panel Projesi</h1>
	<div class="img-wrapper">
		<img src="/assets/images/content/projects/bg-solar-panel-projesi.jpg" alt="" class="img-responsive">
	</div>
</section>

<section class="subpage">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<h2 class="page-description">Sen De Gel olarak projelerimizi; bölgeyi ve bölge insanını düşünerek, çevreye en uygun yöntemleri kullanarak gerçekleştiriyoruz.</h2>

				<div class="content">

					<p><h2>Solar Su Şebekeleri Projemiz</h2></p>

					<p>Görece daha büyük yerleşim alanlarında derin sondajlarla yaratılan su kaynağının köy içerisine güneş enerjisi ve dağıtım kanallarıyla taşınması 12 ayrı noktada kurulu musluklarla kullanıma açılmasını kapsamaktadır. Proje amacı içme suyu ihtiyacına daha köklü ve insani çözümler getirmektir.</p>

					<p><h3>Proje bütçemiz 18000 USD’dir.</h3></p>

					<p><br/></p>

					<p><h2>Güneş Enerjisi Aydınlatma (Güneş Kiti) Projemiz</h2></p>

					<p>Elektrik erişiminin olmadığı köylerde, yaşamlarını karanlık içerisinde geçiren insanlara yönelik yürüttüğümüz projemizdir. Sürdürülebilir projelerimiz ile yoksullukla mücadelemizi sürdürürken, güneş enerjisi sistemleri ile insanların hayatlarını daha yaşanabilir hâle getirme hedefini taşımaktayız. Bölgenin ihtiyaçları göz önünde bulundurularak geliştirilen projemiz, çevreye zarar vermeden güneş enerjisi kullanılarak oluşturulmaktadır.</p>

					<p>Köylerde ayrı ortak paylaşım alanlarında yaşayan aileler elektrik enerjisinden yoksun bulunmaktadır. Telefonlarını şarj edebilecekleri ve aydınlatma ihtiyaçlarını karşılayacakları güneş enerji kitleri sağlamak istiyoruz. </p>

					<p><b>Bir güneş enerjisi kiti: 50 USD</b><br/>

					1 haneye en az 2 adet güneş kiti verilmektedir.<br/>

					<h3>Bütçe: 50 USD x 2 = 100 USD</h3></p>

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

								<a data-fancybox="images" href="../assets/images/content/projects/solar-panel-projesi-l1.jpg" title="Fotoğraf">

									<div class="mask"><i class="icon icon-zoom"></i></div>

									<img src="../assets/images/content/projects/solar-panel-projesi-s1.jpg" alt="Proje" width="255" height="255" class="img-responsive">

								</a>

							</div>

							<div class="col-md-3 col-sm-6 col-xs-12 card5-item">

								<a data-fancybox="images" href="../assets/images/content/projects/solar-panel-projesi-l2.jpg" title="Fotoğraf">

									<div class="mask"><i class="icon icon-zoom"></i></div>

									<img src="../assets/images/content/projects/solar-panel-projesi-s2.jpg" alt="Proje" width="255" height="255" class="img-responsive">

								</a>

							</div>

							<div class="col-md-3 col-sm-6 col-xs-12 card5-item">

								<a data-fancybox="images" href="../assets/images/content/projects/solar-panel-projesi-l3.jpg" title="Fotoğraf">

									<div class="mask"><i class="icon icon-zoom"></i></div>

									<img src="../assets/images/content/projects/solar-panel-projesi-s3.jpg" alt="Proje" width="255" height="255" class="img-responsive">

								</a>

							</div>

							<div class="col-md-3 col-sm-6 col-xs-12 card5-item">

								<a data-fancybox="images" href="../assets/images/content/projects/solar-panel-projesi-l4.jpg" title="Fotoğraf">

									<div class="mask"><i class="icon icon-zoom"></i></div>

									<img src="../assets/images/content/projects/solar-panel-projesi-s4.jpg" alt="Proje" width="255" height="255" class="img-responsive">

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
					<h1 class="section-title"><?php echo $projects["solar_panel_projects"]["our-title"]; ?></h3>
					<iframe src="<?php echo $projects["solar_panel_projects"]["file"]; ?>" width="100%" height="1000" allow="autoplay"></iframe>
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

<!-- Footer -->
<?php include 'include/footer.php' ?>
</body>
</html>