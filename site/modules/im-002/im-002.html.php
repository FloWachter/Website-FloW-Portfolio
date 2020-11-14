<!-- 

// Name:            IM-002
// Description:     Left Lead and Right Image

// ========================================================================

-->
<div id="<?= $module->uid() ?>" class="im-002 uk-section <?= $module->addpadding() ?> <?= $module->removepadding() ?>" uk-scrollspy="target: > div > div > .uk-card; cls: <?= $module->scrollspy() ?>; delay: <?= $module->scrollspydelay() ?>; repeat: <?php if($module->scrollspyrepeat() == 'true'): ?>true <?php else: ?>false<?php endif ?>" style="background-color: <?= $module->bgcolor() ?>">
    <div class="uk-container <?= $module->container() ?>">
        <div class="uk-flex-middle uk-grid-large" uk-grid <?php if($module->lightbox() == 'yes'): ?>uk-lightbox="animation: <?= $module->lightboxanimation() ?>"<?php endif ?>>
            <div class="uk-inline-clip uk-width-expand@m uk-flex-last@m uk-inline-clip uk-transition-toggle">
                <img class="<?php if($module->lightbox() == 'yes'): ?> uk-transition-scale-up <?php endif ?> uk-transition-opaque" data-src="<?php if($image = $module->onlyimage()->toFile()): ?><?= $image->resize(1280, null, 80)->url() ?><?php endif ?>"
                data-srcset="<?php if($image = $module->onlyimage()->toFile()): ?><?= $image->resize(1920, null, 80)->url() ?><?php endif ?> 1920w,<?php if($image = $module->onlyimage()->toFile()): ?><?= $image->resize(1280, null, 80)->url() ?><?php endif ?> 1280w" sizes="100vw" width="1920" height="600" alt="" uk-img>
                <?php if($module->lightbox() == 'yes'): ?>
                    <a class="uk-position-cover <?= $module->overlaytransition() ?>" href="<?php if($image = $module->onlyimage()->toFile()): ?><?= $image->resize(1600, null, 80)->url() ?><?php endif ?>" data-caption="<?= $image->caption(); ?>" style="background-color: <?= $module->overlay() ?>;">

                        <div class="uk-position-center">
                            <span class="uk-transition-slide-bottom-medium" uk-icon="icon: plus-circle; ratio: 1.5" style="color: <?= $module->iconcolor() ?>"></span>
                        </div>
                    </a>
                <?php endif ?>    
            </div>
            <div class="uk-width-expand@m">
                <?php if(!$module->text()->isEmpty()): ?>
                <div class="f4 f3@m lh-copy typo-style-1 measure" style="color: <?= $module->textcolor() ?>">
                    <?= $module->text()->kirbytext() ?>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>
</div><!-- dont delet, its needed -->
<!-- IM-002 End =============================-->
