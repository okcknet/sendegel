<!doctype html>
<html>

<head>
	<?php
	$pageTitle = "Üye Ol";
	include 'include/head.php';
	?>
</head>

<body>
	<?php include 'include/header.php' ?>
	<section class="section section5">
		<h1 class="page-title">Üye Ol</h1>
		<div class="img-wrapper">
			<img src="/assets/images/content/bg-uyeol.jpg" alt="" class="img-responsive">
		</div>
	</section>
	<section class="subpage">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<p class="section-description-alternate align-center">Sen De Gel Derneği; ulusal ve uluslararası alanda sınır tanımaksızın, sosyal ve ekonomik alanda nitelikli ve sürdürülebilir gelişimi sağlamak amacıyla projeler üreten, kar amacı gütmeyen bir topluluktur.
				</div>
			</div>
		</div>
	</section>
	<section class="subpage section9">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h3 class="section-title align-center">Nasıl Üye Olurum?</h3>
					<div class="row">
						<div class="col-md-12">
							<ul>
								<li>
									Üyelik formu eksiksiz doldurularak, imzalandıktan sonra, SEN- DE-GEL Derneği, Göksu Otağtepe Caddesi, Taman Sokağı 19, Kavacık, İstanbul 34810 adresine posta ile, info@sendegel.org.tr adresine e-posta olarak gönderilmelidir.

								</li>
								<li>
									Üyelik başvuruları dernek tüzüğü gereği başvuru tarihini takip eden ilk Yönetim Kurulu toplantısında onaylanarak başvuru sahibine bildirim yapılır.
								</li>
								<li>
									Dernek üyeliği Yönetim Kurulu kararı ile kesinleştikten sonra üyelik başvurusu yapana bilgi verilecek, Dernek banka hesabına 30 gün içerisinde giriş ödentisi yapılması halinde üyelik kesinlik kazanacaktır.
								</li>
								<li>
									Başvuru onayınız tarafınıza bildirilene kadar ödeme yapmayınız.
								</li>
								<li>
									Üyeliğe giriş ödentisi <?php echo $membershipFees["entry_fee"]; ?> TL’dir, (Kurumsal üyeler için <?php echo $membershipFees["legal_entity_entry_fee"]; ?> TL)
								</li>
								<li>
									Üyelerin yıllık aidat ödemeleri <?php echo $membershipFees["annual_dues"]; ?> TL olup her yıl Nisan ayında ödenir. (Kurumsal üyeler için <?php echo $membershipFees["legal_entity_annual_dues"]; ?> TL)
								</li>
								<!--
								<li>
									25 yaş altı üniversite öğrencilerinin üye giriş aidatı <?php echo $membershipFees["student_entry_fee"]; ?> TL, yıllık aidatları da <?php echo $membershipFees["student_annual_dues"]; ?> TL’dir.
								</li>
								-->
							</ul>
							<p><br></p>
							<p>Detay bilgi için info@sendegel.org.tr adresine e-posta atabilirsiniz. Bireysel ve Kurumsal üyelik gerekli formlara aşağıdaki linkler aracılığı ile ulaşabilirsiniz.</p>
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
								<a href="<?php echo $membershipForms["individual"]; ?>" target="_blank" title="Bireysel Üyelik Formu">
									<i class="icon icon-paper-3"></i>
									<h4 class="card1-title">Bireysel<br>Üyelik Formu</h4>
									İNDİR
								</a>
							</div>
							<div class="card1-item">
								<a href="<?php echo $membershipForms["legal_entity"]; ?>" target="_blank" title="Kurumsal Üyelik Formu">
									<i class="icon icon-paper-2"></i>
									<h4 class="card1-title">Kurumsal<br>Üyelik Formu</h4>
									İNDİR
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include 'include/footer.php' ?>
</body>

</html>