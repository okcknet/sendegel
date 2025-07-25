<!doctype html>
<html>
	<head>
		<?php
			$pageTitle = "Raporlar";
			include 'include/head.php';
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
										<a class="btn btn-primary sdg-folder-button" href="/raporlar--guncel-faaliyet-raporu.php" title="Güncel Faaliyet Raporumuz" target="_blank">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
												<path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z"/>
											</svg>
											<span>Güncel Faaliyet Raporumuz</span>
										</a>
									</div>

									<div class="text-center">
										<a class="btn btn-ghost sdg-folder-button" href="https://drive.google.com/drive/folders/1o8DRoDyn1rfHPbbxA5BfAWVDIT7JW-5i" title="Tüm Faaliyet Raporları" target="_blank">
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

											<?php
												foreach ($reports["other_reports"]["tr"] as $report) {
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

										<?php
												foreach ($reports["statements"]["tr"] as $report) {
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

							</div>
						</div>
					</div>
				</div>
			</section>

		</div>
		<?php include 'include/footer.php' ?>
	</body>
</html>