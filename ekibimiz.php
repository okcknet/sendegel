<!doctype html>
<html>

<head>
	<?php
	$pageTitle = "Ekibimiz";
	include 'include/head.php';
	?>
</head>

<body>
	<!--Header -->
	<?php include 'include/header.php' ?>

	<?php
	$teamMembers = [
		'ibrahim-betil' => [
			'name' => 'İbrahim Betil',
			'file' => 'ibrahim-betil.php',
			'types' => ['member', 'advisor'],
		],
		'nuh-hakan-oflazer' => [
			'name' => 'Nuh Hakan Oflazer',
			'file' => 'nuh-hakan-oflazer.php',
			'types' => ['member'],
		]
	];
	?>

	<section class="section section5">
		<h1 class="page-title">Ekibimiz</h1>
		<div class="img-wrapper">
			<img src="/assets/images/content/bg-ekibimiz.jpg" alt="" class="img-responsive">
		</div>
	</section>

	<div class="tab tab1">
		<ul class="nav nav-tabs" role="tablist">
			<li class="active">
				<a href="#teamFounders" aria-controls="teamFounders" data-toggle="tab">KURUCULAR</a>
			</li>
			<li>
				<a href="#teamBoard" aria-controls="teamBoard" data-toggle="tab">YÖNETİM KURULU</a>
			</li>
			<li>
				<a href="#teamAuditors" aria-controls="teamAuditors" data-toggle="tab">DENETİM KURULU</a>
			</li>
			<li>
				<a href="#teamAdvisors" aria-controls="teamAdvisors" data-toggle="tab">DANIŞMA KURULU</a>
			</li>
			<li>
				<a href="#teamEmployees" aria-controls="teamEmployees" data-toggle="tab">ÇALIŞANLAR</a>
			</li>
		</ul>

		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="tab-content">

							<?php
							$teamFounders = [
								'Aziz Akgül' => 'aziz-akgul.php',
								'Mehmet Arda' => 'mehmet-arda.php',
								'İbrahim Betil' => 'ibrahim-betil.php',
								'Kerim Urallı' => 'kerim-uralli.php',
								'Derya Sel Bozkurt' => 'derya-sel-bozkurt.php',
								'Aslı Ayşen Aydın' => 'asli-aysen-aydin.php',
								'Kaddafi Bozkurt' => 'kaddafi-bozkurt.php',
								'Turgut Derman' => 'turgut-derman.php',
								'Samir Bayraktar' => 'samir-bayraktar.php',
								'Tuğba Jabban' => 'tugba-jabban.php',
								'Ceren Kalı' => 'ceren-kali.php',
								// Add more team members as needed
							];
							?>

							<?php
							$teamMembers = [
								'ibrahim-betil' => [
									'name' => 'İbrahim Betil',
									'file' => 'ibrahim-betil.php',
									'types' => ['founder', 'advisor'],
									'order' => [
										'founder' => 1, // Set the order number for founder type
										'advisor' => 2, // Set the order number for advisor type
									],
								],
								'nuh-hakan-oflazer' => [
									'name' => 'Nuh Hakan Oflazer',
									'file' => 'nuh-hakan-oflazer.php',
									'types' => ['founder'],
									'order' => [
										'founder' => 3, // Set the order number for founder type
									],
								]
							];
							?>

							<div role="tabpanel" class="tab-pane fade" id="teamFounders">
								<div class="accordion accordion2">
									<div class="panel-group" id="teamFoundersGroup">
										<?php
										$type = 'founder'; // Specify the type for sorting
										usort($teamMembers, function ($a, $b) use ($type) {
											return (in_array($type, $a['types'])) ? $a['order'][$type] - $b['order'][$type] : 0;
										});

										foreach ($teamMembers as $handle => $member) :
											if (in_array($type, $member['types'])) :
										?>
												<div class="panel">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#teamFoundersGroup" href="#<?= $handle; ?>">
																<span><?= $member['name'] ?></span>
																<i class="icon icon-minus"></i>
																<i class="icon icon-plus"></i>
															</a>
														</h4>
													</div>
													<div id="<?= $handle; ?>" class="panel-collapse collapse">
														<div class="panel-body">
															<div class="content"><?php include 'ekibimiz/' . $member['file']; ?></div>
														</div>
													</div>
												</div>
										<?php
											endif;
										endforeach;
										?>
									</div>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="teamAdvisors">
								<div class="accordion accordion2">
									<div class="panel-group" id="teamAdvisorsGroup">
										<?php
										$type = 'advisor'; // Specify the type for sorting (e.g., 'member' or 'advisor')
										usort($teamMembers, function ($a, $b) use ($type) {
											return (in_array($type, $a['types'])) ? $a['order'][$type] - $b['order'][$type] : 0;
										});

										foreach ($teamMembers as $handle => $member) :
											if (in_array($type, $member['types'])) :
										?>
												<div class="panel">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#teamAdvisorsGroup" href="#<?= $handle; ?>">
																<span><?= $member['name'] ?></span>
																<i class="icon icon-minus"></i>
																<i class="icon icon-plus"></i>
															</a>
														</h4>
													</div>
													<div id="<?= $handle; ?>" class="panel-collapse collapse">
														<div class="panel-body">
															<div class="content"><?php include 'ekibimiz/' . $member['file']; ?></div>
														</div>
													</div>
												</div>
										<?php
											endif;
										endforeach;
										?>
									</div>
								</div>
							</div>

							<!-- Team Members Section -->

							<div role="tabpanel" class="tab-pane fade in active" id="teamFounders">
								<div class="accordion accordion2">
									<div class="panel-group" id="accordion1">

										<?php foreach ($teamFounders as $name => $file) : ?>
											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion1" href="#<?= strtolower(str_replace(' ', '-', $name)); ?>">
															<span><?= $name ?></span>
															<i class="icon icon-minus"></i>
															<i class="icon icon-plus"></i>
														</a>
													</h4>
												</div>
												<div id="<?= strtolower(str_replace(' ', '-', $name)); ?>" class="panel-collapse collapse">
													<div class="panel-body">
														<div class="content"><?php include 'ekibimiz/' . $file; ?></div>
													</div>
												</div>
											</div>
										<?php endforeach; ?>

									</div>
								</div>
							</div>

							<?php
							$teamBoard = [
								'İbrahim Betil (YK Başkanı)' => 'ibrahim-betil.php',
								'Nuh Hakan Oflazer (YK Başkan Yardımcısı)' => 'nuh-hakan-oflazer.php',
								'Dara Aslan (Sekreter)' => 'dara-aslan.php',
								'Didem Ünsür (Sayman)' => 'didem-unsur.php',
								'Sema Emek (YK Üyesi)' => 'sema-emek.php',
								'Cem Akşehirlioğlu (YK Üyesi)' => 'cem-aksehirlioglu.php',
								'Abdullah Hardura (Yedek Üye)' => 'abdullah-hardura.php',
								'Kaddafi Bozkurt (Yedek Üye)' => 'kaddafi-bozkurt.php',
								'Mustafa Çiper (Yedek Üye)' => 'mustafa-ciper.php',
								'Aziz Akgül (Yedek Üye)' => 'aziz-akgul.php',
								'Sema Gümüş (Yedek Üye)' => 'sema-gumus.php',
								// Add more team members as needed
							];
							?>

							<div role="tabpanel" class="tab-pane fade" id="teamBoard">
								<div class="accordion accordion2">
									<div class="panel-group" id="accordion2">

										<?php foreach ($teamBoard as $name => $file) : ?>
											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion2" href="#<?= strtolower(str_replace(' ', '-', $name)); ?>">
															<span><?= $name ?></span>
															<i class="icon icon-minus"></i>
															<i class="icon icon-plus"></i>
														</a>
													</h4>
												</div>
												<div id="<?= strtolower(str_replace(' ', '-', $name)); ?>" class="panel-collapse collapse">
													<div class="panel-body">
														<div class="content"><?php include 'ekibimiz/' . $file; ?></div>
													</div>
												</div>
											</div>
										<?php endforeach; ?>

									</div>
								</div>
							</div>

							<?php
							$teamAuditors = [
								'Mehmet Bahadır Teke (DK Başkanı)' => 'mehmet-bahadir-teke.php',
								'Zeynel Senan (DK Üyesi)' => 'zeynel-senan.php',
								'Ecehan Bike Geçkinli (DK Üyesi)' => 'ecehan-bike-geckinli.php',
								'Aytül Tülay Balcı (Yedek Üye)' => 'aytul-tulay-balci.php',
								'Mutlu Şen (Yedek Üye)' => 'mutlu-sen.php',
								'Derya Sel Bozkurt (Yedek Üye)' => 'derya-sel-bozkurt.php',
								// Add more team members as needed
							]
							?>

							<div role="tabpanel" class="tab-pane fade" id="teamAuditors">
								<div class="accordion accordion2">
									<div class="panel-group" id="accordion3">

										<?php foreach ($teamAuditors as $name => $file) : ?>
											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion3" href="#<?= strtolower(str_replace(' ', '-', $name)); ?>">
															<span><?= $name ?></span>
															<i class="icon icon-minus"></i>
															<i class="icon icon-plus"></i>
														</a>
													</h4>
												</div>
												<div id="<?= strtolower(str_replace(' ', '-', $name)); ?>" class="panel-collapse collapse">
													<div class="panel-body">
														<div class="content"><?php include 'ekibimiz/' . $file; ?></div>
													</div>
												</div>
											</div>
										<?php endforeach; ?>

									</div>
								</div>
							</div>

							<?php
							$teamAdvisors = [
								'Bilge Ögün Bassani' => 'bilge-ogun-bassani.php',
								'Jak Jabes' => 'jak-jabes.php',
								'Tayyibe Gülek Domaç' => 'tayyibe-gulek-domac.php',
								'Charlotte Sabbah' => 'charlotte-sabbah.php',
								// Add more team members as needed
							]
							?>

							<div role="tabpanel" class="tab-pane fade" id="teamAdvisors">
								<div class="accordion accordion2">
									<div class="panel-group" id="accordion4">

										<?php foreach ($teamAuditors as $name => $file) : ?>
											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion4" href="#<?= strtolower(str_replace(' ', '-', $name)); ?>">
															<span><?= $name ?></span>
															<i class="icon icon-minus"></i>
															<i class="icon icon-plus"></i>
														</a>
													</h4>
												</div>
												<div id="<?= strtolower(str_replace(' ', '-', $name)); ?>" class="panel-collapse collapse">
													<div class="panel-body">
														<div class="content"><?php include 'ekibimiz/' . $file; ?></div>
													</div>
												</div>
											</div>
										<?php endforeach; ?>

									</div>
								</div>
							</div>

							<?php
							$teamEmployees = [
								'Ebru Çelebi' => 'ebru-celebi.php',
								'Tuncay Bozkurt' => 'tuncay-bozkurt.php',
								// Add more team members as needed
							]
							?>

							<div role="tabpanel" class="tab-pane fade" id="teamEmployees">
								<div class="accordion accordion2">
									<div class="panel-group" id="accordion5">

										<?php foreach ($teamEmployees as $name => $file) : ?>
											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion5" href="#<?= strtolower(str_replace(' ', '-', $name)); ?>">
															<span><?= $name ?></span>
															<i class="icon icon-minus"></i>
															<i class="icon icon-plus"></i>
														</a>
													</h4>
												</div>
												<div id="<?= strtolower(str_replace(' ', '-', $name)); ?>" class="panel-collapse collapse">
													<div class="panel-body">
														<div class="content"><?php include 'ekibimiz/' . $file; ?></div>
													</div>
												</div>
											</div>
										<?php endforeach; ?>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

	</div>

	<!-- Footer -->
	<?php include 'include/footer.php' ?>
</body>

</html>