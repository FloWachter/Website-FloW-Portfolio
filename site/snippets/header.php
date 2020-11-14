<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="google-site-verification" content="86Yp52hhhZkgoXGRPjFlcnThBoFAMwzaWEY9zsG3ibc" />
		<title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
		<meta name="author" content="Ardi Gorgo">
 
		<?php echo $page->metaTags(['og', 'twitter', 'json-ld']) ?>
		<meta name="keywords" content="<?= $site->keywords()->html() ?>">

		
        	<link  href="https://fonts.googleapis.com/css?family=<?= $site->headlineff()->html() ?><?php if(!$site->headlinefw()->empty()): ?>:<?= str::slug($site->headlinefw()->html(),',') ?><?php endif ?><?php if($site->latinext() == 'true'): ?>&amp;subset=latin-ext<?php endif ?>" rel="stylesheet">

      		<link  href="https://fonts.googleapis.com/css?family=<?= $site->textff()->html() ?><?php if(!$site->textfw()->empty()): ?>:<?= str::slug($site->textfw()->html(),',') ?><?php endif ?><?php if($site->latinext() == 'true'): ?>&amp;subset=latin-ext<?php endif ?>" rel="stylesheet">


      		<?php if($favicon = $site->favicon()->toFile()): ?>
		<link rel="icon" href="<?= $favicon->url() ?>" type="image/png">
		<?php endif ?>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=9" />

		 
		<!-- <?php snippet('scss') ?> -->
		<?= css('assets/css/default.css') ?>
		<?= css('assets/css/custom.css') ?>

		<!-- Hotjar -->
		<script>
		    (function(h,o,t,j,a,r){
		        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
		        h._hjSettings={hjid:600441,hjsv:6};
		        a=o.getElementsByTagName('head')[0];
		        r=o.createElement('script');r.async=1;
		        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
		        a.appendChild(r);
		    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
		</script>
		 	
	</head>
 
