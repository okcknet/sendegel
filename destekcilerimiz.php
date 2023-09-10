<!doctype html>
<html>
	<head>
		<?php
			$pageTitle = "Destekçilerimiz";
			include 'include/head.php';
			include __DIR__ . '/assets/data/site-supporters.php';
		?>
	</head>
	<body>
		<?php include 'include/header.php' ?>

		<section class="section section5">
			<h1 class="page-title">Destekçilerimiz</h1>
			<div class="img-wrapper">
				<img src="/assets/images/content/bg-destekcilerimiz.jpg" alt="" class="img-responsive">
			</div>
		</section>

		<div class="tab tab1">
			<ul class="nav nav-tabs v2" role="tablist">

				<li class="active"><a href="#2021" data-toggle="tab">2021</a></li>
				<li><a href="#2020" data-toggle="tab">2020</a></li>
				<li><a href="#2019" data-toggle="tab">2019</a></li>
				<li><a href="#2018" data-toggle="tab">2018</a></li>
				<li><a href="#2017" data-toggle="tab">2017</a></li>
				<li><a href="#2016" data-toggle="tab">2016</a></li>
				<li><a href="#2015" data-toggle="tab">2015</a></li>
				<li><a href="#2014" data-toggle="tab">2014</a></li>
				<li><a href="#2013" data-toggle="tab">2013</a></li>
				<li><a href="#2012" data-toggle="tab">2012</a></li>

			</ul>

			<div class="container">
				<div class="row">

					<div class="col-md-12">
						<div class="tab-content">

<!--
		$supporters = array(
		"2021" =>  array(
			"active" => true,
			"title" => "2021 Yılı Destekçilerimiz",
			"title-en" => "2021 Supporters",
			"main_supporters" => array(
				"title" => "Ana Destekçilerimiz",
				"title-en" => "Main Supporters",
				"col-md" => "col-md-4",
				"supporters" => array(
					array(
						"title" => "İslam Kalkınma Bankası",
						"image" => "/assets/images/content/destekcilerimiz/isd-bank.png",
						"link" => "http://www.isdb.org/",
					),
					array(
						"title" => "Kaleseramik Eğitim, Sağlık ve Sosyal Yardım Vakfı",
						"image" => "/assets/images/content/destekcilerimiz/ksv.jpg",
						"link" => "https://www.ksvvakfi.org",
					),
					array(
						"title" => "Mehmet Betil",
						"image" => "/assets/images/content/destekcilerimiz/mehmet-betil.jpg",
						"link" => "",
					)
				)
			),
			"project_supporters" => array(
				"title" => "Proje Destekçilerimiz",
				"title-en" => "Project Supporters",
				"col-md" => "col-md-3",
				"supporters" => array(
					array(
						"title" => "Asım Kadri Soygül",
						"image" => "/assets/images/content/destekcilerimiz/supporter.jpg",
						"link" => "",
					),
					array(
						"title" => "Cem Akşehirlioğlu",
						"image" => "/assets/images/content/destekcilerimiz/supporter.jpg",
						"link" => "",
					),
					array(
						"title" => "Paribu",
						"image" => "/assets/images/content/destekcilerimiz/paribu.png",
						"link" => "https://www.paribu.com/",
					),
					array(
						"title" => "Peter &amp; Eleanor Kuniholm",
						"image" => "/assets/images/content/destekcilerimiz/supporter.jpg",
						"link" => "",
					)
				)
			),
			"individual_supporters" => array(
				"title" => "Bireysel Destekçilerimiz",
				"title-en" => "Individual Supporters",
				"col-md" => "col-md-12",
				"supporters" => array(
					"Ayşe Akşehirlioğlu",
					"Betün Çakan",
					"Necati Bice",
					"Nesim Çelik",
					"Sema Emek",
					"Serkan İzci",
					"Ayşe Akşehirlioğlu",
					"Betün Çakan",
					"Necati Bice",
					"Nesim Çelik",
					"Sema Emek",
					"Serkan İzci",
					"Ayşe Akşehirlioğlu",
					"Betün Çakan",
					"Necati Bice",
					"Nesim Çelik",
					"Sema Emek",
					"Serkan İzci",
					"Ayşe Akşehirlioğlu",
					"Betün Çakan",
					"Necati Bice",
					"Nesim Çelik",
					"Sema Emek",
					"Serkan İzci",
					"Ayşe Akşehirlioğlu",
					"Betün Çakan",
					"Necati Bice",
					"Nesim Çelik",
					"Sema Emek",
					"Serkan İzci",
					"Ayşe Akşehirlioğlu",
					"Betün Çakan",
					"Necati Bice",
					"Nesim Çelik",
					"Sema Emek",
					"Serkan İzci",
					"Ayşe Akşehirlioğlu",
					"Betün Çakan",
					"Necati Bice",
					"Nesim Çelik",
					"Sema Emek",
					"Serkan İzci",
				)
			),
			"corporate_donors" => array(
				"title" => "Kurumsal Bağışçılarımız",
				"title-en" => "Corporate Donors",
				"col-md" => "col-md-6",
				"supporters" => array(
					array(
						"title" => "Mogul Tekstil San.ve Tic.Ltd Şti",
						"image" => "/assets/images/content/destekcilerimiz/mogul.png",
						"link" => "https://www.mogulsb.com",
					),
					array(
						"title" => "Sarkuysan Elektrolitik Bakır San ve Tic. A.Ş",
						"image" => "/assets/images/content/destekcilerimiz/sarkuysan.png",
						"link" => "https://www.sarkuysan.com",
					)
				)
			),
			"in-kind_donors" => array(
				"title" => "Ayni Bağışçılarımız",
				"title-en" => "In-kind Donors",
				"col-md" => "col-md-4",
				"supporters" => array(
					array(
						"title" => "DenizBank",
						"image" => "/assets/images/content/destekcilerimiz/denizbank.png",
						"link" => "",
					),
					array(
						"title" => "Er-Ay Basım Hizmetleri Ltd.Şti",
						"image" => "/assets/images/content/destekcilerimiz/eray.jpg",
						"link" => "",
					),
					array(
						"title" => "Mazars",
						"image" => "/assets/images/content/destekcilerimiz/mazars.png",
						"link" => "",
					),
					array(
						"title" => "Nef-Timur Gayrimenkul Yapı ve Yatırım A.Ş.",
						"image" => "/assets/images/content/destekcilerimiz/2017-nef.png",
						"link" => "",
					),
					array(
						"title" => "Turkısh Philanthropy Fund",
						"image" => "/assets/images/content/destekcilerimiz/TPF_Logo.jpg",
						"link" => "",
					),
					array(
						"title" => "Webdenal.com",
						"image" => "/assets/images/content/destekcilerimiz/webdenal.png",
						"link" => "",
					)
				)
			),
			"individual_supporters" => array(
				"title" => "Bireysel Bağışçılarımız",
				"title-en" => "Individual Supporters",
				"col-md" => "col-md-6",
				"supporters" => array(
					"Abdullah Hardura",
					"Abdurrahman Bayraktaroğlu",
					"Ahmet Gülgün",
					"Ahmet Kayhan Dede",
					"Ahmet Umut Güngör",
					"Alev Mutlu",
					"Ali Boran",
					"Ali Büyükdereli",
					"Arda Altun",
					"Aslı Derbent",
					"Aslı Enis",
					"Aslı Zengin Çetin",
					"Asuman Bayrak",
					"Atilla Özer",
					"Ayçe Tuba Dumanlı",
					"Ayhan Türkkan",
					"Aynur Aydemir",
					"Aynur Göncü",
					"Ayşe Kapusuz",
					"Ayşe Sayın",
					"Bahar Gelmez",
					"Bahar Şimşek",
					"Başak Dal",
					"Başar Ecem Yücel",
					"Bengü Gülfer",
					"Berna Özer",
					"Betül Bahar",
					"Buket Nur Kırmızıgül",
					"Burcu Gelmez",
					"Burçak Gökçeer Baltaş",
					"Bülent Devrim Peköz",
					"Büşra Çıldık",
					"Can Akkurt",
					"Can Genc",
					"Cansever Aydın",
					"Ceyda Sayın",
					"Çağlar Özer",
					"Çiğdem Magemizoğlu",
					"Dara Aslan",
					"Demet Bozatli",
					"Deniz Emin",
					"Derya Altansoy",
					"Derya Yanmış",
					"Didem Baltacı",
					"Dilek Gönen",
					"Dobrinka Cidrof",
					"Döndü Güler",
					"Duru Şehvar Karasu",
					"Ebru Karaca",
					"Elif Aygün",
					"Elif Canmaya",
					"Elif Farukoğlu",
					"Elif Hardura",
					"Emel Gür Önen",
					"Emine Enür",
					"Emine Esen",
					"Emine Yoldaş",
					"Emre Behlül Uzunca",
					"Emre Güçlü",
					"Engin Selcuk",
					"Enver Arsoy",
					"Esen Eren Aktaş",
					"Esin Asiye Bozyel",
					"Ezgi Akar",
					"Fadime Acar Ural",
					"Fatih Fermanoğlu",
					"Fatma Belgin Albayram",
					"Fatma Efe",
					"Fatma Güç",
					"Fatma Karaaslan",
					"Fazilet Adanur",
					"Fethiye Aktepe",
					"Feyman Yürükoğlu",
					"Funda Erdemli",
					"Gamze Gale",
					"Gamze Karacam",
					"Gokhan Altansoy",
					"Gökalp Aslan",
					"Göktuğ Savaş Doğan",
					"Göktürk Kağan Çiçek",
					"Görkem Oyman",
					"Gulsah Celik",
					"Gülay Güneş",
					"Gülay Karadavut Kaplan",
					"Gülçin Menteşoğlu Durgun",
					"Gülhan Bozkurt",
					"Gülşen Çiçek Keskinsoy",
					"Günay Ermergen",
					"Günay Handan",
					"Hakan Genç",
					"Hakan İlgün",
					"Hakan Kekik",
					"Harun Taygur",
					"Hatice Serpil Bostancı",
					"Hatice Yaman",
					"Hava Ayrılmaz",
					"Hayal Yüksel",
					"Hayriye Göksu Tekbir",
					"Hazal Suzan Selçuk",
					"Hulusi Tok",
					"Hür Göçen",
					"Hüseyin Ferhat Kul",
					"Hüseyin Kaya",
					"Hüseyin Kuplay",
					"Irene Hulst",
					"Işıl Önal",
					"İbrahim Betil",
					"İnanç Beyazıt",
					"İpek Aksehirlioglu Yener",
					"Kadir Çınar",
					"Kani Özsoy",
					"Kazim Veysel Dolapçı",
					"Kemal Ural",
					"Kemal Yener",
					"Kerem Çırpan",
					"Kerim Altınsoy",
					"Kübra Atalay Kabasakal",
					"Leyla Arslan",
					"Leyla Yıldız",
					"Lütfi Aydeniz",
					"Lütfi Öztürker",
					"Marziya Demir",
					"Mehmet Dutar",
					"Mehmet Sağlam",
					"Mehmet Tekin",
					"Mehmet Tevfik Alkış",
					"Melek Sultan Canpınar",
					"Mestan Özdemir",
					"Mesut Kelle",
					"Mine Dörtkaş",
					"Mine Poyraz",
					"Mustafa Ballı",
					"Mustafa Erhan Nas",
					"Münevver Özel",
					"Nadir Zafertepe",
					"Nazar Büyüm",
					"Necati Günal",
					"Neslihan Altun",
					"Neşe İplikçi",
					"Nihal Çiçek",
					"Nihan Satıroğlu",
					"Nirgun Ayar",
					"Osman Kocaer",
					"Özgül Kayıhan",
					"Özlem Bıçak",
					"Öznur Hande",
					"Öznur Karakaya",
					"Öznur Özkan",
					"Pelin Soygul",
					"Ramazan Doruk",
					"Remziye Sermin Örsel",
					"Sadıka İzci",
					"Salih Doğan",
					"Salin Sevinç",
					"Seda Dadikhi",
					"Seda Zulfikaroglu",
					"Selma Günay",
					"Semih Dilmen",
					"Semih Dümdüz",
					"Serpil Aslan",
					"Sevnur Malik",
					"Seyhan Yüksel",
					"Sezgin Kaçar",
					"Sibel Ölmez",
					"Sibel Toptancı",
					"Soner Alas",
					"Soner Baloğlu",
					"Sosyal Fabrika Teknolojileri",
					"Suzan Özpeynirci",
					"süleybe öztürk",
					"Sündüz Çınar Bilgin",
					"Şüheyda Karayiğit",
					"Talu S. Alatlı",
					"TOG Çalışanları",
					"Tuna Ece",
					"Uğur Atalay",
					"Uğur Berke Kayıkçı",
					"Utku Nogay",
					"Ümmü Bozkurt",
					"Vildan Barlas",
					"Yadigar Işıldar",
					"Yeşim Göksu",
					"Yeşim Koç",
					"Yıldıray Özcan",
					"Zeynep Aksehirlioglu",
					"Zeynep Korkmaz",
					"Zeynep Özkaya",
					"Zeynep Yıldız",
					"Zühal Bozok"
				)
			),
			"other_supporters" => array(
				array(
					"title" => "Gönüllü Web Geliştirici",
					"title-en" => "Volunteer Web Developer",
					"supporter" => "Oğuz Kaan Çağatay Kılınç"
				),
				array(
					"title" => "Gönüllü Çevirmenler",
					"title-en" => "Volunteer Translator",
					"supporter" => "Büşra Çağlayan<br/>Deniz Ekin Doğan"
				),
				array(
					"title" => "Gönüllü Faaliyet Raporu Tasarımı",
					"title-en" => "Volunteer Activity Report Design",
					"supporter" => "Yasin Müminoğlu"
				),
				array(
					"title" => "Gönüllü Faaliyet Raporu Metin Düzenleme",
					"title-en" => "Volunteer Activity Report Text Editing",
					"supporter" => "Buse Abacıoğlu"
				),
			),
			"secret_supporters" => array(
				"title" => "Donars Prefferring not to Disclose Their Names",
				"col-md" => "col-md-12",
				"supporters" => array(
					"2021 Year Total: 221.185 TL"
				)
			)
		)
	);
-->

						<?php
							foreach ($supporters as $year => $supporter) {
								$active = $supporter["active"] ? "active" : "";
								echo '
									<div role="tabpanel" class="tab-pane fade in ' . $active . '" id="' . $year . '">
										<section class="section section7">
											<div class="container">

												<div class="row">
													<div class="col-md-12">
														<div class="section-container align-center">
															<h3 class="section-title wo-section-description">' . $supporter["title"] . '</h3>
														</div>
													</div>
												</div>
								';

								foreach ($supporter as $supporter_type => $supporter_group) {
									if ($supporter_type == "active" || $supporter_type == "title" || $supporter_type == "title-en") {
										continue;
									}

									echo '
										<div class="row">
											<div class="col-md-12">
												<div class="section7-container">
													<div class="row">
														<div class="col-md-12">
															<h4 class="section7-title">' . $supporter_group["title"] . '</h4>
														</div>
													</div>
													<div class="row">
									';

									if ($supporter_type == "individual_supporters") {
										foreach ($supporter_group["supporters"] as $supporter) {
											echo '
												<div class="' . $supporter_group["col-md"] . '">
													<div class="section7-item">
														<p>' . $supporter . '</p>
													</div>
												</div>
											';
										}
									} else if ($supporter_type == "secret_supporters") {
										echo '
											<div class="' . $supporter_group["col-md"] . '">
												<div class="section7-item">
													<p>' . $supporter_group["title"] . '</p>
													<p>' . $supporter_group["supporters"][0] . '</p>
												</div>
											</div>
										';
									} else {
										foreach ($supporter_group["supporters"] as $supporter) {
											if (isset($supporter["link"])) {
												echo '
													<div class="' . $supporter_group["col-md"] . '">
														<div class="section7-item">
															<a href="' . $supporter["link"] . '" target="_blank" rel="nofollow">
																<div class="img-wrapper"><img src="' . $supporter["image"] . '" alt="' . $supporter["title"] . '" class="img-responsive center-block "></div>
																<p>' . $supporter["title"] . '</p>
															</a>
														</div>
													</div>
												';
											} else {
												echo '
													<div class="' . $supporter_group["col-md"] . '">
														<div class="section7-item">
															<div class="img-wrapper"><img src="' . $supporter["image"] . '" alt="' . $supporter["title"] . '" class="img-responsive center-block "></div>
															<p>' . $supporter["title"] . '</p>
														</div>
													</div>
												';
											}
										}
									}

									foreach ($supporter_group["supporters"] as $supporter) {
										if (isset($supporter["link"])) {
											echo '
												<div class="' . $supporter_group["col-md"] . '">
													<div class="section7-item">
														<a href="' . $supporter["link"] . '" target="_blank" rel="nofollow">
															<div class="img-wrapper"><img src="' . $supporter["image"] . '" alt="' . $supporter["title"] . '" class="img-responsive center-block "></div>
															<p>' . $supporter["title"] . '</p>
														</a>
													</div>
												</div>
											';
										} else {
											echo '
												<div class="' . $supporter_group["col-md"] . '">
													<div class="section7-item">
														<div class="img-wrapper"><img src="' . $supporter["image"] . '" alt="' . $supporter["title"] . '" class="img-responsive center-block "></div>
														<p>' . $supporter["title"] . '</p>
													</div>
												</div>
											';
										}
									}

									echo '
													</div>
												</div>
											</div>
										</div>
									';

								}

								echo '
											</div>
										</section>
									</div>
								';

							}
						?>

						<div role="tabpanel" class="tab-pane fade in active" id="2021">
							<section class="section section7">
								<div class="container">

									<div class="row">
										<div class="col-md-12">
											<div class="section-container align-center">
												<h3 class="section-title wo-section-description">2021 Yılı Destekçilerimiz</h3>
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-md-12">

											<div class="section7-container">
												<div class="row">
													<div class="col-md-12">
														<h4 class="section7-title">Ana Destekçilerimiz</h4>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="section7-item">
															<a href="http://www.isdb.org/" target="_blank" rel="nofollow">
																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/isd-bank.png" alt="İslam Kalkınma Bankası" class="img-responsive center-block "></div>
																<p>İslam Kalkınma Bankası</p>
															</a>
														</div>
													</div>
													<div class="col-md-4">
														<div class="section7-item">
															<a href="https://www.ksvvakfi.org" target="_blank" rel="nofollow">
																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/ksv.jpg" alt="Kaleseramik Eğitim, Sağlık ve Sosyal Yardım Vakfı" class="img-responsive center-block "></div>
																<p>Kaleseramik Eğitim, Sağlık ve Sosyal Yardım Vakfı</p>
															</a>
														</div>
													</div>													
													<div class="col-md-4">
														<div class="section7-item">
																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/mehmet-betil.jpg" alt="Mehmet Betil" class="img-responsive center-block"></div>
																<p>Mehmet Betil</p>
														</div>
													</div>
												</div>
											</div>

											<div class="section7-container">
												<div class="row">
													<div class="col-md-12">
														<h4 class="section7-title">Proje Destekçilerimiz</h4>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">
														<div class="section7-item">
																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/supporter.jpg" alt="Asım Kadri Soygül" class="img-responsive center-block"></div>
																<p>Asım Kadri Soygül</p>
														</div>
													</div>
													<div class="col-md-3">
														<div class="section7-item">
																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/supporter.jpg" alt="Cem Akşehirlioğlu" class="img-responsive center-block"></div>
																<p>Cem Akşehirlioğlu</p>
														</div>
													</div>		
													<div class="col-md-3">
														<div class="section7-item">
															<a href="https://www.paribu.com/" target="_blank" rel="nofollow">
																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/paribu.png" alt="Paribu" class="img-responsive center-block"></div>
																<p>Paribu</p>
															</a>
														</div>
													</div>
													<div class="col-md-3">
														<div class="section7-item">
																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/supporter.jpg" alt="Peter &amp; Eleanor Kuniholm" class="img-responsive center-block"></div>
																<p>Peter &amp; Eleanor Kuniholm</p>
														</div>
												</div>
											</div>											

											<div class="section7-container">
												<div class="row">
													<div class="col-md-12">
														<h4 class="section7-title">Bireysel Destekçilerimiz</h4>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="section7-item">
															<p>Ayşe Akşehirlioğlu</p>
															<p>Betün Çakan</p>
															<p>Necati Bice</p>
															<p>Nesim Çelik</p>
															<p>Sema Emek</p>
															<p>Serkan İzci</p>
														</div>
													</div>
												</div>
											</div>

											<div class="section7-container">
												<div class="row">
													<div class="col-md-12">
														<h4 class="section7-title">Kurumsal Bağışçılarımız</h4>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="section7-item">
															<a href="https://www.mogulsb.com" target="_blank" rel="nofollow">
																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/mogul.png" alt="Mogul Tekstil San.ve Tic.Ltd Şti" class="img-responsive center-block"></div>
																<p>Mogul Tekstil San.ve Tic.Ltd Şti</p>
															</a>
														</div>
													</div>
													<div class="col-md-6">
														<div class="section7-item">
															<a href="https://www.sarkuysan.com" target="_blank" rel="nofollow">
																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/sarkuysan.png" alt="Sarkuysan Elektrolitik Bakır San ve Tic. A.Ş" class="img-responsive center-block"></div>
																<p>Sarkuysan Elektrolitik Bakır San ve Tic. A.Ş</p>
															</a>
														</div>
													</div>
												</div>
											</div>

											<div class="section7-container">
												<div class="row">
													<div class="col-md-12">
														<h4 class="section7-title">Ayni Bağışçılarımız</h4>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4">
														<div class="section7-item">
															<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/denizbank.png" alt="DenizBank" class="img-responsive center-block"></div>
															<p>DenizBank</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="section7-item">
															<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/eray.jpg" alt="Er-Ay Basım Hizmetleri Ltd.Şti" class="img-responsive center-block"></div>
															<p>Er-Ay Basım Hizmetleri Ltd.Şti</p>
														</div>
													</div>
													<div class="col-md-4">
														<div class="section7-item">
															<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/mazars.png" alt="Mazars" class="img-responsive center-block"></div>
															<p>Mazars</p>
														</div>
													</div>

													<div class="col-md-4">
														<div class="section7-item">
															<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-nef.png" alt="Destekçimiz" class="img-responsive center-block"></div>
															<p>Nef-Timur Gayrimenkul Yapı ve Yatırım A.Ş.</p>
														</div>
													</div>

													<div class="col-md-4">
														<div class="section7-item">
															<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/TPF_Logo.jpg" alt="Destekçimiz" class="img-responsive center-block mx-width"></div>
															<p>Turkısh Philanthropy<br> Fund</p>
														</div>
													</div>

													<div class="col-md-4">
														<div class="section7-item">
															<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/webdenal.png" alt="Webdenal.com" class="img-responsive center-block mx-width"></div>
															<p>Webdenal.com</p>
														</div>
													</div>

												</div>
											</div>

											<div class="section7-container">
												<div class="row">
													<div class="col-md-12">
														<h4 class="section7-title">Bireysel Bağışçılarımız</h4>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="section7-item">
															<p>Abdullah Hardura</p>
															<p>Abdurrahman Bayraktaroğlu</p>
															<p>Ahmet Gülgün</p>
															<p>Ahmet Kayhan Dede</p>
															<p>Ahmet Umut Güngör</p>
															<p>Alev Mutlu</p>
															<p>Ali Boran</p>
															<p>Ali Büyükdereli</p>
															<p>Arda Altun</p>
															<p>Aslı Derbent</p>
															<p>Aslı Enis</p>
															<p>Aslı Zengin Çetin</p>
															<p>Asuman Bayrak</p>
															<p>Atilla Özer</p>
															<p>Ayçe Tuba Dumanlı</p>
															<p>Ayhan Türkkan</p>
															<p>Aynur Aydemir</p>
															<p>Aynur Göncü</p>
															<p>Ayşe Kapusuz</p>
															<p>Ayşe Sayın</p>
															<p>Bahar Gelmez</p>
															<p>Bahar Şimşek</p>
															<p>Başak Dal</p>
															<p>Başar Ecem Yücel</p>
															<p>Bengü Gülfer</p>
															<p>Berna Özer</p>
															<p>Betül Bahar</p>
															<p>Buket Nur Kırmızıgül</p>
															<p>Burcu Gelmez</p>
															<p>Burçak Gökçeer Baltaş</p>
															<p>Bülent Devrim Peköz</p>
															<p>Büşra Çıldık</p>
															<p>Can Akkurt</p>
															<p>Can Genc</p>
															<p>Cansever Aydın</p>
															<p>Ceyda Sayın</p>
															<p>Çağlar Özer</p>
															<p>Çiğdem Magemizoğlu</p>
															<p>Dara Aslan</p>
															<p>Demet Bozatli</p>
															<p>Deniz Emin</p>
															<p>Derya Altansoy</p>
															<p>Derya Yanmış</p>
															<p>Didem Baltacı</p>
															<p>Dilek Gönen</p>
															<p>Dobrinka Cidrof</p>
															<p>Döndü Güler</p>
															<p>Duru Şehvar Karasu</p>
															<p>Ebru Karaca</p>
															<p>Elif Aygün</p>
															<p>Elif Canmaya</p>
															<p>Elif Farukoğlu</p>
															<p>Elif Hardura</p>
															<p>Emel Gür Önen</p>
															<p>Emine Enür</p>
															<p>Emine Esen</p>
															<p>Emine Yoldaş</p>
															<p>Emre Behlül Uzunca</p>
															<p>Emre Güçlü</p>
															<p>Engin Selcuk</p>
															<p>Enver Arsoy</p>
															<p>Esen Eren Aktaş</p>
															<p>Esin Asiye Bozyel</p>
															<p>Ezgi Akar</p>
															<p>Fadime Acar Ural</p>
															<p>Fatih Fermanoğlu</p>
															<p>Fatma Belgin Albayram</p>
															<p>Fatma Efe</p>
															<p>Fatma Güç</p>
															<p>Fatma Karaaslan</p>
															<p>Fazilet Adanur</p>
															<p>Fethiye Aktepe</p>
															<p>Feyman Yürükoğlu</p>
															<p>Funda Erdemli</p>
															<p>Gamze Gale</p>
															<p>Gamze Karacam</p>
															<p>Gokhan Altansoy</p>
															<p>Gökalp Aslan</p>
															<p>Göktuğ Savaş Doğan</p>
															<p>Göktürk Kağan Çiçek</p>
															<p>Görkem Oyman</p>
															<p>Gulsah Celik</p>
															<p>Gülay Güneş</p>
															<p>Gülay Karadavut Kaplan</p>
															<p>Gülçin Menteşoğlu Durgun</p>
															<p>Gülhan Bozkurt</p>
															<p>Gülşen Çiçek Keskinsoy</p>
															<p>Günay Ermergen</p>
															<p>Günay Handan</p>
															<p>Hakan Genç</p>
															<p>Hakan İlgün</p>
															<p>Hakan Kekik</p>
															<p>Harun Taygur</p>
															<p>Hatice Serpil Bostancı</p>
															<p>Hatice Yaman</p>
														</div>
													</div>
													<div class="col-md-6">
														<div class="section7-item">
															<p>Hava Ayrılmaz</p>
															<p>Hayal Yüksel</p>
															<p>Hayriye Göksu Tekbir</p>
															<p>Hazal Suzan Selçuk</p>
															<p>Hulusi Tok</p>
															<p>Hür Göçen</p>
															<p>Hüseyin Ferhat Kul</p>
															<p>Hüseyin Kaya</p>
															<p>Hüseyin Kuplay</p>
															<p>Irene Hulst</p>
															<p>Işıl Önal</p>
															<p>İbrahim Betil</p>
															<p>İnanç Beyazıt</p>
															<p>İpek Aksehirlioglu Yener</p>
															<p>Kadir Çınar</p>
															<p>Kani Özsoy</p>
															<p>Kazim Veysel Dolapçı</p>
															<p>Kemal Ural</p>
															<p>Kemal Yener</p>
															<p>Kerem Çırpan</p>
															<p>Kerim Altınsoy</p>
															<p>Kübra Atalay Kabasakal</p>
															<p>Leyla Arslan</p>
															<p>Leyla Yıldız</p>
															<p>Lütfi Aydeniz</p>
															<p>Lütfi Öztürker</p>
															<p>Marziya Demir</p>
															<p>Mehmet Dutar</p>
															<p>Mehmet Sağlam</p>
															<p>Mehmet Tekin</p>
															<p>Mehmet Tevfik Alkış</p>
															<p>Melek Sultan Canpınar</p>
															<p>Mestan Özdemir</p>
															<p>Mesut Kelle</p>
															<p>Mine Dörtkaş</p>
															<p>Mine Poyraz</p>
															<p>Mustafa Ballı</p>
															<p>Mustafa Erhan Nas</p>
															<p>Münevver Özel</p>
															<p>Nadir Zafertepe</p>
															<p>Nazar Büyüm</p>
															<p>Necati Günal</p>
															<p>Neslihan Altun</p>
															<p>Neşe İplikçi</p>
															<p>Nihal Çiçek</p>
															<p>Nihan Satıroğlu</p>
															<p>Nirgun Ayar</p>
															<p>Osman Kocaer</p>
															<p>Özgül Kayıhan</p>
															<p>Özlem Bıçak</p>
															<p>Öznur Hande</p>
															<p>Öznur Karakaya</p>
															<p>Öznur Özkan</p>
															<p>Pelin Soygul</p>
															<p>Ramazan Doruk</p>
															<p>Remziye Sermin Örsel</p>
															<p>Sadıka İzci</p>
															<p>Salih Doğan</p>
															<p>Salin Sevinç</p>
															<p>Seda Dadikhi</p>
															<p>Seda Zulfikaroglu</p>
															<p>Selma Günay</p>
															<p>Semih Dilmen</p>
															<p>Semih Dümdüz</p>
															<p>Serpil Aslan</p>
															<p>Sevnur Malik</p>
															<p>Seyhan Yüksel</p>
															<p>Sezgin Kaçar</p>
															<p>Sibel Ölmez</p>
															<p>Sibel Toptancı</p>
															<p>Soner Alas</p>
															<p>Soner Baloğlu</p>
															<p>Sosyal Fabrika Teknolojileri</p>
															<p>Suzan Özpeynirci</p>
															<p>süleybe öztürk</p>
															<p>Sündüz Çınar Bilgin</p>
															<p>Şüheyda Karayiğit</p>
															<p>Talu S. Alatlı</p>
															<p>TOG Çalışanları</p>
															<p>Tuna Ece</p>
															<p>Uğur Atalay</p>
															<p>Uğur Berke Kayıkçı</p>
															<p>Utku Nogay</p>
															<p>Ümmü Bozkurt</p>
															<p>Vildan Barlas</p>
															<p>Yadigar Işıldar</p>
															<p>Yeşim Göksu</p>
															<p>Yeşim Koç</p>
															<p>Yıldıray Özcan</p>
															<p>Zeynep Aksehirlioglu</p>
															<p>Zeynep Korkmaz</p>
															<p>Zeynep Özkaya</p>
															<p>Zeynep Yıldız</p>
															<p>Zühal Bozok</p>
														</div>
													</div>
												</div>
											</div>

											<div class="section7-container">
												<div class="row">
													<div class="col-md-12">
														<h4 class="section7-title">Gönüllü Web Geliştirici</h4>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="section7-item">
															<p>Oğuz Kaan Çağatay Kılınç</p>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-12">
														<h4 class="section7-title">Gönüllü Çevirmenler</h4>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="section7-item">
															<p>Büşra Çağlayan<br/>Deniz Ekin Doğan</p>
														</div>
													</div>
												</div>													

												<div class="row">
													<div class="col-md-12">
														<h4 class="section7-title">Gönüllü Faaliyet Raporu Tasarım</h4>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="section7-item">
															<p>Yasin Müminoğlu</p>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-12">
														<h4 class="section7-title">Gönüllü Faaliyet Raporu Metin Düzenleme</h4>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="section7-item">
															<p>Buse Abacıoğlu</p>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-12">
														<h4 class="section7-title">Adının Açıklanmasını Tercih Etmeyen Bireysel ve Kurumsal Bağışçılarımız:</h4>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="section7-item">
															<p>2021 Yılı Toplam: 221.185 TL</p>
														</div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>
							</section>

							</div>

							<div role="tabpanel" class="tab-pane fade" id="2020">

								<section class="section section7">

									<div class="container">

										<div class="row">

											<div class="col-md-12">

												<div class="section-container align-center">

													<h3 class="section-title wo-section-description">2020 Yılı Destekçilerimiz</h3>

												</div>

											</div>

										</div>

										<div class="row">

											<div class="col-md-12">

											<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Ana Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-6">

															<div class="section7-item">

																<a href="http://www.isdb.org/" target="_blank" rel="nofollow">

																	<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/isd-bank.png" alt="İslam Kalkınma Bankası" class="img-responsive center-block "></div>

																	<p>İslam Kalkınma Bankası</p>

																</a>

															</div>

														</div>

														<div class="col-md-6">

															<div class="section7-item">

																	<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/mehmet-betil.jpg" alt="Mehmet Betil" class="img-responsive center-block"></div>

																	<p>Mehmet Betil</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Kurumsal Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<a href="http://www.nefvakfi.org/" target="_blank" rel="nofollow">

																	<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/nef-vakfi.png" alt="Nef Vakfı" class="img-responsive center-block"></div>

																	<p>Nef Vakfı</p>

																</a>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<a href="https://www.evyap.com.tr" target="_blank" rel="nofollow">

																	<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/evyap.png" alt="Evyap" class="img-responsive center-block"></div>

																	<p>Evyap Sabun Yağ Gliserin A.Ş.</p>

																</a>

															</div>

														</div>		

														<div class="col-md-4">

															<div class="section7-item">

																<a href="https://www.paribu.com/" target="_blank" rel="nofollow">

																	<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/paribu.png" alt="Paribu" class="img-responsive center-block"></div>

																	<p>Paribu</p>

																</a>

															</div>

														</div>																																										

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Bireysel Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-6">

															<div class="section7-item">

																<p>Aysel Yalçın</p>

																<p>Aslı Derbent</p>

																<p>Can Senem Gürün</p>

																<p>Derya Yadigar</p>

																<p>Erdem Eren</p>

																<p>Esra Birol</p>

																<p>Günhur Başıbüyük</p>

																<p>Hava Yadigar</p>

																<p>İbrahim Betil</p>

																<p>Levent Özdür</p>

																<p>Mehmet Kürşad Demirkol</p>

																<p>Murat Akçam</p>

																<p>Peter &amp; Eleanor Kuniholm</p>

																<p>Reha Diri</p>

															</div>

														</div>

														<div class="col-md-6">

															<div class="section7-item">

																<p>Sadıka İzci</p>

																<p>Sedef Betil</p>

																<p>Selin Güçlü</p>

																<p>Semih Dilmen</p>

																<p>Semra Evyap</p>

																<p>Serkan İzci</p>

																<p>Sevim Sezer</p>

																<p>Sia Gürün</p>

																<p>Şadan Fermanoğlu</p>

																<p>Ümit Mehmet Germeyanoğlu</p>

																<p>Ümit Şükriye Kütük</p>

																<p>Yasemin Vargı</p>

																<p>Zeynep Betil Erol</p>

																<p>Zeynep Şebnem Emek</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Kurumsal Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/yourcause-llc.png" alt="YourCause LLC" class="img-responsive center-block"></div>

																<p>YourCause LLC</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/nisantasi-uni.png" alt="Nişantaşı Üniversitesi" class="img-responsive center-block"></div>

																<p>Nişantaşı Üniversitesi</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/rage-division-lykorgos.png" alt="Rage Division x Lykorgos" class="img-responsive center-block"></div>

																<p>Rage Division x Lykorgos</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Ayni Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

													<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-deniz-bank.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Deniz Bank</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/eray.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Er-Ay Basım Hizmetleri Ltd.Şti  </p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-kpmg.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>KPMG</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/look-logo.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Look Agency</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-nef.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Nef-Timur Gayrimenkul Yapı ve Yatırım A.Ş.</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/TPF_Logo.jpg" alt="Destekçimiz" class="img-responsive center-block mx-width"></div>

																<p>Turkısh Philanthropy<br> Fund</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/wenden.jpg" alt="Destekçimiz" class="img-responsive center-block mx-width"></div>

																<p>WebdenAl.com</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Yardımseverlik Koşuları İş Ortakları</h4>

														</div>

													</div>

													<div class="row">

													<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/adim-adim.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/iyilik-pesinde.png" alt="Destekçimiz" class="img-responsive center-block mx-width"></div>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/spor-ist.png" alt="Destekçimiz" class="img-responsive center-block"></div>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Bireysel Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-6">

															<div class="section7-item">

																<p>Abdullah Hardura</p>

																<p>Ahmet Bünyamin Kaçtıoğlu</p>

																<p>Ahmet Gülgün</p>

																<p>Ahmet Ilıkoğlu</p>

																<p>Alev Kara</p>

																<p>Ali Adalıoğlu</p>

																<p>Ali Rıza Değer</p>

																<p>Alper Baydoğan</p>

																<p>Arda Altun</p>

																<p>Armagan Usanmaz</p>

																<p>Asiye Çerkezoğlu</p>

																<p>Aslı Tutku Uygur</p>

																<p>Asuman Bayrak</p>

																<p>Atakan Kara</p>

																<p>Aydan Şaşmaz</p>

																<p>Ayhan Türkkan</p>

																<p>Aykut Kefi</p>

																<p>Aykut Yenen</p>

																<p>Aylin Akar</p>

																<p>Aynur Ulutaş Özşen</p>

																<p>Ayşe Bilginsoy</p>

																<p>Ayşe Çiğdem Yazıcı</p>

																<p>Ayşe Erdoğan</p>

																<p>Ayşe İdil Gazioğlu</p>

																<p>Ayşe Nur Genç</p>

																<p>Ayşegül Çoban</p>

																<p>Ayşegül Feyzioğlu</p>

																<p>Ayşen Unur Özaslan</p>

																<p>Aytaç Gültekin</p>

																<p>Banu Şahin</p>

																<p>Banu Topçu</p>

																<p>Başak Dal</p>

																<p>Begüm Dermancıoğlu</p>

																<p>Beliz Beşışık</p>

																<p>Bengü Sazaner</p>

																<p>Beyhan Hardura</p>

																<p>Bilal Yılmaz</p>

																<p>Buğra Ekmekçibaşı</p>

																<p>Burak Kara</p>

																<p>Burcu Hanıf</p>

																<p>Burcu Yılmaz</p>

																<p>Burçak Akgün</p>

																<p>Burhan Özdemir</p>

																<p>Bülent Sungur</p>

																<p>Büşra Çıldık</p>

																<p>Can Akkurt</p>

																<p>Canan Köksal</p>

																<p>Canseri Özen</p>

																<p>Celal Sümer</p>

																<p>CelalUysal</p>

																<p>Ceren Okay</p>

																<p>Cihat Celikkan</p>

																<p>Çetin Bayramlı</p>

																<p>Defne Güçlü</p>

																<p>Deniz Emin</p>

																<p>Deniz Gürlek</p>

																<p>Deniz Savran</p>

																<p>Deniz Say</p>

																<p>Derya Yanmış</p>

																<p>Didem Özenbay</p>

																<p>Didem Ünsür</p>

																<p>Dilber Kanşay</p>

																<p>Dilek Sezer</p>

																<p>Duygu Yılmaz</p>

																<p>Egemen Dağ</p>

																<p>Ekrem Üstüay</p>

																<p>Emel Gümrükçü</p>

																<p>Emin Furkan Er</p>

																<p>Emin Sancak</p>

																<p>Emine Kurtoğlu</p>

																<p>Emine Yıldırım</p>

																<p>Engin Selçuk</p>

																<p>Enver Arsoy</p>

																<p>Eren Erzurum</p>

																<p>Ersin Bülbül</p>

																<p>Esin Aydoğan</p>

																<p>Esma Capar</p>

																<p>Esra Yasemin Tuna</p>

																<p>Ethem Ekim</p>

																<p>Eyüp Yartaşı</p>

																<p>Fatime Demir</p>

																<p>Ferhan Camadan</p>

																<p>Ferhat Yıldırım</p>

																<p>Firdevs Kahraman</p>

																<p>Furkan Kapuzoğlu</p>

																<p>Gamze Karaçam</p>

																<p>Gaye El Khoury</p>

																<p>Gökçe Yıldızer</p>

																<p>Göknur Yıldızer</p>

																<p>Göknur Akçadağ</p>

																<p>Gönül Kırel</p>

																<p>Görkem Oyman</p>

																<p>Gülşah Çelik</p>

																<p>Gülcan Öztürk</p>

																<p>Gülüm Altaca</p>

																<p>Güven Ustaoğlu</p>

																<p>Hakan Çakıroğlu</p>

																<p>Hakan Erdoğan</p>

																<p>Haluk Güran</p>

																<p>Harun Erdoğan</p>

																<p>Harun Taygur</p>

																<p>Hasan Hüseyin Kil</p>

																<p>Hasan Taner Bozdoğan</p>

																<p>Hatice Serpil Bostancı</p>

																<p>Hatice Yeşilçimen</p>

																<p>Hikmet Yıldızhan</p>

																<p>Hulusi Tok</p>

																<p>Hüseyin Kaya</p>

																<p>Hüseyin Koçoğlu</p>

																<p>Irene Hulst</p>

																<p>Işık Kırmiç Akyıldız</p>

																<p>İsmail İmdat</p>

																<p>İzi Bahar</p>

																<p>Julide Çakar</p>

																<p>Kaan Akın</p>

																<p>Kaan Cıvak</p>

																<p>Kadir ÇAlışkan</p>

																<p>Kamile Yazıcı</p>

																<p>Kazım Veysel Dolapçı</p>

																<p>Kerem Kalelioğlu</p>

																<p>Kerem Tuna Karakurum</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

															<p>Kerim Altınsoy</p>

															<p>Kristiane Eldek</p>

															<p>Latfie Can Ayhan</p>

															<p>Lütfi ÖZtürker</p>

															<p>Mehmet Dutar</p>

															<p>Mehmet Fatih Kutlu</p>

															<p>Mehmet İğdelioğlu</p>

															<p>Mehmet Korukoğlu</p>

															<p>Mehmet Küçükballı</p>

															<p>Mehmet Tevfik Alkış</p>

															<p>Melek Yıldırım</p>

															<p>Meral Karadaban</p>

															<p>Merva Özkaya</p>

															<p>Merve Coşkunserce</p>

															<p>Merve Göknar</p>

															<p>Merve Karaman</p>

															<p>Merve Şanlı</p>

															<p>Merve Özmen</p>

															<p>Merve Uysal</p>

															<p>Meryem Taş</p>

															<p>Mestan Özdemir</p>

															<p>Mesut Kelle</p>

															<p>Mine Poyraz</p>

															<p>Mustafa Akdoğan</p>

															<p>Mustafa Akif Sülahi</p>

															<p>Mustafa Aydın</p>

															<p>Mustafa Ballı</p>

															<p>Mustafa Cankal</p>

															<p>Mustafa Tural</p>

															<p>Müge Mülazımoğlu</p>

															<p>Müge Onan</p>

															<p>Nadire Şentepe</p>

															<p>Nebahat Aral Yılmaz</p>

															<p>Necati Günal</p>

															<p>Necla Topal</p>

															<p>Neslihan Ersoyak</p>

															<p>Nevcivan Kemerlioğlu</p>

															<p>Nevzat Can</p>

															<p>Nicolas Glur</p>

															<p>Nilüfer Sinanlı</p>

															<p>Nuray Bilginturan</p>

															<p>Nuray Yenen</p>

															<p>Nurhan Kürşad Demir</p>

															<p>Nurten Demirci</p>

															<p>Oğuz Kalınkara</p>

															<p>Olcay Şahin</p>

															<p>Omer Koyuncu</p>

															<p>Onur Pınar</p>

															<p>Osman İlhan</p>

															<p>Ozan Dönmez</p>

															<p>Özlem Birsin</p>

															<p>Özlem Çalışkan</p>

															<p>Özgül Kayıhan</p>

															<p>Özlem Ertekin</p>

															<p>Özlem Ezgin</p>

															<p>Özlem Küçükbakkal</p>

															<p>Pınar Çetiner</p>

															<p>Pınar Kaya</p>

															<p>Rafettin Çelik</p>

															<p>Rahmiye Sümer</p>

															<p>Ramazan Demirci</p>

															<p>Recep Kocabıyık</p>

															<p>Sacit Sezal</p>

															<p>Safiye Koçoğlu</p>

															<p>Salih Kurnaz</p>

															<p>Seda Yenen Okay</p>

															<p>Seda Yener</p>

															<p>Seda Zulfikaroğlu</p>

															<p>Sedef Karamehmet</p>

															<p>Seher Şimşek</p>

															<p>Selin-Onur Yılmaz</p>

															<p>Selin Dündar</p>

															<p>Selin Emirdağ</p>

															<p>Sema Buldanlıoğlu</p>

															<p>Sema Gümüş</p>

															<p>Semih Dümdüz</p>

															<p>Serpil Aslan</p>

															<p>Serra Berkol Erciyes</p>

															<p>Sezgin Kaçar</p>

															<p>Sibel Güran</p>

															<p>Sibel Ölmez</p>

															<p>Soner Baloğlu</p>

															<p>Songül Özsan</p>

															<p>Süleybe Öztürk</p>

															<p>Sümeyye Onuk Demirci</p>

															<p>Şaban Çekiç</p>

															<p>Şerife Yegane Toksoy</p>

															<p>Şirin Deriner</p>

															<p>Talu S.Alatlı</p>

															<p>Taner Akbay</p>

															<p>Tuna Ece</p>

															<p>Turgay Çiloğlu</p>

															<p>Tülay Capur</p>

															<p>Uğur Atalay</p>

															<p>Uğur Karaman</p>

															<p>Umida Dadaşbilge</p>

															<p>Ümit Kaya</p>

															<p>Vera Eldek Babacan</p>

															<p>Volkan Günay</p>

															<p>Yakup Gözderesi</p>

															<p>Yaşar Hazar</p>

															<p>Yavuz Çelik</p>

															<p>Yelda Elmas</p>

															<p>Yeşim Akdeniz</p>

															<p>Yeşim Göksu</p>

															<p>Yıldırım Sönmez</p>

															<p>Yılmaz Canbaz</p>

															<p>Yurdun Koruyucusu Saruman</p>

															<p>Yusuf Tamer Karabayır</p>

															<p>Yusuf Yavuz</p>

															<p>Yücel Kocaman</p>

															<p>Zafer Capur</p>

															<p>Zehra Gaye Güllüoğlu</p>

															<p>Zeynep Ayça Akoğlu</p>

															<p>Zeynep Boyner</p>

															<p>Zeynep Defne Arsel</p>

															<p>Zeynep Erdemir</p>

															<p>Zeynep Güçlü</p>

															<p>Zeynep Yılmaz Erdem</p>

															<p>Zübeyde Aygen</p>

															<p>Zübeyde Güleryüz</p>

															<p>Zülfikar Çelik</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">



													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Gönüllü Web Geliştirici</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<p>Oğuz Kaan Çağatay Kılınç</p>

															</div>

														</div>

													</div>



													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Gönüllü Çevirmenler</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<p>Fatma Kır<br/>Tarık Düzenli</p>

															</div>

														</div>

													</div>													



													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Gönüllü Faaliyet Raporu Tasarım </h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<p>Yasin Müminoğlu</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Gönüllü Faaliyet Raporu Metin Düzenleme</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<p>Şeyda Bakırcan</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Adının açıklanmasını tercih etmeyen bireysel ve kurumsal bağışçılarımız:</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<p>2020 Yılı Toplam: 109.700 TL</p>

															</div>

														</div>

													</div>

												</div>

											</div>

										</div>

									</div>

								</section>

							</div>

							<div role="tabpanel" class="tab-pane fade" id="2019">

								<section class="section section7">

									<div class="container">

										<div class="row">

											<div class="col-md-12">

												<div class="section-container align-center">

													<h3 class="section-title wo-section-description">2019 Yılı Destekçilerimiz</h3>

												</div>

											</div>

										</div>

										<div class="row">

											<div class="col-md-12">

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Ana Destekçimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<a href="http://www.nefvakfi.org/" target="_blank" rel="nofollow">

																	<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-nef-vakfi.png" alt="Nef Vakfı" class="img-responsive center-block "></div>

																	<p>Nef Vakfı</p>

																</a>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<a href="https://www.mvholding.com.tr/" target="_blank" rel="nofollow">

																	<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/mv-holding.png" alt="MV Holding" class="img-responsive center-block "></div>

																	<p>MV Holding</p>

																</a>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																	<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/mehmet-betil.jpg" alt="Mehmet Betil" class="img-responsive center-block"></div>

																	<p>Mehmet Betil</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Proje Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<a href="https://www.paribu.com/#/" target="_blank" rel="nofollow">

																	<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/paribu.jpg" alt="Paribu" class="img-responsive center-block"></div>

																	<p>Paribu Teknoloji A.Ş</p>

																</a>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Kurumsal Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<a href="https://alikev.org/" target="_blank" rel="nofollow">

																	<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-ali-ismail-korkmaz-vakfi-(alikev).png" alt="Ali İsmail Korkmaz Vakfı" class="img-responsive center-block"></div>

																	<p>Ali İsmail Korkmaz Vakfı (ALİKEV)</p>

																</a>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<a href="http://www.balkan.com.tr/tekstil/" target="_blank" rel="nofollow">

																	<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/balkan.png" alt="Balkan Tekstil Makinaları" class="img-responsive center-block"></div>

																	<p>Balkan Tekstil Makinaları</p>

																</a>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<a href="https://innerwheelturkiye.com/" target="_blank" rel="nofollow">

																	<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/dalyan.png" alt="Dalyan Inner Wheel Kulübü Derneği" class="img-responsive center-block"></div>

																	<p>Dalyan Inner Wheel Kulübü Derneği</p>

																</a>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<a href="http://fikretismetaktekinal.meb.k12.tr/" target="_blank" rel="nofollow">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/fikret-ismet.jpg" alt="Fikret İsmet Aktekin Anadolu Lisesi" class="img-responsive center-block mx-width"></div>

																<p>Fikret İsmet Aktekin Anadolu Lisesi</p>

																</a>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<a href="https://caddebostanrotary.org/" target="_blank" rel="nofollow">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/rotary.jpg" alt="İstanbul Caddebostan Rotary Kulübü" class="img-responsive center-block"></div>

																<p>İstanbul Caddebostan Rotary Kulübü</p>

																</a>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<a href="https://www.nesce.com.tr/" target="_blank" rel="nofollow">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/nesce.png" alt="NESCE İnşaat Enerji Ticaret A.Ş" class="img-responsive center-block"></div>

																<p>NESCE İnşaat Enerji Ticaret A.Ş</p>

																</a>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<a href="https://www.instagram.com/sislirotaract/" target="_blank" rel="nofollow">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/rotaract.png" alt="Şişli Rotaract Kulübü" class="img-responsive center-block"></div>

																<p>Şişli Rotaract Kulübü</p>

																</a>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<a href="http://www.yamanturkvakfi.org.tr/" target="_blank" rel="nofollow">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/yamanturk.jpg" alt="Yamantürk Vakfı" class="img-responsive center-block mx-width"></div>

																<p>Yamantürk Vakfı</p>

																</a>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<a href="https://www.zeytincekirdekleri.org/" target="_blank" rel="nofollow">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/zeytincekirdekleri.png" alt="Zeytin Çekirdekleri Derneği" class="img-responsive center-block"></div>

																<p>Zeytin Çekirdekleri Derneği</p>

																</a>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Bireysel Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<p>Ayhan Çelik</p>

																<p>Ayşe Evyap</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Aysel Yalçın</p>

																<p>Can Senem Gürün</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Dara Aslan</p>

																<p>Erol Akdemir</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Halime Diktaş</p>

																<p>Mustafa Maktalan</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Murat Akçam</p>

																<p>Osman Sezer</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Pınar Eldem</p>

																<p>Peter & Eleanor Kuniholm</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Semra Evyap</p>

																<p>Semanur Gürün </p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Kurumsal Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/default.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>ABC Holding <br>Anonim ŞTİ</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/default.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Alfa Basım Yayım Dağıtım <br>Ticaret ve San. Ltd.Şti.</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/bi-faydam-olsun.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p> Bi' Faydam <br>Olsun</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/1tl-dernegi.png" alt="Destekçimiz" class="img-responsive center-block mx-width"></div>

																<p>Bir Tek Lira Derneği</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/enka.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Enka İstinye<br> Öğrencileri</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/eyuboglu-egitim-kurumlari.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Eyüboğlu Eğitim Kurumları Kemerburgaz Kampüsü</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/ibm.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>IBM Türkiye</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/default.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Kavacık Resim Grubu</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/default.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>NGN Bilgi ve İletişim Hiz.</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/pirelli.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Pirelli-Prometon Otomobil Lastikleri A.Ş.</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Ayni Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

													<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-deniz-bank.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Deniz Bank</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/eray.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Er-Ay Basım Hizmetleri Ltd.Şti  </p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-kpmg.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>KPMG</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/look-logo.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Look Agency</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-nef.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Nef-Timur Gayrimenkul Yapı ve Yatırım A.Ş.</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/TPF_Logo.jpg" alt="Destekçimiz" class="img-responsive center-block mx-width"></div>

																<p>Turkısh Philanthropy<br> Fund</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/wenden.jpg" alt="Destekçimiz" class="img-responsive center-block mx-width"></div>

																<p>WebdenAl.com</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Yardımseverlik Koşuları İş Ortakları</h4>

														</div>

													</div>

													<div class="row">

													<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/adim-adim.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/iyilik-pesinde.png" alt="Destekçimiz" class="img-responsive center-block mx-width"></div>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/spor-ist.png" alt="Destekçimiz" class="img-responsive center-block"></div>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Bireysel Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<p>Abdülkadir Şengül</p>

																<p>Ahmet Bünyamin Kaçtıoğlu</p>

																<p>Ahmet Gülgün</p>

																<p>Ahmet Kabakçı</p>

																<p>Ahmet Şahinöz</p>

																<p>Akın Türker</p>	

																<p>Aylin Sak Aydın</p>

																<p>Ayla Bilgin</p>

																<p>Ayşe Bilginsoy</p>

																<p>Aybuke Semerci</p>

																<p>Ayla Eğilmez</p>		

																<p>Bahar Ebru Yeğin</p>

																<p>Banu Dalkıran Çoruh</p>

																<p>Basak Akan</p>

																<p>Can Paşarel</p>

																<p>Cem Şirin Arman</p>

																<p>David Handcock</p>

																<p>Defne Arsel</p>

																<p>Defne Aydemir</p>								

																<p>Devrim Uzun</p>

																<p>Demet Kılıç</p>

																<p>Ebru Afşar</p>

																<p>Ece Aras</p>

																<p>Efe Danisman</p>

																<p>Ela Nil</p>

																<p>Faruk Avcu</p>

																<p>Fatma Sevgi Eren</p>

																<p>Gamze Karaçam</p>

																<p>Gönül Kırel</p>

																<p>H.Sema Bolkent</p>

																<p>Hakan Öztürk</p>

																<p>Haktan Hattat Kılıç</p>

																<p>Halil Cem Erdağ</p>

																<p>Halit Avcı</p>

																<p>Inan Onur İleriak</p>

																<p>Ipek Varol</p>

																<p>Jad Hreibe</p>

																<p>Kamile Yıldırım</p>

																<p>Kazim Veysel Dolapçı</p>		

																<p>Lütfi Öztürker</p>

																<p>M.ziya Üçüncü</p>

																<p>Mehmet Dutar</p>

																<p>Mehmet İğdelioğlu</p>

																<p>Mehmet Murat Akyıl</p>

																<p>Nazan Kuzgun</p>

																<p>Nazlı Didem Karabatur</p>

																<p>Nazlı Keçili</p>

																<p>Oguz Sayım</p>

																<p>Olcay Şahin</p>

																<p>Patrıck Rıedl</p>

																<p>Ramazan Demirci</p>

																<p>Rasim Uyan</p>

																<p>Reyhan Bekdas</p>

																<p>Ruken Mızraklı</p>

																

																<p>Selen Voskeriçyan</p>

																<p>Selin Süter</p>

																<p>Sema Emek</p>

																<p>Semih Dilmen</p>

																<p>Semih Dümdüz</p>

																<p>Taha</p>

																<p>Tahir Tekin</p>

																<p>Uğur Atalay</p>

																<p>Ümit Dolar Tütüncüoğlu</p>

																<p>Vehibe Özdemir</p>

																<p>Yakup Şeref</p>

																<p>Yıldırım Ali Koç</p>

																<p>Zafer Mehmet Tuna</p>

																<p>Zeki Bol</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<p>Ali Dinckok</p>

																<p>Ali Murat Ekin</p>

																<p>Alqurashi</p>

																<p>Arda Altun</p>

																<p>Aslı Derbent Ozkan</p>

																<p>Asuman Bayrak</p>

																<p>Atakan Kara</p>

																<p>Ayfer Türkmen</p>

																<p>Başak Dal</p>

																<p>Bedri Sezer</p>

																<p>Berathan Çelik</p>

																<p>Cevdet Akkaya</p>

																<p>Delila Causevic</p>

																<p>Demet Küpeli</p>

																<p>Deniz  Şen</p>

																<p>Deniz Emin</p>

																<p>Deniz Baran</p>

																<p>Deniz Gürlek</p>

																<p>Emine Uzel</p>

																<p>Engin Selcuk</p>

																<p>Esen Sirel Ongun</p>

																<p>Esma Ergün</p>

																<p>Esra Arslan Safi</p>

																<p>Filiz Okumuş</p>

																<p>Fuat Acar Ural</p>

																<p>Görkem Alpaslan</p>

																<p>Görkem Oyman</p>

																<p>Hanife Saraç</p>

																<p>Harun Koç</p>

																<p>Hatice Serpil Bostancı</p>

																<p>Hazar Bekaroglu</p>

																<p>Hızır Karaer</p>

																<p>Hülya Kaçtıoğlu</p>

																<p>Hülya Kurku</p>

																<p>Irene Hulst</p>

																<p>İbrahim Betil</p>

																<p>İbrahim Volkan Bodur</p>

																<p>Jeff Behar</p>

																<p>Kemal Ural</p>

																<p>Kerim Unat</p>

																<p>Mehmet Sinan Gülener</p>

																<p>Mehtap Özkara Balta</p>

																<p>Melis Nurluoğlu</p>

																<p>Meltem Batur</p>

																<p>Meral Karadaban</p>

																<p>Mert Surözü</p>

																<p>Merve Vardar Ashaboğlu</p>

																<p>Necdet Alp Ressamoğlu</p>

																<p>Neslihan Kahyaoğlu</p>

																<p>Nevfel Abdullah Görücü</p>

																<p>Nevin Ulusoy</p>

																<p>Nil Berki Kaman</p>

																<p>Omri Gainsburg</p>

																<p>Osman Nuri Özkoca</p>

																<p>Paymar Gıda Ve Kimyevi Maddeler</p>

																<p>Pelin Kılıçkaya</p>

																<p>Semra Yavuz</p>

																<p>Sezer Engin</p>

																<p>Sezgin Kaçar</p>

																<p>Sibel Ölmez</p>

																<p>Sinan Abay</p>

																<p>Sinan Çelik</p>

																<p>Taner Özdemir</p>

																<p>Toygar sedat Ekici </p>

																<p>Yakup Altun</p>

																<p>Yahya Şükrü Gürün</p>

																<p>Zeynep Karakoç</p>

																<p>Zeynep Karan</p>	

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<p>Ayhan Türkkan</p>

																<p>Aykut Dirman</p>

																<p>Aykut Kefi</p>

																<p>Ayla Sakacı</p>

																<p>Ayşe Erdoğan</p>

																<p>Ayşe Hande Sabuncuoğlu</p>

																<p>Ayşe İrem Kınay</p>

																<p>Ayşegül Feyzioğlu </p>

																<p>Beril Sertkaya</p>

																<p>Berrin Baldöktü</p>

																<p>Beste Duran Kocabıyık</p>

																<p>Betül Turan</p>

																<p>Beyza Erdoğan</p>

																<p>Binari</p>

																<p>Cristi Lungu</p>

																<p>Deniz Reman</p>

																<p>Deniz Uyanık</p>

																<p>Derya Sel Bozkurt</p>

																<p>Deniz Yılmaz</p>

																<p>Derya Sel Bozkurt</p>

																<p>Didem Ünsür</p>

																<p>Dilber Kanşay</p>

																<p>Esra Birol</p>

																<p>Esra Yasemin tuna</p>

																<p>Eyüp Yartaşı</p>

																<p>Füsun Kıymet Ünlü</p>

																<p>Gulsah Celik</p>

																<p>Güneş Sedat</p>

																<p>Gürhan Gürün</p>

																<p>Hüseyin Güllüoğlu</p>

																<p>Hüseyin Habip Şahin</p>

																<p>Hüseyin Kaya</p>

																<p>Hüseyin Sezgin</p>

																<p>İmran Ebru Bakay</p>

																<p>İpek Yener</p>

																<p>İrem Büyükyazgan</p>

																<p>Julide Cakir</p>

																<p>Kirk L Albers</p>

																<p>Mesut Kelle</p>

																<p>Mustafa Denizer</p>

																<p>Mustafa Dereli</p>

																<p>Mustafa Emre Şanda</p>

																<p>Münire Seda Varon</p>

																<p>Mürvet Pınar Vatansever</p>

																<p>Nurbanu Durak</p>

																<p>Nurdan Yılmaz</p>

																<p>Nursel Celep</p>

																<p>Nurten Demirci</p>

																<p>Ozde Demirturk</p>

																<p>Ozhan Bekaroglu</p>

																<p>Önder Aslan</p>

																<p>Özgül Kayıhan</p>

																<p>Özlem Ertekin</p>

																<p>Pınar Eldem</p>

																<p>Siren Toksoy</p>

																<p>Soner Baloğlu</p>

																<p>süleybe öztürk</p>

																<p>Şule Tekel</p>

																<p>Turgut Derman</p>

																<p>Tülay Demirel</p>

																<p>Yasemin Dindar</p>

																<p>Yegul</p>

																<p>Zeynep Şefika Çelikoğlu</p>

																<p>Zühre Kordon Akın</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Gönüllü Çevirmen</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<p>Seda Yeşildeniz</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Gönüllü Faaliyet Raporu Tasarım </h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<p>Yasin Müminoğlu</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Gönüllü Faaliyet Raporu Metin Düzenleme</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<p>Dicle Yeşilleten</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Gönüllü Fotoğraf Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<p>Sıla Ünlü</p>

																<p>Hakan Selçuk</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Adının açıklanmasını tercih etmeyen bireysel ve kurumsal bağışçılarımız:</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<p>2019 Yılı Toplam: 36.500 TL</p>

															</div>

														</div>

													</div>

												</div>

											</div>

										</div>

									</div>

								</section>

							</div>

							<div role="tabpanel" class="tab-pane fade" id="2018">

								<section class="section section7">

									<div class="container">

										<div class="row">

											<div class="col-md-12">

												<div class="section-container align-center">

													<h3 class="section-title wo-section-description">2018 Yılı Destekçilerimiz</h3>

												</div>

											</div>

										</div>

										<div class="row">

											<div class="col-md-12">

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Ana Destekçimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-nef.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Nef-Timur Gayrimenkul Yapı ve Yatırım A. Ş.</p>

															</div>

														</div>

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-nef-vakfi.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Nef Vakfı</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Proje Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-global-wate-cahllenge.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Global Wate Cahllenge</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Kurumsal Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-ali-ismail-korkmaz-vakfi-(alikev).png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Ali İsmail Korkmaz Vakfı (ALİKEV)</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/asas.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>ASAŞ Alüminyum Sanayi ve Ticaret A.Ş.</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/nesce.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>NESCE İnşaat Enerji Ticaret A.Ş.</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/sarkuysan.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Sarkuysan Elektrolitik Bakır San ve Tic. A.Ş</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/superlit.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Superlit Boru San. A.Ş</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/subor.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Subor Boru San. ve Tic. A.Ş.</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/turkish-philanthropy-fund.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Turkısh Philanthropy Fund </p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Bireysel Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<p>Ali Murat Ekin</p>

																<p>Ahmet Ateş</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Ahmet Kabakçı</p>

																<p>Çiğdem Magemizoğlu</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Dilber Kanşay</p>

																<p>Derya Yadigar</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Dobrinka Cidrof</p>

																<p>Esra Birol</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Ebru Dorman</p>

																<p>Güner Doğan</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>İhsan Ayrancıoğlu</p>

																<p>İbrahim Betil</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Mehmet Betil</p>

																<p>Mevlüt Tankişi</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Metin Çarmıklı</p>

																<p>Murat Akcam</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Shahram Khabbaz Tamimi</p>

																<p>Sema Emek</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Semra Evyap</p>

																<p>Zafer Mehmet Tuna</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Zeynep Evyap</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Kurumsal Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/ali-akcan.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Ali Akcan Fotoğrafçılık</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/dream-sales-machine.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Dream Sales Machine</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/eyuboglu-egitim-kurumlari.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Eyüboğlu Eğitim Kurumları Kemerburgaz ve Çamlıca İlkokulu</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-dumyy.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Ekspres Metal Nakliye</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-fixa-yapi-kimyasallari.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>FİXA Yapı Kimyasalları</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/ibm.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>IBM Türkiye</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/turkiye-sakatlar-dernegi.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Türkiye Sakatlar Derneği</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/yapi-merkezi.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Yapı Merkezi</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Ayni Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-kpmg.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>KPMG</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-muka-matbaacilik.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Müka Matbaacılık</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-webden-al-com.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>WebdenAl.com</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-nef.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Nef-Timur Gayrimenkul Yapı ve Yatırım A.Ş.</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-deniz-bank.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Deniz Bank</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Bireysel Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<p>A.Serhat Demire</p>

																<p>Abdulhakim Dağ</p>

																<p>Ahmet Gülgün</p>

																<p>Alev Ayzan</p>

																<p>Ali Rıza Akcan</p>

																<p>Ali Rıza Değer</p>

																<p>Ali Ulu</p>

																<p>Ali Yıldırım</p>

																<p>Alper Kara</p>

																<p>Altuğ Deniz</p>

																<p>Altuğ Narin</p>

																<p>Andac Arslan</p>

																<p>Arife Başaran</p>

																<p>Ayhan Avcu</p>

																<p>Adem Çelik</p>

																<p>Ayşem Gürses</p>

																<p>Aynur Kırımlı</p>

																<p>Ayşe Koç</p>

																<p>Atakan Kara</p>

																<p>Amber Oflazer</p>

																<p>Arda Altun</p>

																<p>Aykut Kefi</p>

																<p>Aynur Kırımlı</p>

																<p>Abdullah Hardura</p>

																<p>Aslı Derbent Özkan</p>

																<p>Aslı Tunç</p>

																<p>Ali Serdar Dilmen</p>

																<p>Ali Yakışıklı</p>

																<p>Abdulkerim Emek</p>

																<p>Abidin Karabulut</p>

																<p>Ahmet Refik Konyalı</p>

																<p>Alper Ataker</p>

																<p>Alper Bülent Koç</p>

																<p>Alper Han</p>

																<p>Altan Deresoy</p>

																<p>Ata Nimetoglu</p>

																<p>Atilla Şahin</p>

																<p>Arslan Rafet Kaya</p>

																<p>Arzu Unal Erman</p>

																<p>Arzu Altınmakas</p>

																<p>Arzu Kalkavan</p>

																<p>Aslı Deşer</p>

																<p>Atakan Doğan</p>

																<p>Aydın Altunatmaz</p>

																<p>Aydın Demircili</p>

																<p>Aydın Diricanlı</p>

																<p>Ayhan Erol</p>

																<p>Aylin Dağsalgüler</p>

																<p>Aylin Sak Aydın</p>

																<p>Ayla Bilgin</p>

																<p>Ayşe Bilginsoy</p>

																<p>Aybuke Semerci</p>

																<p>Ayla Eğilmez</p>

																<p>Devrim Uzun</p>

																<p>Demet Kılıç</p>

																<p>Deniz Baran</p>

																<p>Deniz Gürlek</p>

																<p>Deniz Yılmaz</p>

																<p>Derya Sel Bozkurt</p>

																<p>Didem Büyükdağ</p>

																<p>Didem Kurtulus</p>

																<p>Dilay Balioğlu</p>

																<p>Didem Duru</p>

																<p>Dilek Dada</p>

																<p>Dinemis Kozok</p>

																<p>Dilek Dogan</p>

																<p>Dilek Gürsoy</p>

																<p>Dilek Hançerli</p>

																<p>Derya Yanmış</p>

																<p>Dudu Erol</p>

																<p>Duygu Bank</p>

																<p>Duygu Ekşoğlu</p>

																<p>Duygu Yoldaş</p>

																<p>Duygu Güner</p>

																<p>Ebru Afşar</p>

																<p>Ebru İzgi</p>

																<p>Engin Selçuk</p>

																<p>Ece Daban</p>

																<p>Ece Omur</p>

																<p>Eda-İdil-Defne Ayhan</p>

																<p>Ege Ataş</p>

																<p>Ekrem Seyman</p>

																<p>Elif Burlu</p>

																<p>Elif Günay</p>

																<p>Elif Özdemir</p>

																<p>Elia Penso</p>

																<p>Elif Yıldırımçakar</p>

																<p>Elşen Mammadov</p>

																<p>Elif Seker</p>

																<p>Elif ve Şükrü Deniz</p>

																<p>Erkut Bozkurt</p>

																<p>Esra Teker</p>

																<p>Emek Çalışkan</p>

																<p>Emine Özbek</p>

																<p>Emin Deniz</p>

																<p>Emre Beyza Yeşil</p>

																<p>Eyüp Yartaşı</p>

																<p>Esra Yasemin Tuna</p>

																<p>Erdem Yılmaztürk</p>

																<p>Ercan Bezan</p>

																<p>Ercan Sezer</p>

																<p>Erdal Sezer</p>

																<p>Erdem Aksakal</p>

																<p>Erdem Kemal Koyuncu</p>

																<p>İstem Akalp</p>

																<p>İpek Yüksel</p>

																<p>İrem Kübra Emek</p>

																<p>İsmail Kapusuz</p>

																<p>İsmail Pınar</p>

																<p>İsmet Kale</p>

																<p>Julide Cakir</p>

																<p>Kaan Bekaroğlu</p>

																<p>Kadir Bakar</p>

																<p>Kadir Gürbüz</p>

																<p>Kadriye Arslan</p>

																<p>Kamil Serdar Oğur</p>

																<p>Kamile Vurgun</p>

																<p>Kayhan Aygar</p>

																<p>Kaysu Beyazyurek</p>

																<p>Kavacık Resim Grubu</p>

																<p>Kemal Özer</p>

																<p>Kemal Özkan Yılmaz</p>

																<p>Keremali Akyazılı</p>

																<p>Kerem Okumuş</p>

																<p>Kerem Kutlu</p>

																<p>Katibe İlhan</p>

																<p>Kasım Emre Aydın</p>

																<p>Kaddafi Bozkurt</p>

																<p>Kıvanç Erginel</p>

																<p>Korkut Kaya</p>

																<p>Kutsal Kocer</p>

																<p>Larisa Blum</p>

																<p>Levent Yarar</p>

																<p>Lütfi Öztürker</p>

																<p>Mari Antrikot</p>

																<p>Mansur Beyazyürek</p>

																<p>Mehmet Ağaçcı</p>

																<p>Mehmet Eğinci</p>

																<p>Mehmet Şah Gürsel</p>

																<p>Mehmet Türk</p>

																<p>Mehmet Uğur Öncel</p>

																<p>Mehmet Unutur</p>

																<p>Mehmet Sait Özdemir</p>

																<p>Mehmet Sinan Esgin</p>

																<p>Melek Özaslan</p>

																<p>Meliha Kara</p>

																<p>Melisa Fakabasmaz Ozerdim</p>

																<p>Meltem Fakabasmaz</p>

																<p>Meltem Ağduk</p>

																<p>Mert Güvenen</p>

																<p>Mert Özenç</p>

																<p>Merve Kece Dogan</p>

																<p>Merve Büyükbektaş</p>

																<p>Merve Nur Okutan</p>

																<p>Rümeysa Tunçel</p>

																<p>Rüya Altın Koç</p>

																<p>Sabiha Işık</p>

																<p>Salih Onur Tezel</p>

																<p>Salih Şahin</p>

																<p>Sami Ayhan</p>

																<p>Saniye Güleç</p>

																<p>Savaş Arson</p>

																<p>Savaş Demir</p>

																<p>Seçil Tüfekçi</p>

																<p>Seda Gandaş</p>

																<p>Selin Karsan</p>

																<p>Selda Ateş</p>

																<p>Selda Kutlu</p>

																<p>Selen Bağdadioğlu</p>

																<p>Selin Erişir</p>

																<p>Selma Kılıç</p>

																<p>Sema Karaman</p>

																<p>Semih Dilmen</p>

																<p>Semra Özgüler Yılmaz</p>

																<p>Semra Akkuş Akman</p>

																<p>Senem-Bülend Arıkan</p>

																<p>Semra Alpaslan</p>

																<p>Senem Sahin</p>

																<p>Sercan Ferruhoğlu</p>

																<p>Sercan Yüksel</p>

																<p>Serdar Akın</p>

																<p>Serdar Altınışık</p>

																<p>Serdar Apaydın</p>

																<p>Serdar Gürbüzceylan</p>

																<p>Serdar Yılmaz</p>

																<p>Serhan Süzer</p>

																<p>Serhat Kaya</p>

																<p>Serhat Koçak</p>

																<p>Serkan Eskizara</p>

																<p>Serkan İncekara</p>

																<p>Serkan Karaman</p>

																<p>Serkan Pakhuylu</p>

																<p>Serpil Özuyguz</p>

																<p>Sertaç Dilmen</p>

																<p>Sevde Akol</p>

																<p>Sevgi Çelik</p>

																<p>Sevim Sezer</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<p>Ahmet Capaci</p>

																<p>Ahmet Eke</p>

																<p>Aydan Bayır</p>

																<p>Aydil Kaya</p>

																<p>Aylin Şahin</p>

																<p>Aysen Ozsan Aygen</p>

																<p>Aysu Aktepe</p>

																<p>Ayse Tokpinar</p>

																<p>Ayşe Ekşioğlu</p>

																<p>Ayşe Tükrükçü</p>

																<p>Ayşe Uyduranoğlu</p>

																<p>Ayse Zeynep Schmidt</p>

																<p>Ayşe Uğuz</p>

																<p>Ayse Acar</p>

																<p>Ayşegül Bilgin</p>

																<p>Ayşegül Feyzioğlu</p>

																<p>Ayten Sayımbay</p>

																<p>Aysel Aydın</p>

																<p>Aysel Çelebi</p>

																<p>Ayşecan Terzioğlu</p>

																<p>Ayşen Yaşar Hızal</p>

																<p>Aziz Şaşkın</p>

																<p>Bahar Alptekin Yakşı</p>

																<p>Bahar Baral</p>

																<p>Bahar Pekkul</p>

																<p>Bahar Varul</p>

																<p>Banu Atıl</p>

																<p>Baran Kaya</p>

																<p>Başak Aya</p>

																<p>Başak Çolakoğlu Tüzer</p>

																<p>Bayram Ali Öner</p>

																<p>Başak Sarıca</p>

																<p>Banu Betül Kocaman</p>

																<p>Bedriye Altinoz</p>

																<p>Begüm Ata</p>

																<p>Belgin  Yıldızhan</p>

																<p>Berivan Elis</p>

																<p>Berrin Gencal</p>

																<p>Belma Çağlar</p>

																<p>Bengü Deliktaş</p>

																<p>Bengü Sanem Pazvant</p>

																<p>Berna Tucel Palamut</p>

																<p>Berrin Başbuğ</p>

																<p>Beste Turanlı</p>

																<p>Bihter Neziroğlu</p>

																<p>Binnaz Aydos</p>

																<p>Büşra Karacadağ</p>

																<p>Betül Şenol</p>

																<p>Betül Taşdelen</p>

																<p>Bilal Eren</p>

																<p>Burak Akın</p>

																<p>Burak Avcı</p>

																<p>Burak Cücen</p>

																<p>Erdi Yerebasmaz</p>

																<p>Eren Çamurdan</p>

																<p>Erhan Argın</p>

																<p>Ersoy Yılmaz</p>

																<p>Ertan Kabakcı</p>

																<p>Esat Taş</p>

																<p>Esma Ukan</p>

																<p>Esra Doğruyol</p>

																<p>Esra Güzey</p>

																<p>Esra Ertaş</p>

																<p>Esra Onder</p>

																<p>Eyüb Canlı</p>

																<p>Ezgi Özdemir</p>

																<p>Fahri Gandaş</p>

																<p>Fatih Ekinci</p>

																<p>Fatma Yiğit</p>

																<p>Fatoş Şahin</p>

																<p>Faysal Şebay</p>

																<p>Ferdi Öztürk</p>

																<p>Ferit Bayrak</p>

																<p>Fethi Alıcı</p>

																<p>Fevzi Toksoy Actecon</p>

																<p>Feyza Ramazanoğlu</p>

																<p>Figen Midilli</p>

																<p>Filiz Bikmen</p>

																<p>Filiz Civelek</p>

																<p>Filiz Karakaya</p>

																<p>Filiz Şebay</p>

																<p>Firdevs Betül Karayağmurlu</p>

																<p>Firuze Niya Gürbüz</p>

																<p>Fulya Topuz</p>

																<p>Gamze Erdemir</p>

																<p>Garbis Ozaltin</p>

																<p>Genco Genc</p>

																<p>Gizem Baydar</p>

																<p>Gizem Berkay</p>

																<p>Gizem Kara</p>

																<p>Gizem Kulekcioglu</p>

																<p>Gizem Sultan Acikgozmert</p>

																<p>Gonca Akpınar</p>

																<p>Güliz Çapar</p>

																<p>Gökçe Demirel</p>

																<p>Gökçe İbze</p>

																<p>Gökhan Topoğlu</p>

																<p>Gökhan Cenker Yılmaz</p>

																<p>Gökhan Akcali</p>

																<p>Göksenin Polat</p>

																<p>Göknil Bigan</p>

																<p>Gulsah Agirgol</p>

																<p>Gulsah Celik</p>

																<p>Merve Öztürk</p>

																<p>Mertan Gür</p>

																<p>Mete Meleksoy</p>

																<p>Metin Ulutaş</p>

																<p>Mehmet Bayrak</p>

																<p>Meriç Çiftgül</p>

																<p>Metin Sever</p>

																<p>Mine Burkay</p>

																<p>Muhammed Ersat Emek</p>

																<p>Murat Baydar</p>

																<p>Murat Kaynar</p>

																<p>Murat Sert</p>

																<p>Murat Sel</p>

																<p>Muge Bayrakli</p>

																<p>Muge Satman Weatherley</p>

																<p>Muhammed Çüren</p>

																<p>Murat Çaglayan</p>

																<p>Murat Çitilgülü</p>

																<p>Murat Dereli</p>

																<p>Murat Küçüker</p>

																<p>Mustafa Taner Özden</p>

																<p>Mustafa Güngör Kaya</p>

																<p>Muhittin Seyhan</p>

																<p>Naciye Kılıç</p>

																<p>Nazmiye Altın</p>

																<p>Nergiz Özdemir</p>

																<p>Neslihan Kahyaoğlu</p>

																<p>Neslihan Tatlıcı</p>

																<p>Nesrin Çakar</p>

																<p>Nergis Doğan</p>

																<p>Neyran Akyıldız</p>

																<p>Nezihe Süngün</p>

																<p>Nilhan Yüksel</p>

																<p>Nihat Diler</p>

																<p>Nilay Ersen</p>

																<p>Nilay Guldur</p>

																<p>Nil-Ozlem-Murat Basboga</p>

																<p>Nilüfer Karatay</p>

																<p>Nur - Onur Karan</p>

																<p>Nurbanu Durak</p>

																<p>Nurçin Erel</p>

																<p>Nur Hilal Baştürk</p>

																<p>Nur Selcen Duygun</p>

																<p>Nurcihan Ak</p>

																<p>Nurdan Tuncay</p>

																<p>Nevin Ulusoy</p>

																<p>Neslihan Arslan Eler</p>

																<p>Oğuzhan Uluğ</p>

																<p>Okan Uğur</p>

																<p>Olcay Soykan</p>

																<p>Oltan Aksaç</p>

																<p>Sevinç Özer</p>

																<p>Seçil Bilge Karabacak</p>

																<p>Seydi Yapışlar</p>

																<p>Seyit Sönmez</p>

																<p>Seyhan Önel</p>

																<p>Seza Iklıma Underger</p>

																<p>Sezen Erdem</p>

																<p>Sezgin Kaçar</p>

																<p>Sezin Özdoğan Erkul</p>

																<p>Sibel Çırak Yıldırım</p>

																<p>Sinan Gandaş</p>

																<p>Sinem Bayrak Şahan</p>

																<p>Sinem Gökçe</p>

																<p>Simal İnce</p>

																<p>Soner Baloğlu</p>

																<p>Suat Özçağdaş</p>

																<p>Suzan Bayazıt</p>

																<p>Suzan Sezer</p>

																<p>Suna Fidan</p>

																<p>Süleybe Öztürk</p>

																<p>Süleyman Kayışır</p>

																<p>Süleyman Sarıaltın</p>

																<p>Sümeyra Seher Ertuğrul</p>

																<p>Şengül Dalkıç</p>

																<p>Şeyda Yaşar</p>

																<p>Şeymanur Çakan</p>

																<p>Şeyda Havuş</p>

																<p>Talip Atabey</p>

																<p>Tamer Çamkıran</p>

																<p>Tamer Yakut</p>

																<p>Tanyar Ablak</p>

																<p>Temel Kirci</p>

																<p>Tarkan Çiçek</p>

																<p>Tuğba Baykal</p>

																<p>Tuğba Gökçe Kepez</p>

																<p>Tuğba Şen</p>

																<p>Tuba Toprak</p>

																<p>Tolga Ozdemir</p>

																<p>Toygar Sedat Ekici</p>

																<p>Tuba Bozaykut Bük</p>

																<p>Tülay Demirel</p>

																<p>Ufuk Ertek</p>

																<p>Uğur Alkapar</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<p>Ahmet Kaya</p>

																<p>Ahmet Bayoğlu</p>

																<p>Burak Öztürk</p>

																<p>Burcu Akbaş</p>

																<p>Burcu Bahadır</p>

																<p>Burcu Büyükdağ</p>

																<p>Burcu Sarıca</p>

																<p>Burhanettin Tuna</p>

																<p>Buğra Akol</p>

																<p>Bunyamin Oner</p>

																<p>Burak Altınay</p>

																<p>Buşra Gürbak</p>

																<p>Büşra Dada</p>

																<p>Can Aygen</p>

																<p>Canan İlter</p>

																<p>Canan Koca</p>

																<p>Cankat Coşkun</p>

																<p>Cansu Vardan Dada</p>

																<p>Cansu Yüksel</p>

																<p>Cansu Ekşioğlu</p>

																<p>Celal Sümer</p>

																<p>Cem Hakverdi</p>

																<p>Cem Muratoğlu</p>

																<p>Cemal Ateş</p>

																<p>Cemresu Aksu</p>

																<p>Ceren Şahin</p>

																<p>Ceren Araz</p>

																<p>Ceyda Özgün</p>

																<p>Ceylan Tarhan</p>

																<p>Cemil Gündüz</p>

																<p>Cihan Babayiğit</p>

																<p>Cihan Dizman</p>

																<p>Cihan Yavuz</p>

																<p>Curtis Vayne Erhart</p>

																<p>Coşkun Susuzlu</p>

																<p>Celal Korkut</p>

																<p>Cevdet Akkaya</p>

																<p>Çağdaş Ulucan</p>

																<p>Çagri Tilki</p>

																<p>Çevikalp Sütunç</p>

																<p>Çidem Faal</p>

																<p>Çiğdem Selgur</p>

																<p>Çise Kondu</p>

																<p>Damla Sonat</p>

																<p>Dilay Balioğlu</p>

																<p>Defne Esin</p>

																<p>Demet Topaçoğlu</p>

																<p>Demir Şen</p>

																<p>Deniz Günhan</p>

																<p>Deniz Kurt</p>

																<p>Deniz Selvi Öztay</p>

																<p>Derya Kap</p>

																<p>Derya Kesiciler</p>

																<p>Gülcan Büyükdereli</p>

																<p>Gülen Kurt Öncel</p>

																<p>Gülseren Özcan</p>

																<p>Gülsevim Kahraman</p>

																<p>Güneş Ergen</p>

																<p>Güngör Bora Uygun</p>

																<p>Gökhan Akmanlar</p>

																<p>Gül Aydoğdu</p>

																<p>Gülçin Büyükçil</p>

																<p>Gülşen Yenice</p>

																<p>Hakan Aydin</p>

																<p>Hakan Öztürk</p>

																<p>Hakan Pekcan</p>

																<p>Halil Kılıç</p>

																<p>Haluk Alemdağ</p>

																<p>Hamit Levent Evci</p>

																<p>Hande Yavuz</p>

																<p>Hasan Aydoğdu</p>

																<p>Hasan Gez</p>

																<p>Hasan Kılıçkaya</p>

																<p>Hatice Taşkan</p>

																<p>Hatice Serpil Bostancı</p>

																<p>Havva Tankişi</p>

																<p>Herman Karadere</p>

																<p>Hilal Dülge</p>

																<p>Hisar Uyar</p>

																<p>Hümeyra Uzuner</p>

																<p>Hüseyin Baytar</p>

																<p>Hüsniye Kleboth</p>

																<p>Hüseyin Kuplay</p>

																<p>Hüseyin Taş</p>

																<p>Habibe Özsoy</p>

																<p>Hüseyin Kaya</p>

																<p>Hacer Bayam</p>

																<p>Hüseyin Başyazıcıoğlu</p>

																<p>Ian Dougherty</p>

																<p>Ilknur Burci</p>

																<p>Irmak Kaleli</p>

																<p>Irene Hulst</p>

																<p>Işıl Arısoy Kaya</p>

																<p>Işık Kıraç</p>

																<p>İbrahim Akay</p>

																<p>İlhami Akkum</p>

																<p>Ilker iİan Çaynak</p>

																<p>İlker Özer</p>

																<p>İlknur Görgün</p>

																<p>İlsu Burçoğlu</p>

																<p>İdil Arıker</p>

																<p>İrep Kebelioğlu</p>

																<p>İsa Yükseker</p>

																<p>Onur Kerim Dermanlı</p>

																<p>Onur Othan</p>

																<p>Orhan Şen</p>

																<p>Orhan Tungaç</p>

																<p>Osman İlhan</p>

																<p>Osman-Duru-Sevim Ayrancıoğlu</p>

																<p>Orkun Göze</p>

																<p>Orhan Umut Yağan</p>

																<p>Özge Zeynep Karatas</p>

																<p>Özge Yavuz</p>

																<p>Özgül Dizman</p>

																<p>Özgür Güreş</p>

																<p>Özgür Süslü</p>

																<p>Özlem Can Güngör</p>

																<p>Özlem Aksel Basboga</p>

																<p>Özlem Sehirli Gokyilmaz</p>

																<p>Öznur Aluş</p>

																<p>Öznur Karasakal</p>

																<p>Ömer Aydın</p>

																<p>Ömer Uca</p>

																<p>Önder Akın</p>

																<p>Önder Aydemir</p>

																<p>Özge Torun</p>

																<p>Özlem Görür</p>

																<p>Özlem Algül</p>

																<p>Öznur Ayas</p>

																<p>Paul Devery</p>

																<p>Pelin Özyurt</p>

																<p>Pelin Kılıçkaya</p>

																<p>Pelin Urgancilar</p>

																<p>Peren Tuzkaya</p>

																<p>Perihan Çakır</p>

																<p>Pınar Erdem</p>

																<p>Pınar İlkiz</p>

																<p>Pınar Kuzucu</p>

																<p>Pınar Bilican</p>

																<p>Pınar Uyan Semerci</p>

																<p>Pınar-Tamer Çamkıran</p>

																<p>Rabia Beyza Emek</p>

																<p>Ramazan Çalar</p>

																<p>Ramazan Erzik</p>

																<p>Rana Okur Akbaş</p>

																<p>Rahşan Yavuz</p>

																<p>Rana İren</p>

																<p>Rashid Ramazanov</p>

																<p>Renan Baykal</p>

																<p>Rıdvan Mutlu</p>

																<p>Rojda Uyar</p>

																<p>Rufiye Gandaş</p>

																<p>Rumeysa Sezer</p>

																<p>Uğur İlboğa</p>

																<p>Uğur Nasıroğlu</p>

																<p>Ulaş Onol</p>

																<p>Umut Gürsel</p>

																<p>Ümran Gündüz Yıldırım</p>

																<p>Ümit Ürün</p>

																<p>Ümran Öztürk</p>

																<p>Vedat Akın</p>

																<p>Veysel Sevgili</p>

																<p>Volkan Erturk</p>

																<p>Volkan Çevik</p>

																<p>Yasemin Sezengöz</p>

																<p>Yasin Tufan</p>

																<p>Yakup Şeref</p>

																<p>Yaşar Dikbıyık</p>

																<p>Yavuz Yaman</p>

																<p>Yasin Turkdogan</p>

																<p>Yeliz Aydın</p>

																<p>Yeliz Canik</p>

																<p>Yeliz Alaaddinoglu</p>

																<p>Yeşim Çokeker</p>

																<p>Yeşim Zehra Keskin</p>

																<p>Yigit Aksakoglu</p>

																<p>Yusuf Erdem</p>

																<p>Yüksel Tireli</p>

																<p>Yüksel Çomak</p>

																<p>Yonca Tokbaş</p>

																<p>Zafer Nazikol</p>

																<p>Zehra Özer</p>

																<p>Zerrin Koyunsağan</p>

																<p>Zeynep Dilbirligi</p>

																<p>Zeynep Görpe</p>

																<p>Zeynep Yaşar</p>

																<p>Zeynep Ates</p>

																<p>Zeynep Başak Demirağ</p>

																<p>Zeynep Erzik</p>

																<p>Zeynep Tuğba Gülcan</p>

																<p>Zuhal Karaman</p>

																<p>Zühre Kordon Akın</p>

																<p>Zeki Bol</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

												<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Adının Açıklanmasını İstemeyen Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Adının Açıklanmasını İstemeyen Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<p>2018 Yılı Toplam: 240.330 TL</p>

															</div>

														</div>

													</div>

												</div>

											</div>

										</div>

									</div>

								</section>

							</div>

							<div role="tabpanel" class="tab-pane fade" id="2017">

								<section class="section section7">

									<div class="container">

										<div class="row">

											<div class="col-md-12">

												<div class="section-container align-center">

													<h3 class="section-title wo-section-description">2017 Yılı Destekçilerimiz</h3>

												</div>

											</div>

										</div>

										<div class="row">

											<div class="col-md-12">

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Ana Destekçimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-nef.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Nef-Timur Gayrimenkul Yapı ve Yatırım A. Ş.</p>

															</div>

														</div>

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-nef-vakfi.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Nef Vakfı</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Proje Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-undp.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>UNDP</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-coca-cola.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>The Coca Cola Foundation</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-global-wate-cahllenge.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Global Wate Cahllenge</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Kurumsal Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-ali-ismail-korkmaz-vakfi-(alikev).png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Ali İsmail Korkmaz Vakfı (ALİKEV)</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/turkish-philanthropy-fund.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Turkısh Philanthropy Fund</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/global-nutritech-ltd.sti.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Global Nutritech Ltd.Şti.</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-sev-amerikan-loleji.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Sev Amerikan Koleji</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Bireysel Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<p>Abidin Karabulut </p>

																<p>Ali Murat Ekin</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Alper Turan</p>

																<p>Deniz Bülbül</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Dara Aslan</p>

																<p>Dilşat Atuş</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Esra Yasemin Karaduman</p>

																<p>Fatih Ağaoğlu</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>İzzet Söyek</p>

																<p>Mustafa Çiper</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Nimet Kibar</p>

																<p>Özgür Naçar</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Zafer Mehmet Tuna</p>

																<p>Sinem Ceren Çerçiller</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Shahram Khabbaz Tamimi</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Kurumsal Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-fixa-yapi-kimyasallari.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>FİXA Yapı Kimyasalları</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-sarkuysan-elektrolitik-bakir-san-ve-tic-a-s.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Sarkuysan Elektrolitik Bakır San ve Tic. A.Ş.</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-avv-spor-malzemeler-ve-hizmetleri-ith-ve-tic.-a-s.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>AVV Spor Malzemeler ve Hizmetleri İth. Ve Tic. A.Ş.</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-dumyy.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Çağdaş Çocuk Gelişim ve Oyun Merkezi</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-ornes-gida-pazarlama-raya-organik.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Ornes Gıda Pazarlama (Raya Organik)</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Ayni Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-kpmg.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>KPMG</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-muka-matbaacilik.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Müka Matbaacılık</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-webden-al-com.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>WebdenAl.com</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-fabl.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Fabl</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-deniz-bank.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Deniz Bank</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/2017-turk-traktor.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Türk Traktör</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Bireysel Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<p>Aydan Kıral</p>

																<p>Aytunç Yıldırım</p>

																<p>Ayşe İnci Bilecik</p>

																<p>Ajda Büşra Keleş</p>

																<p>Aysel Yalçın</p>

																<p>Ayşegül Kurtoğlu</p>

																<p>Aysun Bağran</p>

																<p>Belgin Düzarat</p>

																<p>Belgin Özhan</p>

																<p>Burçin Yiğit Kılıç</p>

																<p>Başak Çevik</p>

																<p>Belma Çağlar</p>

																<p>Berrin Yorgun</p>

																<p>Betül Öncü</p>

																<p>Bülent Koç</p>

																<p>Çağla Duru</p>

																<p>Deniz Ataç</p>

																<p>Deniz Baran</p>

																<p>Deniz Çelik</p>

																<p>Derya Sel Bozkurt</p>

																<p>Ergin Kurt</p>

																<p>Ersavaş Güdül</p>

																<p>Esra Arslan</p>

																<p>Elçin Gocay</p>

																<p>Esra Birol</p>

																<p>Erdem Yengin</p>

																<p>Eren Salim Kılıçlıoğlu</p>

																<p>Esef Gelir</p>

																<p>Emin Deniz</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<p>Esra Arslan</p>

																<p>Ebru Dorman</p>

																<p>Fatih Demir</p>

																<p>Filiz Gönenli</p>

																<p>Günseli Ağaoğlu Uyğur</p>

																<p>Gülsabah Aslan</p>

																<p>Gönül Kayan</p>

																<p>Hale Makbule Beken</p>

																<p>Hülya Serap Ayhan</p>

																<p>Irene Hulst</p>

																<p>İbrahim Betil</p>

																<p>İpek Üstündağ</p>

																<p>İlsu Burçoğlu</p>

																<p>Kaddafi Bozkurt</p>

																<p>Kavacık Resim Grubu</p>

																<p>Katibe İlhan</p>

																<p>Keriman Kolukısa</p>

																<p>Lütfi Öztürker</p>

																<p>Latif Adalı</p>

																<p>Levent Dinçbaş</p>

																<p>Mahir İlter</p>

																<p>Mert Güvenen</p>

																<p>Mutlu Şen</p>

																<p>Meltem Erdoğan</p>

																<p>Nesrin Akıncı Çötok</p>

																<p>Nimet Türkkahraman</p>

																<p>Onur Paker</p>

																<p>Özge Makas</p>

																<p>Ömer Faruk Özsakarya</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<p>Önder Yavuz</p>

																<p>Özgü Ötünç</p>

																<p>Pınar Falay</p>

																<p>Selim Bilgiler</p>

																<p>Südar Dudu</p>

																<p>Sema Emek</p>

																<p>Şule Karabacak</p>

																<p>Talip Atabey</p>

																<p>Umut Bağbaşlıoğlu</p>

																<p>Uğur Presciler</p>

																<p>Yavuz Rona</p>

																<p>Zeynep Ülker Doan</p>

																<p>Zeynep Yıldız </p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Adının Açıklanmasını İstemeyen Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<p>2017 Yılı Toplam: 73.000 TL</p>

															</div>

														</div>

													</div>

												</div>

											</div>

										</div>

									</div>

								</section>

							</div>

							<div role="tabpanel" class="tab-pane fade" id="2016">

								<section class="section section7">

									<div class="container">

										<div class="row">

											<div class="col-md-12">

												<div class="section-container align-center">

													<h3 class="section-title wo-section-description">2016 Yılı Destekçilerimiz</h3>

												</div>

											</div>

										</div>

										<div class="row">

											<div class="col-md-12">

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Ana Destekçimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/onef.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Nef-Timur Gayrimenkul Yapı ve Yatırım A. Ş.</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Ülke Destekçimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/sanko-logo.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Sanko Tekstil İşletmeleri Sanayi ve Tic. A.Ş.</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Proje Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/undp.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>UNDP</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/coca-cola.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>The Coca Cola Foundation</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/Findikli_Rotary_Klubu.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>İstanbul Fındıklı Rotary Derneği</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Kurumsal Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/enka.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Adapazarı Enka Dağcılık ve Basın Yayın Klübü</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/meridyen8_logo.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Meridyen 8 Grubu</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/ted.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>TEDx Bahçeşehir</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/denizbank.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Deniz Bank</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/payu.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>PayU Ödeme Kuruluşu A.Ş</p>

															</div>

														</div>

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/karafirin.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Karafırın Gıda San. Paz.Tic.Ltd.Şti.</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Bireysel Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<p>Çiğdem Magemizoğlu</p>

																<p>Dara Aslan</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Nazar Büyüm</p>

																<p>Çelik Arsel</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Filiz Demirci</p>

																<p>Zafer Mehmet Tuna</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Aysel Yalçın</p>

																<p>Shahram Khabbaz</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Kurumsal Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/wilo.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Wilo Pompa Sistemleri</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/kox.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Kozyatağı Rotary Derneği</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/bkm_express.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>BKM Express</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Ayni Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/nar.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Nar Lokantası</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/kpmg.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>KPMG</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/wenden.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>WebdenAl.com</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/muka.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Müka Matbaacılık</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/look-logo.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Look</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Yaygın Bağış Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/denizbank.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Denizbank</p>

															</div>

														</div>

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/teamrun.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>TeamRun.Bo</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Bireysel Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<p>Ayşe Pakay</p>

																<p>Aydan Kıral</p>

																<p>Bahar Aykaç Looker</p>

																<p>Derya Sel Bozkurt</p>

																<p>Erdem Yangin</p>

																<p>Ece Erçel Filiz Üskül</p>

																<p>Filiz Üskül</p>

																<p>Gülşen Arslanbopa</p>

																<p>Nezih Yaman</p>

																<p>Südar Dudu(Bilkent Erzurum Laboratuvar Lisesi)</p>

																<p>Serap Oruç</p>

																<p>Güzel Bozkurt</p>

																<p>Belma Çağlar</p>

																<p>Hakan Kılıç</p>

																<p>Gülden Güler</p>

																<p>Birgül Taşkelek</p>

																<p>Ömer Yasir Salim</p>

																<p>Pınar Çetiner</p>

																<p>Nuber Beylem Aydınay</p>

																<p>Alaaddin Karabulut</p>

																<p>Oral Paker</p>

																<p>Fatma Suna Caferoğlu</p>

																<p>Hacer Coşkun Gökçen</p>

																<p>Arzu Özdemir</p>

																<p>Sonnur Özel</p>

																<p>Gülnur Ayyıldız</p>

																<p>Oğuzhan Kara</p>

																<p>Alp Aktaş</p>

																<p>Taner Durak</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Gürkan Turan</p>

																<p>Hande Ertan</p>

																<p>Hüseyin Kaya</p>

																<p>İbrahim Betil</p>

																<p>Katibe İlhan</p>

																<p>Kavacık Resim Grubu</p>

																<p>Lütfi Öztürker</p>

																<p>Murat Sel</p>

																<p>Raziye Sel</p>

																<p>Mehtap Polat</p>

																<p>Fatma Ayperi Karahan</p>

																<p>Emine Tuğba Jabban</p>

																<p>Abidin Karabulut</p>

																<p>Hülya Serap Ayhan</p>

																<p>Aydın Çetin</p>

																<p>Sezer Dinler</p>

																<p>Derya Katar</p>

																<p>Emin Duyal Küçüktabak</p>

																<p>Talip Atabey</p>

																<p>Mehmet Ali Alpar</p>

																<p>Başar Ezer</p>

																<p>Fadime Buket Bayram</p>

																<p>Ömer Şeker</p>

																<p>Ali Tayyar</p>

																<p>Mahi Peyker</p>

																<p>Levent Çakıroğlu</p>

																<p>Gökhan Mert</p>

																<p>Hamide Günay</p>

																<p>Pınar Solmaz Keçecioğlu</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Mert Güvenen</p>

																<p>Muzaffer Bayram</p>

																<p>Nilay Kolat</p>

																<p>Neşe Aslan</p>

																<p>Özge Akalın</p>

																<p>Pınar Çelikel</p>

																<p>Sema Alevcan</p>

																<p>Mutlu Şen</p>

																<p>Beyhan Hardura</p>

																<p>Yasemin Çol</p>

																<p>Demet Atagün</p>

																<p>Azime Bahar Ayçiçek</p>

																<p>Esra Arslan</p>

																<p>Şule Karabacak</p>

																<p>İrene Hulst</p>

																<p>Esra Birol</p>

																<p>Olga Bykova</p>

																<p>Pelin Baklacıoğlu</p>

																<p>Abidin Karabulut</p>

																<p>Kader Turgut Kara</p>

																<p>Gülhan Yıldırım</p>

																<p>Sibel Karaytuğ</p>

																<p>Suna Altan</p>

																<p>Ahmet Vahit Kozak</p>

																<p>Bayram Leventoğlu</p>

																<p>Oğuzhan Kara</p>

																<p>Samet Şenel</p>

																<p>Murat Aka</p>

																<p>Ekrem Aytemur</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Selda Dinç</p>

																<p>Sibel Şengül</p>

																<p>Şerife Göktaş</p>

																<p>Turgut Derman</p>

																<p>Yavuz Rona Ömer Sami Ayçiçek</p>

																<p>Fatma Özarslan</p>

																<p>Hakan Kılıç</p>

																<p>Gülden Güler</p>

																<p>Birgül Taşkelek</p>

																<p>Ömer Yasir Salim</p>

																<p>Pınar Çetiner</p>

																<p>Nuber Beylem Aydınay</p>

																<p>Alaaddin Karabulut</p>

																<p>Yeşim Özbirinci</p>

																<p>Ahmet Dabanlı</p>

																<p>Kemal Ural</p>

																<p>Merih Boz</p>

																<p>Reyhan Kollak Şafak</p>

																<p>Bihter İşeri</p>

																<p>Lidya Nisman</p>

																<p>Tanju Sarıhan</p>

																<p>Celalettin Kılıç</p>

																<p>Mervenur Güleç</p>

																<p>Enver Bahar</p>

																<p>Zuhal Binnur Beşli</p>

																<p>Ali Rıza İnci</p>

																<p>Deniz Baran</p>

																<p>Demet Eski</p>

															</div>

														</div>

													</div>

												</div>



												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Gönüllü Çevirmenlerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-6">

															<div class="section7-item">

																<p>Melike Kaptan</p>

															</div>

														</div>

														<div class="col-md-6">

															<div class="section7-item">

																<p>İstem Duygu Akalp</p>

															</div>

														</div>

													</div>

												</div>

											</div>

										</div>

									</div>

								</section>

							</div>

							<div role="tabpanel" class="tab-pane fade" id="2015">

								<section class="section section7">

									<div class="container">

										<div class="row">

											<div class="col-md-12">

												<div class="section-container align-center">

													<h3 class="section-title wo-section-description">2015 Yılı Destekçilerimiz</h3>

												</div>

											</div>

										</div>

										<div class="row">

											<div class="col-md-12">

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Proje Destekçimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/undp.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>UNDP</p>

															</div>

														</div>

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/coca-cola.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>The Coca Cola Foundation</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Kurumsal Destekçimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/asas.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Asaş Aluminyum</p>

															</div>

														</div>

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/ertana.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Ertuna & Aksoy<br> Mimarlık</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Bireysel Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<p>Sermet Hatunoğlu</p>

																<p>Sevim Kiriş</p>

																<p>Şebnem Mergen</p>

																<p>Yasemin Çetinkaya</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>İbrahim Betil</p>

																<p>Kadri Asım Soygül</p>

																<p>Kadir-Onur Şensöz</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Katibe İlhan</p>

																<p>Mustafa Yücel Bursa</p>

																<p>Özlem Güsar</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Özge İşlegen</p>

																<p>Zeynep Betil</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Kurumsal Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/sante.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Sante Kozmetik Ltd. Şti.</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/teb.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Türkiye Ekonomi Bankası</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/speaker.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Speaker Agency</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/garanti.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>T.C. Garanti Bankası A.Ş.</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/ibm.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>IBM Türkiye</p>

															</div>

														</div>

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/ted.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>TEDx Bahçeşehir Üniversitesi</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Ayni Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/all.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>ALL Dergisi</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/muka.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Müka Matbaa</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/nar.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Nar Lokantası</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/kpmg.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>KPMG</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/wenden.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>WebdenAl.com</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Bireysel Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<p>Ali Cebi</p>

																<p>Ali Osman Menteşe</p>

																<p>Ahmet Levent Alkan</p>

																<p>Ahmet Selçuk Özyurt</p>

																<p>Atilla Saplan</p>

																<p>Ayşegül Özkan</p>

																<p>Ayşe Pakay</p>

																<p>Ayşe İnci Bilecik</p>

																<p>Ayşe Pakay</p>

																<p>Arzu Şentürk</p>

																<p>Aslı Ayşen Aydın</p>

																<p>Kerim Urallı</p>

																<p>Levent Yücel</p>

																<p>Lütfi Öztürker</p>

																<p>Louise Westerlind</p>

																<p>Melisa Anafarta</p>

																<p>Menekşe Göker</p>

																<p>Mehmet Alp Kural</p>

																<p>Mert Güvenen</p>

																<p>Mohammad Kafini</p>

																<p>Müge Alaboz</p>

																<p>Mümin Kapucu</p>

																<p>Nadire Bektaş</p>

																<p>Necla Yılmaz</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Bayram Leventoğlu</p>

																<p>Bahar Aykaç Looker</p>

																<p>Bedri Sezer</p>

																<p>Birol Güler</p>

																<p>Bedri Demiroğlu</p>

																<p>Bizden Canan Titiz</p>

																<p>Birkan Devrim Kayaoğlu</p>

																<p>Bora Yenigün</p>

																<p>Burçak Gökçeer Baltaş</p>

																<p>Celil Akman</p>

																<p>Cihan Babayiğit</p>

																<p>Nevin Ulusoy</p>

																<p>Nilay Kolat</p>

																<p>Nilgün Başkır</p>

																<p>Nimet Görücü</p>

																<p>Nimet Gül Dinçer</p>

																<p>Okan Ulay</p>

																<p>Onur Paker</p>

																<p>Osman Mehmet Sindel</p>

																<p>Ozhan Turgut</p>

																<p>Ömer Faruk Özsakarya</p>

																<p>Özge Akalın</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Derya Sel Bozkurt</p>

																<p>Derya Tekinsel</p>

																<p>Deniz Taşdemir</p>

																<p>Erkut Bozkurt</p>

																<p>Elif Utku</p>

																<p>Erdem Yangın</p>

																<p>Emine Ay</p>

																<p>Emine Özgürgen</p>

																<p>Emel Arseven</p>

																<p>Emrah Kuzu</p>

																<p>Esra Birol</p>

																<p>Özge Korkmaz</p>

																<p>Özlem Güsar</p>

																<p>Pınar Çelikel</p>

																<p>Ramazan Karagöz</p>

																<p>Rıza Küçük</p>

																<p>Sahra Bilgin</p>

																<p>Sadık Gali</p>

																<p>Sara İsmet Aykar</p>

																<p>Seda Civcar</p>

																<p>Selda Dinç</p>

																<p>Serap Oruç</p>

																<p>Senem Gürün</p>

																<p>Sema Alevcan</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Fatih Cihan</p>

																<p>Ferda Kurt</p>

																<p>Gürkan Turan</p>

																<p>Gülçin Altınbaş</p>

																<p>Habibe Özsoy</p>

																<p>Hüseyin Ay</p>

																<p>Hüseyin Kaya</p>

																<p>Işılay Benay Sarıca</p>

																<p>İsmail Köken</p>

																<p>Kavacık Resim Grubu</p>

																<p>Kaddafi Bozkurt</p>

																<p>Sinem Ceren Çerçiler</p>

																<p>Sibel Yıldırım</p>

																<p>Südar Dudu(Bilkent Erzurum Lisesi)</p>

																<p>Talip Ata</p>

																<p>Tuğba Rumeysa Ersoy</p>

																<p>Tuğba Jabban</p>

																<p>Turgut Derman</p>

																<p>Zehra-Samir Bayraktar</p>

																<p>Zeynep Akın</p>

																<p>Zeynep Burcu Şahiner</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Adının Açıklanmasını İstemeyen Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<p>2015 Yılı Toplam: 5.500TL</p>

															</div>

														</div>

													</div>

												</div>

											</div>

										</div>

									</div>

								</section>

							</div>

							<div role="tabpanel" class="tab-pane fade" id="2014">

								<section class="section section7">

									<div class="container">

										<div class="row">

											<div class="col-md-12">

												<div class="section-container align-center">

													<h3 class="section-title wo-section-description">2014 Yılı Destekçilerimiz</h3>

												</div>

											</div>

										</div>

										<div class="row">

											<div class="col-md-12">

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Ülke Destekçimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/tika.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Türk İş Birliği ve Koordinasyon Ajansı Başkanlığı</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Proje Destekçimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/undp.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>UNDP</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/coca-cola.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>The Coca Cola Foundation</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/mogul.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Mogul Tekstil San.ve Tic.Ltd Şti</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Kurumsal Destekçimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/asas.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Asaş Aluminyum</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/danone.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Danone Nutrıcıa</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/gurteks.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Gürteks İplik A.Ş</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/ibm.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>IBM Türkiye</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Bireysel Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<p>Ahmet Muktad Ziylan</p>

																<p>Ahmet Şireci</p>

																<p>Cem Akşehirlioğlu</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<p>İbrahim Betil</p>

																<p>Hande Ertan</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<p>Hasan Sami Atik</p>

																<p>Osman Serdar Türkoğlu</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Kurumsal Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/enka.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Adapazarı ENKA Okulları</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/angora.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Angora Halı</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/argos.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Argos Film Turizm ve Tic.Ltd.Şti.</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/ayvakfi.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Ay Eğitim Araştırma ve Yardım Vakfı</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/dizayn.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Dizayn Matbaacılık San.ve Tic.Ltd.Şti.</p>

															</div>

														</div>

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/etcgrup.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>ETC Yatırım Proje Danışmanlık ve Yazılım A.Ş</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Ayni Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/all.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>ALL Dergisi</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/boyut.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Boyut Matbaacılık</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/wenden.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>WebdenAl.com</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/muka.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Müka Matbaa</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/nar.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Nar Lokantası</p>

															</div>

														</div>

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/kpmg.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>KPMG</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Bireysel Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<p>Ali Boztaş</p>

																<p>Ali Haydar Başıbüyük</p>

																<p>Alican Altıparmak</p>

																<p>Ali Osman Menteşe</p>

																<p>Ahmet Açık</p>

																<p>Aytül Balcı</p>

																<p>Ayşe Pakay</p>

																<p>Aynur Coşer</p>

																<p>Ayfer Gülüm</p>

																<p>Hüseyin Kaya</p>

																<p>İbrahim Mutaf</p>

																<p>İrem Suvat</p>

																<p>Kavacık Resim Grubu</p>

																<p>Kaddafi Bozkurt</p>

																<p>Kerim Urallı</p>

																<p>Kübra Köseler</p>

																<p>Metin Demirkıran</p>

																<p>Mehmet Arda</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Arzu Canik</p>

																<p>Aslı Ayşen Aydın</p>

																<p>Alper Aslan</p>

																<p>Berna Kamacı</p>

																<p>Betül Turan</p>

																<p>Betül Ünal</p>

																<p>Berrin Yorgun</p>

																<p>Behiç Sağduyu</p>

																<p>Bedri Demiroğlu</p>

																<p>Mehmet Cengiz Sezen</p>

																<p>Merih Boz</p>

																<p>Mustafa Çiper</p>

																<p>Murat Sel</p>

																<p>Neslihan Kahyaoğlu</p>

																<p>Nejat Müldür</p>

																<p>Nilay Kolat</p>

																<p>Nuri Şahin</p>

																<p>Onur Selvi</p>

																<p>Okşan Atilla Sanön</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Burçak Gökçer Baltaş</p>

																<p>Cebrail Turan</p>

																<p>Cengizhan Boztepe</p>

																<p>Ertan Dündar(Özel Yıldız Anaokulu)</p>

																<p>Derya Sel Bozkurt</p>

																<p>Erhan Ongun</p>

																<p>Esat Tayfur Yeltekin</p>

																<p>Esra Birol</p>

																<p>Öğretmen Akademisi Vakfı (ÖRAV)</p>

																<p>Ömür Angı</p>

																<p>Özge Akalın</p>

																<p>Rana Yardım</p>

																<p>Sabahat Çatma</p>

																<p>Sahrap Soysal</p>

																<p>Sara İsmet Aykar</p>

																<p>Serap Zuvin</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Filiz-Zafer Üskül</p>

																<p>Fora Ela İstanbul’un Seyyah Tulumcuları</p>

																<p>Figen Oran</p>

																<p>Gürkan Turan</p>

																<p>Habibe Özsoy</p>

																<p>Hasan Sami Atik</p>

																<p>Hamdi Uğur</p>

																<p>Serap Kayhan</p>

																<p>Sibel Yücesan</p>

																<p>Tuba Arısal</p>

																<p>Tuğba Jabban</p>

																<p>Zehra-Samir Bayraktar</p>

																<p>Zeynep Berker</p>

																<p>Ziraat Bankası Voleybol Kulübü Sporcuları</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Adının Açıklanmasını İstemeyen Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<p>2014 Yılı Toplam: 47.180TL</p>

															</div>

														</div>

													</div>

												</div>

											</div>

										</div>

									</div>

								</section>

							</div>

							<div role="tabpanel" class="tab-pane fade" id="2013">

								<section class="section section7">

									<div class="container">

										<div class="row">

											<div class="col-md-12">

												<div class="section-container align-center">

													<h3 class="section-title wo-section-description">2013 Yılı Destekçilerimiz</h3>

												</div>

											</div>

										</div>

										<div class="row">

											<div class="col-md-12">

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Ülke Destekçimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/tika.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Türk İş Birliği ve Koordinasyon Ajansı Başkanlığı</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Proje Destekçimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/coca-cola.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>The Coca Cola Foundation</p>

															</div>

														</div>

														<div class="col-md-6">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/mogul.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Mogul Tekstil San.ve Tic.Ltd Şti</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Kurumsal Destekçimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/asas.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Asaş Aluminyum</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/garanti.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>T.C. Garanti Bankası A.Ş.</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/ibm.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>IBM Türkiye</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Bireysel Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<p>Ali Topçuoğlu</p>

																<p>Burhan Çağdaş</p>

																<p>Burhan Kaplan</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>İbrahim Betil</p>

																<p>Mert Güvenen</p>

																<p>Musa Özgüçlü</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Ramazan Kaplan</p>

																<p>Kasım Aksoy</p>

																<p>Kozmopolitan Gönüllüleri</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Sami Atik</p>

																<p>Ziya Aydınalp</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Kurumsal Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/enka.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Adapazarı ENKA Okulları</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/akcanlar.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Akcanlar Tekstil</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/asnonwowens.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Akınal Sentetik</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/asya.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Asya Suni Dericilik A.Ş</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/baser.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Başer Faktoring</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/canan.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Canan Tekstil</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/reno.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>İmam Kayalı Oğulları Otomotiv</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/unalan.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Ünalan Kuyumculuk</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/optima.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Optima Faktoring</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/speaker.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Speaker Agency</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/tirsan.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Tırsan Treyler Sanayi Ticaret ve Nakliyat A.Ş.</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Ayni Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/boyut.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Boyut Matbaacılık</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/fasuli.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Fasuli Lokantaları</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/wenden.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>WebdenAl.com</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/teknik.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Teknik Basım Tanıtım Matbaacılık San. ve Tic. Ltd.Şti.</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/muka.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Müka Matbaa</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/nar.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Nar Lokantası</p>

															</div>

														</div>

														<div class="col-md-4">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/grand.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Grant Thornton Türkiye</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Bireysel Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<p>Ahmet Nevzat Çokcoşkun</p>

																<p>Ali Fuat Arısoy</p>

																<p>Asuman Bilgiç</p>

																<p>Aytül Balcı</p>

																<p>Aziz Akgül</p>

																<p>Bihter Neziroğlu</p>

																<p>Derya Sel</p>

																<p>Eda Karaytuğ</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Eray Aydok</p>

																<p>Ersin Baş</p>

																<p>Esra Aydük</p>

																<p>Esra Onat</p>

																<p>Güldal Işıldar</p>

																<p>Hacı Mehmet Kavak</p>

																<p>İstem Duygu Akalp</p>

																<p>Kaddafi Bozkurt</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Kadir Çelik</p>

																<p>Kerim Urallı</p>

																<p>Mesut Çevik</p>

																<p>Mustafa Dingil</p>

																<p>Mutlu Şen</p>

																<p>Nejat Gostuvar</p>

																<p>Robert College Öğrencileri</p>

																<p>Sedef Betil</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Selda Dinç</p>

																<p>Selda Şerifsoy</p>

																<p>Suzan Öner Yavuz</p>

																<p>Südar Dudu</p>

																<p>Tuğba Jabban</p>

																<p>Turgut Derman</p>

																<p>Utku Akkurt</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Adının Açıklanmasını İstemeyen Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<p>2013 Yılı Toplam: 12.000TL</p>

															</div>

														</div>

													</div>

												</div>

											</div>

										</div>

									</div>

								</section>

							</div>

							<div role="tabpanel" class="tab-pane fade" id="2012">

								<section class="section section7">

									<div class="container">

										<div class="row">

											<div class="col-md-12">

												<div class="section-container align-center">

													<h3 class="section-title wo-section-description">2012 Yılı Destekçilerimiz</h3>

												</div>

											</div>

										</div>

										<div class="row">

											<div class="col-md-12">

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Ülke Destekçimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/tika.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Türk İş Birliği ve Koordinasyon Ajansı Başkanlığı</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Bireysel Destekçilerimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<p>Mustafa Yücel</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<p>Atilla Başer</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>İbrahim Betil</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Nezih Öztüre</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Pervin Yücel</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Kurumsal Destekçimiz</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/enka.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Adapazarı ENKA Okulları</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/optima.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Optima Faktoring</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/ibm.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>IBM Türkiye</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/metal.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Metal Market Dış Tic.A.Ş</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/habas.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>HABAŞ A.Ş</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Ayni Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/nar.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Nar Lokantası</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/wenden.jpg" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>WebdenAl.com</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"></div>

																<p>İnceKara Müşavirlik</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/cliffort.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Clifford Chance Legal Consultancy</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/thomson.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Thomson Reuters Foundation</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/ts-iletisim.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Tulu Sürenkök - TS İletişim</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/sarkuysan.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Sarkuysan Elektrolikit</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/oker.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Oker Grup Yapım Org Medikal Tem. Hiz. LTD</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/marlet.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Marlet Turizm Reklam Org. ve Bil.Hiz.Ltd</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"></div>

																<p>Aziz Akgül</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"></div>

																<p>Nüket Kazanç</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/thy.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Türk Hava Yolları</p>

															</div>

														</div>

													</div>

													<div class="row">

														<div class="col-md-12">

															<div class="section7-item">

																<div class="img-wrapper"><img src="/assets/images/content/destekcilerimiz/grand.png" alt="Destekçimiz" class="img-responsive center-block"></div>

																<p>Grant Thorton Türkiye</p>

															</div>

														</div>

													</div>

												</div>

												<div class="section7-container">

													<div class="row">

														<div class="col-md-12">

															<h4 class="section7-title">Bireysel Bağışçılarımız</h4>

														</div>

													</div>

													<div class="row">

														<div class="col-md-3">

															<div class="section7-item">

																<p>Ayşegül Özdoğar</p>

																<p>Aytül Balcı</p>

																<p>Banu Erdem Çevik</p>

																<p>Feyzi Kazanç</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Güldal Işıldar</p>

																<p>Kamile Yazıcı</p>

																<p>Kenan Yılmaz</p>

																<p>Mithat Alam</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Mustafa Şık</p>

																<p>Neriman Begoviç</p>

																<p>Nuray Kekeç</p>

																<p>Raziye Sel</p>

															</div>

														</div>

														<div class="col-md-3">

															<div class="section7-item">

																<p>Sermet Hatunoğlu</p>

																<p>Sevim Kiriş</p>

																<p>Şebnem Mergen</p>

																<p>Yasemin Çetinkaya</p>

															</div>

														</div>

													</div>

												</div>

											</div>

										</div>

									</div>

								</section>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>



		<!-- Footer -->

		<?php include 'include/footer.php' ?>

	</body>

</html>



