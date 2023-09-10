<!doctype html>
<html>
	<head>
		<?php
			$pageTitle = "Become a Member";
			include 'include/head.php';
			include __DIR__ . '/../assets/data/site-data.php';
		?>
	</head>
	<body>
		<!--Header -->
		<?php include 'include/header.php' ?>

		<section class="section section5">
			<h1 class="page-title">Become a Member</h1>
			<div class="img-wrapper">
				<img src="/assets/images/content/bg-uyeol.jpg" alt="" class="img-responsive">
			</div>
		</section>

		<section class="subpage">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<p class="section-description-alternate align-center">Support for Improvement in Social and Economic Living Association is a non-profit community that works to produce projects to ensure sustainable improvement of quality in social and economic areas nationally and internationally. 
					</div>
				</div>
			</div>
		</section>
		<section class="subpage section9">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3 class="section-title align-center">How can I become a member?</h3>
							<div class="row">
								<div class="col-md-12">
									<ul>
										<li>
											Fill in the membership form, sign it and send it to SEN DE GEL either through post Göksu Otağtepe Caddesi, Taman Sokağı 19, Kavacık, İstanbul 34810, through e-mail to info@sendegel.org.tr.
										</li>
										<li>
											Membership applications are evaluated in the first Board Meeting and the requestor is notified accordingly.
										</li>
										<li>
											Upon approval, the membership requestor needs to make the transaction of membership fee to the Association.
										</li>
										<li>
											Don’t make the transaction until you are notified of the Board decision.
										</li>
										<li>
											Membership entry fee is <?php echo $membershipFees["entry_fee"]; ?> TL (<?php echo $membershipFees["legal_entity_entry_fee"]; ?> TL for corporate members).
										</li>
										<li>
											Annual membership fee is <?php echo $membershipFees["annual_dues"]; ?> TL (for corporate members 10<?php echo $membershipFees["legal_entity_annual_dues"]; ?>00 TL) and it is paid every year in April.
										</li>
										<li>
											Membership entry fee and annual membership fee for university student under 25 is <?php echo $membershipFees["student_annual_dues"]; ?> TL.
										</li>
									</ul>
									<p><br></p>
									<p>You can send an e-mail to info@sendegel.org.tr for detailed information.<br>
									You can reach the Individual Membership Form and Corporate Membership Form from<br>
									the links below.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>
		<section class="section section1">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="section-container align-center">
							<div class="module card card1">

								<div class="card1-item">
									<a href="https://drive.google.com/file/d/1_PpbrhDLIbyRDPrhCVrJbUftZbDxCU0K/view" target="_blank" title="SenDeGel Individual Membership Form">
										<i class="icon icon-paper-3"></i>
										<h4 class="card1-title">Individual<br>Membership Form</h4>
									</a>
									<a class="link-underline" href="https://drive.google.com/file/d/1_PpbrhDLIbyRDPrhCVrJbUftZbDxCU0K/view" target="_blank" title="SenDeGel Individual Membership Form">Download</a>
								</div>

								<div class="card1-item">
									<a href="https://drive.google.com/file/d/1q0SaB7omI91BmPTtUpRAdhR3qnXpg7Z-/view" target="_blank" title="SenDeGel Corporate Membership Form">
										<i class="icon icon-paper-2"></i>
										<h4 class="card1-title">Corporate<br>Membership Form</h4>
									</a>
									<a class="link-underline" href="https://drive.google.com/file/d/1q0SaB7omI91BmPTtUpRAdhR3qnXpg7Z-/view" target="_blank" title="SenDeGel Corporate Membership Form">Download</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer -->
		<?php include 'include/footer.php' ?>
	</body>
</html>