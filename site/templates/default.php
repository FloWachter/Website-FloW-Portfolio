
<?php snippet('header') ?>
	<body class="<?= str::slug($site->textff()->html()) ?>" style="font-weight: <?= str::slug($site->textfw()->html()) ?>">
		<div class="preloader-wrapper">
	            <div class="preloader">
	                <span uk-spinner="ratio: 4.5"></span>
	               	<!-- <img class="uk-responsive-height" src="<?= url() ?>/assets/images/logo.svg" alt="" uk-svg> -->
	            </div>
	        </div>
		<div class="uk-offcanvas-content">
			<?php $page->modules(); ?>
		</div>
<?php snippet('footer') ?>

