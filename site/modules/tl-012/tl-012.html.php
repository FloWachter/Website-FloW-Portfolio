<!-- 

// Name:            TL-012
// Description:     X-Large Medium Title

// ========================================================================

-->
<div id="<?= $module->uid() ?>" class="tl-012 uk-section <?= $module->addpadding() ?> <?= $module->removepadding() ?>" uk-scrollspy="target: > div; cls: <?= $module->scrollspy() ?>; delay: <?= $module->scrollspydelay() ?>; repeat: <?php if($module->scrollspyrepeat() == 'true'): ?>true <?php else: ?>false<?php endif ?>" style="background-color: <?= $module->bgcolor() ?>">
	<div class="<?= $module->textalign() ?> uk-container <?= $module->container() ?>">


		<?php if(!$module->subtitle()->isEmpty()): ?>
		<h2 class="f1 f-subheadline@s f-headline@m fw5 lh-title measure  uk-margin-large-top uk-margin-bottom <?php if($module->textalign() == 'uk-text-right'): ?> uk-margin-auto-left <?php endif ?> <?php if($module->textalign() == 'uk-text-center'): ?> uk-margin-auto <?php endif ?> <?= str::slug($site->headlineff()->html()) ?>" style="color: <?= $module->titlecolor() ?>"><?= $module->subtitle()->html() ?></h2>
		<?php endif ?>


	</div>
</div>
<!-- TL-012 End =============================-->
 


