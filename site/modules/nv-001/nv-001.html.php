<?php


	$menu = $module->addmenu()->toStructure();


?>


 
<!-- 

// Name:            NV-001
// Description:     Left Logo and Right Menu

// ========================================================================

-->
 
<div id="<?= $module->uid() ?>" class="nv-001 <?= $module->uid() ?> uk-position-relative" style="z-index: 980;">
	<div class="<?php if($module->transparent() == 'yes'): ?> <?= $module->margintop() ?> uk-position-top  <?php endif ?> <?= $module->boxshadow() ?>" <?php if($module->stickymenu() == 'no'): ?>uk-parallax="opacity: <?= $module->menuopacitystart() ?>, <?= $module->menuopacitymiddle() ?>, <?= $module->menuopacityend() ?>; viewport: <?= $module->menuviewport() ?>; easing: <?= $module->menueasing() ?>; y: <?= $module->menuyaxisstart() ?>, <?= $module->menuyaxismiddle() ?>, <?= $module->menuyaxisend() ?> ; media: @m" <?php endif ?>>
		<div <?php if($module->stickymenu() == 'yes'): ?> uk-sticky="show-on-up: true; animation: <?= $module->stickyanimations() ?>; sel-target: .nv-001-container; cls-active: nv-001-active; cls-inactive: nv-001-inactive; top: <?= $module->stickytop() ?>; media: @m" <?php endif ?>>
			<nav  class="nv-001-container <?php if($module->transparent() == 'no'): ?> nv-001-bgcolor <?php endif ?>">
				<div class="uk-container <?= $module->container() ?>">
					<div class="uk-navbar <?php if($module->space() == 'true'): ?> uk-padding-large <?php endif ?> uk-padding-remove-vertical">
						<div class="uk-navbar-left">
							<?php if($image = $module->brandlogo()->toFile()): ?>
							<a class="uk-navbar-item uk-logo dim" href="<?= url() ?>">
					 
							    <img src="<?= $image->url() ?>" width="" height="" alt="<?php echo $site->title()->html() ?>" uk-icon uk-svg >
							</a>
							<?php else: ?>
								<a class="uk-navbar-item uk-logo dim" href="<?= url() ?>">
									<h1 class="f4 f3@m fw7 uk-margin-remove <?= str::slug($site->headlineff()->html()) ?>"><?= $module->brandname() ?></h1>
								</a>
							<?php endif ?>
						</div>
						<div class="uk-navbar-right uk-visible@m navbar-menu-style-1">
							<ul class="uk-navbar-nav">
							    <?php foreach($menu as $item):?>
				                    <li class="<?= str::slug($site->headlineff()->html()) ?> f4 fw5 uk-margin-medium-left" > 
				                         <a href="<?= url($item->pagelink()) ?>"><?php echo $item->menuname() ?></a>
				                    </li>
					            <?php endforeach ?>
							</ul>
						</div>
						<div class="uk-navbar-right uk-hidden@m nr2">
							<a class="uk-navbar-toggle dim" uk-navbar-toggle-icon type="button" uk-toggle="target: #<?= $module->mobilemenu() ?>"></a>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>
<style>
	/* Normal */
	.<?= $module->uid() ?> .uk-logo {
		color: <?= $module->logocolor() ?>;
	}

	.<?= $module->uid() ?> .uk-navbar-nav> li > a,
	.<?= $module->uid() ?> .uk-navbar-toggle {
		color: <?= $module->fontcolor() ?>;
	}

	.<?= $module->uid() ?> .nv-001-bgcolor {
 		background-color: <?= $module->bgcolor() ?>;
 	}

	/* For Sticky */
	.nv-001-active {
		background: <?= $module->stickybgcolor() ?>
	}
	.nv-001-active  .uk-logo {
		color: <?= $module->stickylogocolor() ?>;
	}
	.nv-001-active .uk-navbar-nav > li > a,
	.nv-001-active .uk-navbar-toggle {
		color: <?= $module->stickyfontcolor() ?>;
	}
 	
 	.nv-001-bgcolor.nv-001-active {
		background-color: <?= $module->stickybgcolor() ?>
	}
</style>
 <!-- NV-001 End =============================-->