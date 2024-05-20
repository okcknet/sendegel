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
  $teamMembersY = [
    'abdullah-hardura' => [
      'name' => 'Abdullah Hardura',
      'file' => 'abdullah-hardura.php',
      'types' => ['board'],
      'order' => [
        'board' => 7,
      ],
      'title' => [
        'board' => 'Yedek Üye',
      ],
    ],
    'asli-aysen-aydin' => [
      'name' => 'Aslı Ayşen Aydın',
      'file' => 'asli-aysen-aydin.php',
      'types' => ['founder'],
      'order' => [
        'founder' => 6,
      ],
    ],
    'aytul-tulay-balci' => [
      'name' => 'Aytül Tülay Balcı',
      'file' => 'aytul-tulay-balci.php',
      'types' => ['auditor'],
      'order' => [
        'auditor' => 4,
      ],
      'title' => [
        'auditor' => 'DK Üyesi',
      ],
    ],
    'aziz-akgul' => [
      'name' => 'Aziz Akgül',
      'file' => 'aziz-akgul.php',
      'types' => ['founder'],
      'order' => [
        'founder' => 1,
      ],
    ],
    'bilge-ogun-bassani' => [
      'name' => 'Bilge Öğün Bassani',
      'file' => 'bilge-ogun-bassani.php',
      'types' => ['advisor'],
      'order' => [
        'advisor' => 1,
      ],
    ],
    'cem-aksehirlioglu' => [
      'name' => 'Cem Akşehirlioğlu',
      'file' => 'cem-aksehirlioglu.php',
      'types' => ['board'],
      'order' => [
        'board' => 6,
      ],
      'title' => [
        'board' => 'YK Üyesi',
      ],
    ],
    'ceren-kali' => [
      'name' => 'Ceren Kalı',
      'file' => 'ceren-kali.php',
      'types' => ['founder'],
      'order' => [
        'founder' => 11,
      ],
    ],
    'charlotte-sabbah' => [
      'name' => 'Charlotte Sabbah',
      'file' => 'charlotte-sabbah.php',
      'types' => ['advisor'],
      'order' => [
        'advisor' => 4,
      ],
    ],
    'dara-aslan' => [
      'name' => 'Dara Aslan',
      'file' => 'dara-aslan.php',
      'types' => ['board'],
      'order' => [
        'board' => 3,
      ],
      'title' => [
        'board' => 'Sekreter',
      ],
    ],
    'derya-sel-bozkurt' => [
      'name' => 'Derya Sel Bozkurt',
      'file' => 'derya-sel-bozkurt.php',
      'types' => ['founder', 'auditor'],
      'order' => [
        'founder' => 5,
        'auditor' => 6,
      ],
      'title' => [
        'auditor' => 'Yedek Üye',
      ],
    ],
    'didem-unsur' => [
      'name' => 'Didem Ünsür',
      'file' => 'didem-unsur.php',
      'types' => ['board'],
      'order' => [
        'board' => 4,
      ],
      'title' => [
        'board' => 'Sayman',
      ],
    ],
    'ebru-celebi' => [
      'name' => 'Ebru Çelebi',
      'file' => 'ebru-celebi.php',
      'types' => ['employee'],
      'order' => [
        'employee' => 1,
      ],
      'title' => [
        'employee' => 'Genel Sekreter ve Bağışçı İlişkileri',
      ],
    ],
    'ecehan-bike-geckinli' => [
      'name' => 'Ecehan Bike Geçkinli',
      'file' => 'ecehan-bike-geckinli.php',
      'types' => ['auditor'],
      'order' => [
        'auditor' => 3,
      ],
      'title' => [
        'auditor' => 'DK Üyesi',
      ],
    ],
    'ibrahim-betil' => [
      'name' => 'İbrahim Betil',
      'file' => 'ibrahim-betil.php',
      'types' => ['founder', 'board'],
      'order' => [
        'founder' => 3, // Set the order number for founder type
        'board' => 1, // Set the order number for board type
      ],
      'title' => [
        'board' => 'YK Başkanı', // Set the title for board type
      ]
    ],
    'jak-jabes' => [
      'name' => 'Jak Jabes',
      'file' => 'jak-jabes.php',
      'types' => ['advisor'],
      'order' => [
        'advisor' => 2,
      ],
    ],
    'kaddafi-bozkurt' => [
      'name' => 'Kaddafi Bozkurt',
      'file' => 'kaddafi-bozkurt.php',
      'types' => ['founder'],
      'order' => [
        'founder' => 7,
      ],
    ],
    'kerim-uralli' => [
      'name' => 'Kerim Urallı',
      'file' => 'kerim-uralli.php',
      'types' => ['founder'],
      'order' => [
        'founder' => 4,
      ],
    ],
    'mehmet-arda' => [
      'name' => 'Mehmet Arda',
      'file' => 'mehmet-arda.php',
      'types' => ['founder'],
      'order' => [
        'founder' => 2,
      ],
    ],
    'mehmet-bahadir-teke' => [
      'name' => 'Mehmet Bahadır Teke',
      'file' => 'mehmet-bahadir-teke.php',
      'types' => ['auditor'],
      'order' => [
        'auditor' => 1,
      ],
      'title' => [
        'auditor' => 'DK Başkanı',
      ],
    ],
    'mustafa-ciper' => [
      'name' => 'Mustafa Çiper',
      'file' => 'mustafa-ciper.php',
      'types' => ['board'],
      'order' => [
        'board' => 8,
      ],
      'title' => [
        'board' => 'Yedek Üye',
      ],
    ],
    'mutlu-sen' => [
      'name' => 'Mutlu Şen',
      'file' => 'mutlu-sen.php',
      'types' => ['auditor'],
      'order' => [
        'auditor' => 5,
      ],
      'title' => [
        'auditor' => 'Yedek Üye',
      ],
    ],
    'nuh-hakan-oflazer' => [
      'name' => 'Nuh Hakan Oflazer',
      'file' => 'nuh-hakan-oflazer.php',
      'types' => ['board'],
      'order' => [
        'board' => 2,
      ],
      'title' => [
        'board' => 'YK Başkan Yardımcısı',
      ],
    ],
    'samir-bayraktar' => [
      'name' => 'Samir Bayraktar',
      'file' => 'samir-bayraktar.php',
      'types' => ['founder'],
      'order' => [
        'founder' => 9,
      ],
    ],
    'sema-emek' => [
      'name' => 'Sema Emek',
      'file' => 'sema-emek.php',
      'types' => ['board'],
      'order' => [
        'board' => 5,
      ],
      'title' => [
        'board' => 'YK Üyesi',
      ],
    ],
    'sema-gumus' => [
      'name' => 'Sema Gümüş',
      'file' => 'sema-gumus.php',
      'types' => ['board'],
      'order' => [
        'board' => 9,
      ],
      'title' => [
        'board' => 'Yedek Üye',
      ],
    ],
    'tayyibe-gulek-domac' => [
      'name' => 'Tayyibe Gülek Domaç',
      'file' => 'tayyibe-gulek-domac.php',
      'types' => ['advisor'],
      'order' => [
        'advisor' => 3,
      ],
    ],
    'tugba-jabban' => [
      'name' => 'Tuğba Jabban',
      'file' => 'tugba-jabban.php',
      'types' => ['founder'],
      'order' => [
        'founder' => 10,
      ],
    ],
    'tuncay-bozkurt' => [
      'name' => 'Tuncay Bozkurt',
      'file' => 'tuncay-bozkurt.php',
      'types' => ['employee'],
      'order' => [
        'employee' => 2,
      ],
      'title' => [
        'employee' => 'Genel Koordinatör',
      ],
    ],
    'turgut-derman' => [
      'name' => 'Turgut Derman',
      'file' => 'turgut-derman.php',
      'types' => ['founder'],
      'order' => [
        'founder' => 8,
      ],
    ],
    'zeynel-senan' => [
      'name' => 'Zeynel Senan',
      'file' => 'zeynel-senan.php',
      'types' => ['auditor'],
      'order' => [
        'auditor' => 2,
      ],
      'title' => [
        'auditor' => 'DK Üyesi',
      ],
    ],
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
      <li class="active"><a href="#teamFounders" aria-controls="teamFounders" data-toggle="tab">KURUCULAR</a></li>
      <li><a href="#teamBoard" aria-controls="teamBoard" data-toggle="tab">YÖNETİM KURULU</a></li>
      <li><a href="#teamAuditors" aria-controls="teamAuditors" data-toggle="tab">DENETİM KURULU</a></li>
      <li><a href="#teamAdvisors" aria-controls="teamAdvisors" data-toggle="tab">DANIŞMA KURULU</a></li>
      <li><a href="#teamEmployees" aria-controls="teamEmployees" data-toggle="tab">ÇALIŞANLAR</a></li>
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