<title><?php echo $pageTitle . " - Sen De Gel"; ?></title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="Sen De Gel Derneği (Sosyal ve Ekonomik Yaşamda Nitelikli Değişim ve Gelişime Destek Derneği) Resmi Sitesi" />
<meta name="keywords" content="sen de gel, yardım kuruluşu, insani yardım, bağış, sen de gel destekçiler, sen de gel ana sayfa, sen de gel’e katıl, gönüllü, Afrika’ya yardım, sen de gel sosyal medya, sürdürülebilir, sürdürülebilir kalkınma, kalkınma projeleri, kurban, Afrika, Afrika'ya bağış, Sahara, en az gelişmiş ülke, açlık, susuzluk, kuraklık" />

<!-- Facebook Meta Tags -->
<meta property="og:url" content="http://www.sendegel.org.tr">
<meta property="og:type" content="website">
<meta property="og:title" content="Sen De Gel Derneği">
<meta property="og:description" content="Sosyal ve Ekonomik Yaşamda Nitelikli Değişim ve Gelişime Destek Derneği Resmi Sitesi">
<meta property="og:image" content="https://cdn.fonzip.com/public/sendegel/img/fundraising/blob-1673081399950.png">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="sendegel.org.tr">
<meta property="twitter:url" content="http://www.sendegel.org.tr/">
<meta name="twitter:title" content="Sen De Gel Derneği">
<meta name="twitter:description" content="Sosyal ve Ekonomik Yaşamda Nitelikli Değişim ve Gelişime Destek Derneği Resmi Sitesi">
<meta name="twitter:image" content="https://cdn.fonzip.com/public/sendegel/img/fundraising/blob-1673081399950.png">


<link rel="shortcut icon" href="/assets/images/head/favicon.png">
<link rel="apple-touch-icon" href="/assets/images/head/iphone.png">
<link rel="apple-touch-icon" sizes="76x76" href="/assets/images/head/ipad.png">
<link rel="apple-touch-icon" sizes="120x120" href="/assets/images/head/iphone-retina.png">
<link rel="apple-touch-icon" sizes="152x152" href="/assets/images/head/ipad-retina.png">

<link rel="stylesheet" href="../assets/css/core.css">

<!--<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5936c20199fded00128b5e98&product=sticky-share-buttons"></script>-->

<?php include __DIR__ . '/assets/data/site-data.php'; ?>

<!-- if page url is destekcilerimiz.php or our-supporters.php, include site-supporters.php -->
<?php if (strpos($_SERVER['REQUEST_URI'], 'destekcilerimiz.php') || strpos($_SERVER['REQUEST_URI'], 'our-supporters.php')): ?>
	<?php include __DIR__ . '/assets/data/site-supporters.php'; ?>
<?php endif; ?>