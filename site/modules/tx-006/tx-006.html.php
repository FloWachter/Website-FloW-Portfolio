<!-- 

// Name:            TX-006
// Description:     Large Text

// ========================================================================

-->
<div id="<?= $module->uid() ?>" class="tx-006 uk-section <?= $module->addpadding() ?> <?= $module->removepadding() ?>" uk-scrollspy="target: > div; cls: <?= $module->scrollspy() ?>; delay: <?= $module->scrollspydelay() ?>; repeat: <?php if($module->scrollspyrepeat() == 'true'): ?>true <?php else: ?>false<?php endif ?>" style="background-color: <?= $module->bgcolor() ?>">
	<div class="<?= $module->textalign() ?> uk-container <?= $module->container() ?> typo-style-1">

	    <?php if(!$module->text()->isEmpty()): ?>
	    <div class="f2 f1@m lh-copy measure <?php if($module->textalign() == 'uk-text-right'): ?> uk-margin-auto-left <?php endif ?> <?php if($module->textalign() == 'uk-text-center'): ?> uk-margin-auto <?php endif ?>" style="color: <?= $module->textcolor() ?>">
	    	<?= $module->text()->kirbytext() ?>
	    </div>
	    <?php endif ?>
	</div>
</div>
<!-- TX-006 End =============================-->
 


