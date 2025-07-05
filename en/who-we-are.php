<!doctype html>
<html>
	<head>
		<?php
			$pageTitle = "Who We Are?";
			include 'include/head.php';
		?>
	</head>
	<body>
		<!--Header -->
		<?php include 'include/header.php' ?>

		<section class="section section5">
			<h1 class="page-title">Our Story</h1>
			<div class="img-wrapper">
				<img src="/assets/images/content/bg-page-bagis-yap.jpg" alt="" class="img-responsive">
			</div>
		</section>

		<section class="subpage">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h3 class="section-title align-center">Sen De Gel</h3>
						<p class="section-description align-center">The association has been established to create and sustain national and international projects to ensure sustainable improvement of quality in social and economic areas through fighting poverty, creating employment, creating projects for the development of the states of women and youth, collaborating with national and international civic and other like-minded organizations, taking UN Development Goals into consideration, and especially considering the problems of “the least developed countries”.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="video">
							<iframe width="100%" height="580" src="https://www.youtube.com/embed/i6aMaSZsz5A?hl=en&modestbranding=0&autohide=1&showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h3 class="section-title align-center">Our Story</h3>
						<p>In 2011, two people from The Gambia came to visit Community Volunteers Foundation(TOG). They stated that they are coming from an organization working for women’s development and child care in The Gambia and they want to collaborate with TOG. Coincidentally, İbrahim Betil was there, and he wanted to visit The Gambia to get introduced to local people and to understand the expectations for a potential collaboration. He went there two months later; after seeing the situation of The Gambians and living in their villages for a week, he came back to meet his friends. They had to make a choice: They could either to ignore the situation and leave them alone, or develop projects to contribute to humanity in a world where 1 billion people are fighting against poverty and lack of water. They took on the second one and decided to establish an association to support sustainable development projects in the least developed countries. SEN DE GEL was founded in 2012.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="subpage section6">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h3 class="section-title align-center">Our Goals</h3>
							<ul>
								<li>
									To create, support and implement similar projects to support social and economic lives of people on local, national and international basis,
								</li>
								<li>
									Doing research to improve and develop the work of the association,
								</li>
								<li>
									Preparing the young people and women for life and job market,
								</li>
								<li>
									To support educational, social and economic development and cultural projects related to all segments of the society by collaborating with UN and related organizations, ministries, official bodies, international organizations, and NGOs,
								</li>
								<li>
									Provide scholarships, training and internship opportunities for young people,
								</li>
								<li>
									Implementing micro-credit programs for young people and women to encourage them to become entrepreneurs,
								</li>
								<li>
									To finance projects with productivity and responsibility approaches.
								</li>
							</ul>
						</div>
					</div>
				</div>
		</section>
		<section class="section">
			<div class="container">
				<div class="col-md-8 col-md-offset-2">
					<div class="module card card1">
						<div class="card1-item">
							<a href="our-team.php" title="Our Team">
								<i class="icon icon-linked"></i>
								<h4 class="card1-title">Our Team</h4>
							</a>
							<a class="link-underline" href="our-team.php" title="Our Team">Detailed Information</a>
						</div>
						<div class="card1-item">
							<a href="our-supporters.php" title="Our Supporters">
								<i class="icon icon-stars"></i>
								<h4 class="card1-title">Our Supporters</h4>
							</a>
							<a class="link-underline" href="our-supporters.php" title="Our Supporters">Detailed Information</a>
						</div>
						<div class="card1-item">
							<a href="<?php echo $bylaws["en"]["file"]; ?>" target="_blank" title="<?php echo $bylaws["en"]["title"]; ?>">
								<i class="icon icon-paper"></i>
								<h4 class="card1-title"><?php echo $bylaws["en"]["title"]; ?></h4>
							</a>
							<a class="link-underline" href="<?php echo $bylaws["en"]["file"]; ?>" target="_blank" title="<?php echo $bylaws["en"]["title"]; ?>">Detailed Information</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer -->
		<?php include 'include/footer.php' ?>
	</body>
</html>