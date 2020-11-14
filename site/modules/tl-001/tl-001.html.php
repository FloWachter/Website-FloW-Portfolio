<!-- 

// Name:            TL-001
// Description:     Narrow Semi-Bold Small Title and Wide Text

// ========================================================================

-->
<div id="<?= $module->uid() ?>" class="tl-001 uk-section <?= $module->addpadding() ?> <?= $module->removepadding() ?>" uk-scrollspy="target: > div; cls: <?= $module->scrollspy() ?>; delay: <?= $module->scrollspydelay() ?>; repeat: <?php if($module->scrollspyrepeat() == 'true'): ?>true <?php else: ?>false<?php endif ?>" style="background-color: <?= $module->bgcolor() ?>">
	<div class="<?= $module->textalign() ?> uk-container <?= $module->container() ?> typo-style-1">
	    <?php if(!$module->subtitle()->isEmpty()): ?>
	    <h2 class="f3 f2@m fw6 lh-title measure-narrow <?php if($module->textalign() == 'uk-text-right'): ?> uk-margin-auto-left <?php endif ?> <?php if($module->textalign() == 'uk-text-center'): ?> uk-margin-auto <?php endif ?> <?= str::slug($site->headlineff()->html()) ?>" style="color: <?= $module->titlecolor() ?>"><?= $module->subtitle()->html() ?></h2>
	    <?php endif ?>
   
	    <?php if(!$module->text()->isEmpty()): ?>
	    <div class="f5 f4@m lh-copy measure-wide uk-margin-top <?php if($module->textalign() == 'uk-text-right'): ?> uk-margin-auto-left <?php endif ?> <?php if($module->textalign() == 'uk-text-center'): ?> uk-margin-auto <?php endif ?>" style="color: <?= $module->desccolor() ?>">
	    	<?= $module->text()->kirbytext() ?>
	    </div>
	    <?php endif ?>
	</div>
</div>
<!-- TL-001 End =============================-->
 


