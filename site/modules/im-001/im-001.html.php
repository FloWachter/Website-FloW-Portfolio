<!-- 

// Name:            IM-001
// Description:     Single Image

// ========================================================================

-->

<div id="<?= $module->uid() ?>" class="im-001 uk-section <?= $module->addpadding() ?> <?= $module->removepadding() ?>" uk-scrollspy="target: > div; cls: <?= $module->scrollspy() ?>; delay: <?= $module->scrollspydelay() ?>; repeat: <?php if($module->scrollspyrepeat() == 'true'): ?>true <?php else: ?>false<?php endif ?>" style="background-color: <?= $module->bgcolor() ?>">
	<div class="uk-container <?= $module->container() ?>" <?php if($module->lightbox() == 'yes'): ?>uk-lightbox="animation: <?= $module->lightboxanimation() ?>"<?php endif ?>>

		<div class="uk-inline-clip uk-transition-toggle" style="box-shadow: <?= $module->horizontaloffset() ?>px <?= $module->verticaloffset() ?>px <?= $module->blurradius() ?>px <?= $module->optionalspreadradius() ?>px <?= $module->boxshadowcolor() ?>;">
			


			<img class=" <?php if($module->lightbox() == 'yes'): ?> uk-transition-scale-up <?php endif ?> uk-transition-opaque" data-src="<?php if($image = $module->onlyimage()->toFile()): ?><?= $image->resize(1680, null, 80)->url() ?><?php endif ?>"
                    	data-srcset="<?php if($image = $module->onlyimage()->toFile()): ?><?= $image->resize(2560, null, 80)->url() ?><?php endif ?> 2560w,
                            <?php if($image = $module->onlyimage()->toFile()): ?><?= $image->resize(1680, null, 80)->url() ?><?php endif ?> 1680w"
                     	sizes="100vw"
                     	width="2560" height="600" alt="<?= $image->caption(); ?>" uk-img>



			
			<?php if($module->lightbox() == 'yes'): ?>

			<a class="uk-position-cover <?= $module->overlaytransition() ?>" href="<?php if($onlyimage = $module->onlyimage()->toFile()): ?><?= $onlyimage->resize(2560, null, 80)->url() ?><?php endif ?>" data-caption="<?= $image->caption(); ?>" style="background-color: <?= $module->overlay() ?>;">
				<div class="uk-position-center">
					<span class="uk-transition-slide-bottom-medium" uk-icon="icon: plus-circle; ratio: 2" style="color: <?= $module->iconcolor() ?>"></span>
				</div>
			</a>


			<?php endif ?>
		</div>
	</div>
</div> <!-- dont delet, its needed -->
<!-- IM-001 End =============================-->
 


