<!doctype html>
<html>

<head>
	<?php
	$pageTitle = "Our Team";
	include 'include/head.php';
	?>
</head>

<body>
	<!--Header -->
	<?php include 'include/header.php' ?>

	<section class="section section5">
		<h1 class="page-title">Our Team</h1>
		<div class="img-wrapper">
			<img src="/assets/images/content/bg-ekibimiz.jpg" alt="" class="img-responsive">
		</div>
	</section>

	<div class="tab tab1">
		<ul class="nav nav-tabs" role="tablist">
			<li class="active"><a href="#teamFounders" aria-controls="teamFounders" data-toggle="tab">FOUNDERS</a></li>
			<li><a href="#teamBoard" aria-controls="teamBoard" data-toggle="tab">BOARD OF DIRECTORS</a></li>
			<li><a href="#teamAuditors" aria-controls="teamAuditors" data-toggle="tab">BOARD OF AUDITORS</a></li>
			<li><a href="#teamAdvisors" aria-controls="teamAdvisors" data-toggle="tab">BOARD OF ADVISORS</a></li>
			<li><a href="#teamEmployees" aria-controls="teamEmployees" data-toggle="tab">EMPLOYEES</a></li>
		</ul>

		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="tab-content">

							<div role="tabpanel" class="tab-pane fade in active" id="teamFounders">
								<div class="accordion accordion2">
									<div class="panel-group" id="teamFoundersGroup">
										<?php
										$type = 'founder'; // Specify the type for sorting
										uasort($teamMembers, function ($a, $b) use ($type) {
											return (in_array($type, $a['types'])) ? $a['order'][$type] - $b['order'][$type] : 0;
										});

										foreach ($teamMembers as $handle => $member) :
											if (in_array($type, $member['types'])) :
										?>
												<div class="panel">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#teamFoundersGroup" href="#<?= $type . '-' . $handle; ?>">
																<span>
																	<?= $member['name'] . ($member['title'][$type] ? ' (' . $member['title'][$type] . ')' : ''); ?>
																</span>
																<i class="icon icon-minus"></i>
																<i class="icon icon-plus"></i>
															</a>
														</h4>
													</div>
													<div id="<?= $type . '-' . $handle; ?>" class="panel-collapse collapse">
														<div class="panel-body">
															<div class="content"><?php include 'team/' . $member['file']; ?></div>
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

							<div role="tabpanel" class="tab-pane fade" id="teamBoard">
								<div class="accordion accordion2">
									<div class="panel-group" id="teamBoardGroup">
										<?php
										$type = 'board'; // Specify the type for sorting
										uasort($teamMembers, function ($a, $b) use ($type) {
											return (in_array($type, $a['types'])) ? $a['order'][$type] - $b['order'][$type] : 0;
										});

										foreach ($teamMembers as $handle => $member) :
											if (in_array($type, $member['types'])) :
										?>
												<div class="panel">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#teamFoundersGroup" href="#<?= $type . '-' . $handle; ?>">
																<span>
																	<?= $member['name'] . ($member['title'][$type] ? ' (' . $member['title'][$type] . ')' : ''); ?>
																</span>
																<i class="icon icon-minus"></i>
																<i class="icon icon-plus"></i>
															</a>
														</h4>
													</div>
													<div id="<?= $type . '-' . $handle; ?>" class="panel-collapse collapse">
														<div class="panel-body">
															<div class="content"><?php include 'team/' . $member['file']; ?></div>
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
										$type = 'advisor'; // Specify the type for sorting
										uasort($teamMembers, function ($a, $b) use ($type) {
											return (in_array($type, $a['types'])) ? $a['order'][$type] - $b['order'][$type] : 0;
										});

										foreach ($teamMembers as $handle => $member) :
											if (in_array($type, $member['types'])) :
										?>
												<div class="panel">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#teamFoundersGroup" href="#<?= $type . '-' . $handle; ?>">
																<span>
																	<?= $member['name'] . ($member['title'][$type] ? ' (' . $member['title'][$type] . ')' : ''); ?>
																</span>
																<i class="icon icon-minus"></i>
																<i class="icon icon-plus"></i>
															</a>
														</h4>
													</div>
													<div id="<?= $type . '-' . $handle; ?>" class="panel-collapse collapse">
														<div class="panel-body">
															<div class="content"><?php include 'team/' . $member['file']; ?></div>
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

							<div role="tabpanel" class="tab-pane fade" id="teamAuditors">
								<div class="accordion accordion2">
									<div class="panel-group" id="teamAuditorsGroup">
										<?php
										$type = 'auditor'; // Specify the type for sorting
										uasort($teamMembers, function ($a, $b) use ($type) {
											return (in_array($type, $a['types'])) ? $a['order'][$type] - $b['order'][$type] : 0;
										});

										foreach ($teamMembers as $handle => $member) :
											if (in_array($type, $member['types'])) :
										?>
												<div class="panel">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#teamFoundersGroup" href="#<?= $type . '-' . $handle; ?>">
																<span>
																	<?= $member['name'] . ($member['title'][$type] ? ' (' . $member['title'][$type] . ')' : ''); ?>
																</span>
																<i class="icon icon-minus"></i>
																<i class="icon icon-plus"></i>
															</a>
														</h4>
													</div>
													<div id="<?= $type . '-' . $handle; ?>" class="panel-collapse collapse">
														<div class="panel-body">
															<div class="content"><?php include 'team/' . $member['file']; ?></div>
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
										$type = 'advisor'; // Specify the type for sorting
										uasort($teamMembers, function ($a, $b) use ($type) {
											return (in_array($type, $a['types'])) ? $a['order'][$type] - $b['order'][$type] : 0;
										});

										foreach ($teamMembers as $handle => $member) :
											if (in_array($type, $member['types'])) :
										?>
												<div class="panel">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#teamFoundersGroup" href="#<?= $type . '-' . $handle; ?>">
																<span>
																	<?= $member['name'] . ($member['title'][$type] ? ' (' . $member['title'][$type] . ')' : ''); ?>
																</span>
																<i class="icon icon-minus"></i>
																<i class="icon icon-plus"></i>
															</a>
														</h4>
													</div>
													<div id="<?= $type . '-' . $handle; ?>" class="panel-collapse collapse">
														<div class="panel-body">
															<div class="content"><?php include 'team/' . $member['file']; ?></div>
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

							<div role="tabpanel" class="tab-pane fade" id="teamEmployees">
								<div class="accordion accordion2">
									<div class="panel-group" id="teamEmployeesGroup">
										<?php
										$type = 'employee'; // Specify the type for sorting
										uasort($teamMembers, function ($a, $b) use ($type) {
											return (in_array($type, $a['types'])) ? $a['order'][$type] - $b['order'][$type] : 0;
										});

										foreach ($teamMembers as $handle => $member) :
											if (in_array($type, $member['types'])) :
										?>
												<div class="panel">
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#teamFoundersGroup" href="#<?= $type . '-' . $handle; ?>">
																<span>
																	<?= $member['name'] . ($member['title'][$type] ? ' (' . $member['title'][$type] . ')' : ''); ?>
																</span>
																<i class="icon icon-minus"></i>
																<i class="icon icon-plus"></i>
															</a>
														</h4>
													</div>
													<div id="<?= $type . '-' . $handle; ?>" class="panel-collapse collapse">
														<div class="panel-body">
															<div class="content"><?php include 'team/' . $member['file']; ?></div>
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

						</div>
					</div>
				</div>
			</div>
		</section>

	</div>

	<!-- Footer -->
</body>

</html>