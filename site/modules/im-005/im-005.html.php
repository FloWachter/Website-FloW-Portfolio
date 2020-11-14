

<!-- 

// Name:            IM-005
// Description:     Two Images with Lightbox 

// ========================================================================

-->
<div id="<?= $module->uid() ?>" class="im-005 uk-section <?= $module->addpadding() ?> <?= $module->removepadding() ?>" uk-scrollspy="target: > div > div > .uk-card; cls: <?= $module->scrollspy() ?>; delay: <?= $module->scrollspydelay() ?>; repeat: <?php if($module->scrollspyrepeat() == 'true'): ?>true <?php else: ?>false<?php endif ?>" style="background-color: <?= $module->bgcolor() ?>">
    <div class="uk-container <?= $module->container() ?>">
        <div class="uk-child-width-1-2@s uk-flex-middle uk-grid-large" uk-grid <?php if($module->lightbox() == 'yes'): ?>uk-lightbox="animation: <?= $module->lightboxanimation() ?>"<?php endif ?>>
            <div class="uk-card">
                <div class="uk-inline-clip uk-transition-toggle" style="box-shadow: <?= $module->horizontaloffset() ?>px <?= $module->verticaloffset() ?>px <?= $module->blurradius() ?>px <?= $module->optionalspreadradius() ?>px <?= $module->boxshadowcolor() ?>;">
                    <img class="<?php if($module->lightbox() == 'yes'): ?> uk-transition-scale-up <?php endif ?> uk-transition-opaque" data-src="<?php if($image = $module->firstimage()->toFile()): ?><?= $image->resize(960, null, 80)->url() ?><?php endif ?>"
                    data-srcset="<?php if($image = $module->firstimage()->toFile()): ?><?= $image->resize(1680, null, 80)->url() ?><?php endif ?> 1680w,
                    <?php if($image = $module->firstimage()->toFile()): ?><?= $image->resize(960, null, 80)->url() ?><?php endif ?> 960w"
                    sizes="100vw"
                    width="1680" height="600" alt="<?php if($image = $module->firstimage()->toFile()): ?><?= $image->caption(); ?><?php endif ?>" uk-img>
                    
                    <?php if($module->lightbox() == 'yes'): ?>
                        <a class="uk-position-cover <?= $module->overlaytransition() ?>" href="<?php if($firstimage = $module->firstimage()->toFile()): ?><?= $firstimage->resize(1600, null, 80)->url() ?><?php endif ?>" data-caption="<?= $firstimage->caption(); ?>" style="background-color: <?= $module->overlay() ?>;">
                            <div class="uk-position-center">
                                <span class="uk-transition-slide-bottom-medium" uk-icon="icon: plus-circle; ratio: 1.5" style="color: <?= $module->iconcolor() ?>"></span>
                            </div>
                        </a>
                    <?php endif ?>
                </div> 
            </div>
            <div class="uk-card">
                <div class="uk-inline-clip uk-transition-toggle" style="box-shadow: <?= $module->horizontaloffset() ?>px <?= $module->verticaloffset() ?>px <?= $module->blurradius() ?>px <?= $module->optionalspreadradius() ?>px <?= $module->boxshadowcolor() ?>;">
                    <img class="<?php if($module->lightbox() == 'yes'): ?> uk-transition-scale-up <?php endif ?> uk-transition-opaque" data-src="<?php if($image = $module->secondimage()->toFile()): ?><?= $image->resize(960, null, 80)->url() ?><?php endif ?>"
                    data-srcset="<?php if($image = $module->secondimage()->toFile()): ?><?= $image->resize(1680, null, 80)->url() ?><?php endif ?> 1680w,
                    <?php if($image = $module->secondimage()->toFile()): ?><?= $image->resize(960, null, 80)->url() ?><?php endif ?> 960w"
                    sizes="100vw"
                    width="1680" height="600" alt="<?php if($image = $module->secondimage()->toFile()): ?><?= $image->caption(); ?><?php endif ?>" uk-img>
                    <?php if($module->lightbox() == 'yes'): ?>
                        <a class="uk-position-cover <?= $module->overlaytransition() ?>" href="<?php if($secondimage = $module->secondimage()->toFile()): ?><?= $secondimage->resize(1600, null, 80)->url() ?><?php endif ?>" data-caption="<?= $secondimage->caption(); ?>" style="background-color: <?= $module->overlay() ?>;">
                            <div class="uk-position-center">
                                <span class="uk-transition-slide-bottom-medium" uk-icon="icon: plus-circle; ratio: 1.5" style="color: <?= $module->iconcolor() ?>"></span>
                            </div>
                        </a>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- dont delet, its needed -->
<!-- IM-005 End =============================-->