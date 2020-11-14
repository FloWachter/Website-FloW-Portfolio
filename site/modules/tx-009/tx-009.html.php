<!-- 

// Name:            TX-009
// Description:     Two Columns Lead

// ========================================================================

-->
<div id="<?= $module->uid() ?>" class="tx-009 uk-section <?= $module->addpadding() ?> <?= $module->removepadding() ?>" uk-scrollspy="target: > div; cls: <?= $module->scrollspy() ?>; delay: <?= $module->scrollspydelay() ?>; repeat: <?php if($module->scrollspyrepeat() == 'true'): ?>true <?php else: ?>false<?php endif ?>" style="background-color: <?= $module->bgcolor() ?>">
	<div class="uk-container <?= $module->container() ?> typo-style-1">
	    
	    <?php if(!$module->text()->isEmpty()): ?>
	    <div class="f4 f3@m lh-copy uk-column-1-2@m" style="color: <?= $module->textcolor() ?>">
	    	<?= $module->text()->kirbytext() ?>
	    </div>
	    <?php endif ?>
	</div>
</div>
<!-- TX-009 End =============================-->
 


