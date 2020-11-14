<!-- 

// Name:            IM-004
// Description:     Left Image and Lead

// ========================================================================

-->
<div id="<?= $module->uid() ?>" class="im-004 uk-section <?= $module->addpadding() ?> <?= $module->removepadding() ?>" uk-scrollspy="target: > div > div > .uk-card; cls: <?= $module->scrollspy() ?>; delay: <?= $module->scrollspydelay() ?>; repeat: <?php if($module->scrollspyrepeat() == 'true'): ?>true <?php else: ?>false<?php endif ?>" style="background-color: <?= $module->bgcolor() ?>">
    <div class="uk-container <?= $module->container() ?>">
        <div class="uk-flex-middle uk-grid-large" uk-grid>
            <div class="uk-card uk-width-expand@m">
   
                <img class="uk-transition-scale-up uk-transition-opaque" data-src="<?php if($image = $module->onlyimage()->toFile()): ?><?= $image->resize(420, null, 80)->url() ?><?php endif ?>"
                    data-srcset="<?php if($image = $module->onlyimage()->toFile()): ?><?= $image->resize(840, null, 80)->url() ?><?php endif ?> 840w,
                            <?php if($image = $module->onlyimage()->toFile()): ?><?= $image->resize(420, null, 80)->url() ?><?php endif ?> 420w"
                     sizes="100vw"
                     width="840" height="600" alt="" uk-img>
     
            </div>
            
            
            <div class="uk-card uk-width-expand@m">
                <?php if(!$module->text()->isEmpty()): ?>
                <div class="f4 f3@m lh-copy typo-style-1 measure" style="color: <?= $module->textcolor() ?>">
                    <?= $module->text()->kirbytext() ?>
                </div>
                <?php endif ?>
            </div>
            
        </div>
    </div>
</div>
<!-- IM-004 End =============================-->
 


