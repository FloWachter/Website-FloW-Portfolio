<?php
	// Max number of posts shown per page
	$list       = $module->children()->visible();
?>

<?php if($list->count()) : ?> 

 

<!-- 

// Name:            PJ-001
// Description:     Two Columns Masonry and Parallax - Image and Narrow Light X-Small Title

// ========================================================================

-->
<div id="<?= $module->uid() ?>" class="pj-001 <?= $module->uid() ?> uk-section <?= $module->addpadding() ?> <?= $module->removepadding() ?>" style="background-color: <?= $module->bgcolor() ?>">
	<div class="<?php if($module->layout() == 'no'): ?> uk-container <?= $module->container() ?> <?php endif ?>">


		<div class="uk-child-width-1-2@s <?= $module->gutters() ?>" uk-scrollspy="target: > div > .uk-panel; cls: <?= $module->scrollspy() ?>; delay: <?= $module->scrollspydelay() ?>; repeat: <?php if($module->scrollspyrepeat() == 'true'): ?>true <?php else: ?>false<?php endif ?>" uk-grid="masonry: <?php if($module->masonry() == 'true'): ?>true <?php else: ?>false<?php endif ?>; <?php if($module->parallax() == 'yes'): ?>parallax: <?= $module->parallaxvalue() ?> <?php endif ?>">
			
			<?php foreach($list as $project): ?>
			<div class="uk-project-loading">
				<div class="uk-panel uk-transition-toggle">

					<div class="uk-inline-clip">

				                <img class="<?= $module->imagetransition() ?> uk-transition-opaque" data-src="<?php if($image = $project->coverimage()->toFile()): ?><?= $image->resize(1280, null, 80)->url() ?><?php endif ?>"
				                    data-srcset="<?php if($image = $project->coverimage()->toFile()): ?><?= $image->resize(2560, null, 80)->url() ?><?php endif ?> 2560w,
				                            <?php if($image = $project->coverimage()->toFile()): ?><?= $image->resize(1280, null, 80)->url() ?><?php endif ?> 1280w"
				                     sizes="100vw"
				                     width="1280" height="498" alt="" uk-img>

						<div class="uk-position-cover <?= $module->overlaytransition() ?>" style="background-color: <?= $module->overlay() ?>;"></div>
						
						<a href="<?= $project->url(); ?>" class="uk-position-cover" ></a>
					</div>
					<h3 class="f4 f3@m fw5 lh-solid measure-narrow uk-margin-bottom uk-margin-top <?php if($module->gutters() == 'uk-grid-collapse'): ?> uk-padding uk-padding-remove-vertical <?php else: ?> uk-margin-top <?php endif ?> <?php if($module->layout() == 'yes'): ?> uk-padding uk-padding-remove-vertical <?php endif ?> lh-solid <?= $module->titletransition() ?> <?= str::slug($site->headlineff()->html()) ?>" style="color: <?= $module->titlecolor() ?>"><?= $project->title()->html() ?></h3>

				</div>
			</div>
			<?php endforeach ?>
		     
		</div>

	</div>
</div>
<!-- PJ-001 End =============================-->
 
<?php endif ?>
 
