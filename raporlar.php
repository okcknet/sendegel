<!doctype html>
<html>
	<head>
		<?php
			$pageTitle = "Raporlar";
			include 'include/head.php';
			include __DIR__ . '/assets/data/site-data.php';
		?>
	</head>
	<body>
		<?php include 'include/header.php' ?>
		<section class="section section5">
			<h1 class="page-title">Raporlar</h1>
			<div class="img-wrapper">
				<img src="/assets/images/content/bg-raporlar.jpg" alt="" class="img-responsive">
			</div>
		</section>
		<div class="tab tab1">
			
			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a href="#bagimsiz-denetim-raporlari" data-toggle="tab">Bağımsız Denetim Raporları</a></li>
				<li><a href="#faaliyet-raporlari" data-toggle="tab">Faaliyet Raporları</a></li>
				<li><a href="#diger-raporlar" data-toggle="tab">Diğer Raporlarımız</a></li>
				<li><a href="#beyannameler" data-toggle="tab">Beyannameler</a></li>
			</ul>

			<section class="section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<div class="tab-content">

								<div role="tabpanel" class="tab-pane fade in active" id="bagimsiz-denetim-raporlari">

									<div class="text-center">
										<a class="btn btn-primary sdg-folder-button" href="https://drive.google.com/drive/folders/1lpxQAiSKGkMCMrTChjvxctL1B92ux7u5" title="Tüm Bağımsız Denetim Raporları" target="_blank">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
												<path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z"/>
											</svg>
											<span>Tüm Bağımsız Denetim Raporları</span>
										</a>
									</div>

									<div class="accordion accordion2">
										<div class="panel-group" id="accordion1">

											<?php
												foreach ($reports["independent_auditors_reports"] as $year => $report) {
													// check if turkish report exists
													if (!isset($report["tr"])) {
														continue;
													}

													$report = $report["tr"];
													echo '
														<div class="panel">
															<div class="panel-heading">
																<h4 class="panel-title">
																	<a href="' . $report["file"] . '" target="_blank" title="' . $report["title"] . '">
																		<span>' . $report["title"] . '</span>
																		<i class="icon icon-zoom"></i>
																	</a>
																</h4>
															</div>
														</div>
													';
												}
											?>

										</div>
									</div>

								</div>

								<div role="tabpanel" class="tab-pane fade" id="faaliyet-raporlari">
									<div class="text-center">
										<a class="btn btn-primary sdg-folder-button" href="https://drive.google.com/drive/folders/1o8DRoDyn1rfHPbbxA5BfAWVDIT7JW-5i" title="Tüm Faaliyet Raporları" target="_blank">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
												<path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z"/>
											</svg>
											<span>Tüm Faaliyet Raporları</span>
										</a>
									</div>

									<div class="accordion accordion2">
										<div class="panel-group" id="accordion2">

											<?php
												foreach ($reports["annual_reports"] as $year => $report) {
													// check if turkish report exists
													if (!isset($report["tr"])) {
														continue;
													}

													$report = $report["tr"];
													echo '
														<div class="panel">
															<div class="panel-heading">
																<h4 class="panel-title">
																	<a href="' . $report["file"] . '" target="_blank" title="' . $report["title"] . '">
																		<span>' . $report["title"] . '</span>
																		<i class="icon icon-zoom"></i>
																	</a>
																</h4>
															</div>
														</div>
													';
												}
											?>

										</div>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane fade" id="diger-raporlar">
									<div class="accordion accordion2">
										<div class="panel-group" id="accordion4">

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1zEPpwZTxaVkuPsir77TVp-f2GooZ1Ozg/view" target="_blank" title="SenDeGel Mart 2021 - Haziran 2021 Dönemsel Bilgilendirme Raporu">
															<span>SenDeGel Mart 2021 - Haziran 2021 Dönemsel Bilgilendirme Raporu</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1kHP6tKvJg2PvGenD_mRG5oa-9QR57On7/view" target="_blank" title="SenDeGel Ekim 2020 - Şubat 2021 Dönemsel Bilgilendirme Raporu">
															<span>SenDeGel Ekim 2020 - Şubat 2021 Dönemsel Bilgilendirme Raporu</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>										

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1LdL0Inf54wgQs4h1Hf1p9dVhZE4ajZWl/view " target="_blank" title="SenDeGel Mayıs 2020 - Eylül 2020 Dönemsel Bilgilendirme Raporu">
															<span>SendeGel Mayıs 2020 - Eylül 2020 Dönemsel Bilgilendirme Raporu</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1HazvNTqj320x3MGIbOel208SyoqiPfcH/view" target="_blank" title="SenDeGel Ocak 2020 - Nisan 2020 Dönemsel Bilgilendirme Raporu">
															<span>SenDeGel Ocak 2020 - Nisan 2020 Dönemsel Bilgilendirme Raporu</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1J7ge2NThZQQw40WpQoNssEACJeeX4Jot/viev" target="_blank" title="SenDeGel Ağustos 2019 - Kasım 2019 Dönemsel Bilgilendirme Raporu">
															<span>SenDeGel Ağustos 2019 - Kasım 2019 Dönemsel Bilgilendirme Raporu</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/17cza548lt2B0dISIO967DCIq0j-SBwwc/view" target="_blank" title="SenDeGel Ocak 2019 - Temmuz 2019 Dönemsel Bilgilendirme Raporu">
															<span>SenDeGel Ocak 2019 - Temmuz 2019 Dönemsel Bilgilendirme Raporu</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1Oi2QNhyc6u7esWXVer9L5cvoDLEl45IH/view" target="_blank" title="SenDeGel Temmuz 2018 - Kasım 2018 Dönemsel Bilgilendirme Raporu">
															<span>SenDeGel Temmuz 2018 - Kasım 2018 Dönemsel Bilgilendirme Raporu</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1OxrkRlfh2cnC_UjJhFLvUrQPFD63LuZl/view" target="_blank" title="SenDeGel Mart 2018 - Haziran 2018 Dönemsel Bilgilendirme Raporu">
															<span>SenDeGel Mart 2018 - Haziran 2018 Dönemsel Bilgilendirme Raporu</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/17CB8fsEOV21dWivdAWcjFCHH5WyiFa5J/view" target="_blank" title="SenDeGel Aralık 2017 - Mart 2018 Dönemsel Bilgilendirme Raporu">
															<span>SendeGel Aralık 2017 - Mart 2018 Dönemsel Bilgilendirme Raporu</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1QSfmFtPPKNf_fu1VFE13jVJqZVieEC9a/view" target="_blank" title="SenDeGel Haziran 2016 - Ekim 2016 Dönemsel Bilgilendirme Raporu">
															<span>SenDeGel Haziran 2016 - Ekim 2016 Dönemsel Bilgilendirme Raporu</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

										</div>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane fade" id="beyannameler">

									<div class="text-center">
										<a class="btn btn-primary sdg-folder-button" href="https://drive.google.com/drive/folders/19ULddlpbjPss2i-VVHTkco5eeuctxRix" title="Tüm Beyannameler" target="_blank">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
												<path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z"/>
											</svg>
											<span>Tüm Beyannameler</span>
										</a>
									</div>								

									<div class="accordion accordion2">
										<div class="panel-group" id="accordion5">

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1NlDH4bpS9oBm21Rcp-ZiJemjOSDkQSMY/view" target="_blank" title="SenDeGel 2020 Beyannamesi">
															<span>SenDeGel 2021 Beyannamesi</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1P_qP_SsRi9bNs4JAjYwt-a8XdwpX-FFl/view" target="_blank" title="SenDeGel 2020 Beyannamesi">
															<span>SenDeGel 2020 Beyannamesi</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1PfbH-dfMPlQT7zedqnBp_4opmrIeZlb8/view" target="_blank" title="SenDeGel 2019 Beyannamesi">
															<span>SenDeGel 2019 Beyannamesi</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1Z8ZUIKfZzSQGY7ontQUZGLSrWujVT1zT/view" target="_blank" title="SenDeGel 2018 Beyannamesi">
															<span>SenDeGel 2018 Beyannamesi</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1wk1WlQoy4FeOvA_D-em16byJYjTzLUjC/view" target="_blank" title="SenDeGel 2017 Beyannamesi">
															<span>SenDeGel 2017 Beyannamesi</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1kdRJNZbje5veQ28c_bU7oZ_1bDDJ91l_/view" target="_blank" title="SenDeGel 2016 Beyannamesi">
															<span>SenDeGel 2016 Beyannamesi</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1AhKt2kJifL32Ti0KUl4BTOcv3QoYTB8O/view" target="_blank" title="SenDeGel 2015 Beyannamesi">
															<span>SenDeGel 2015 Beyannamesi</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1oLWXxUpEvrnNiv8tZL6Z4Td26gaoJ8M-/view" target="_blank" title="SenDeGel 2014 Beyannamesi">
															<span>SenDeGel 2014 Beyannamesi</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1Z_uI-dS6dHD7936jAXhi_0XrKJWjUcIp/view" target="_blank" title="SenDeGel 2013 Beyannamesi">
															<span>SenDeGel 2013 Beyannamesi</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1dnBeFaeH-8eG7o_ksMb6Z99SU4l_jVeE/view" target="_blank" title="SenDeGel 2012 Beyannamesi">
															<span>SenDeGel 2012 Beyannamesi</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>

											<div class="panel">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a href="https://drive.google.com/file/d/1YiXlaGUHEnW9uUuNSD2YDW9Uk8F6ggMI/view" target="_blank" title="Bağışçı Hakları Beyannamesi">
															<span>Bağışçı Hakları Beyannamesi</span>
															<i class="icon icon-zoom"></i>
														</a>
													</h4>
												</div>
											</div>
											
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>

		</div>
		<?php include 'include/footer.php' ?>
	</body>
</html>