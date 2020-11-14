<!-- 

// Name:            TX-014
// Description:     Lead - Right (1/2 column)

// ========================================================================

-->
<div id="<?= $module->uid() ?>" class="tx-014 <?= $module->uid() ?> uk-section <?= $module->addpadding() ?> <?= $module->removepadding() ?>" uk-scrollspy="target: > div; cls: <?= $module->scrollspy() ?>; delay: <?= $module->scrollspydelay() ?>; repeat: <?php if($module->scrollspyrepeat() == 'true'): ?>true <?php else: ?>false<?php endif ?>" style="background-color: <?= $module->bgcolor() ?>">
    <div class="uk-container <?= $module->container() ?>">

        <div class="uk-child-width-1-2@s uk-flex uk-flex-right@m" uk-grid>
            <div>
		<?php if(!$module->text()->isEmpty()): ?>
		<div class="f4 f3@m lh-copy typo-style-1 measure" style="color: <?= $module->textcolor() ?>">
		<?= $module->text()->kirbytext() ?>
		</div>
		<?php endif ?>
		
            </div>
        </div>

    </div>
</div>
<!-- TX-014 End =============================-->
