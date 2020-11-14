<!-- 

// Name:            TX-012
// Description:     Two Columns Lead with Dropcap

// ========================================================================

-->
<div id="<?= $module->uid() ?>" class="tx-012 uk-section <?= $module->addpadding() ?> <?= $module->removepadding() ?>" uk-scrollspy="target: > div; cls: <?= $module->scrollspy() ?>; delay: <?= $module->scrollspydelay() ?>; repeat: <?php if($module->scrollspyrepeat() == 'true'): ?>true <?php else: ?>false<?php endif ?>" style="background-color: <?= $module->bgcolor() ?>">
	<div class="uk-container <?= $module->container() ?>">
	    
	    <?php if(!$module->text()->isEmpty()): ?>
	    <div class="f4 f3@m lh-copy uk-column-1-2@m uk-dropcap typo-style-1" style="color: <?= $module->textcolor() ?>">
	    	<?= $module->text()->kirbytext() ?>
	    </div>
	    <?php endif ?>
	</div>
</div>
<!-- TX-012 End =============================-->
 


