<!-- 

// Name:            TM-001
// Description:     There Columns - Image, Small Name, Small Light Position and Lead (Phone, E-Mail)

// ========================================================================

-->
<div id="<?= $module->uid() ?>" class="tm-001 uk-section <?= $module->addpadding() ?> <?= $module->removepadding() ?>" style="background-color: <?= $module->bgcolor() ?>">
	<div class="<?php if($module->layout() == 'no'): ?> uk-container <?= $module->container() ?> <?php endif ?>">

	    <div class="uk-child-width-1-2@s uk-child-width-1-3@m <?= $module->gutters() ?>" uk-grid uk-scrollspy="target: > div; cls: <?= $module->scrollspy() ?>; delay: <?= $module->scrollspydelay() ?>; repeat: <?php if($module->scrollspyrepeat() == 'true'): ?>true <?php else: ?>false<?php endif ?>">
	        <?php foreach($module->teams()->toStructure() as $item): ?>
	        <div>
	           <div class="uk-inline" style="background-color: <?= $module->bgblendcolor() ?>">
	            
	           	<img class="uk-transition-opaque <?= $module->bgblend() ?>" data-src="<?php if($image = $item->photo()->toFile()): ?><?= $image->resize(760, null, 80)->url() ?><?php endif ?>"
	                data-srcset="<?php if($image = $item->photo()->toFile()): ?><?= $image->resize(1280, null, 80)->url() ?><?php endif ?> 1280w,
			<?php if($image = $item->photo()->toFile()): ?><?= $image->resize(960, null, 80)->url() ?><?php endif ?> 960w"
			sizes="100vw"
	                width="960" height="600" alt="" uk-img>
	           </div>

	            <div class="<?php if($module->layout() == 'yes'): ?> uk-padding <?php else: ?> uk-padding uk-padding-remove-horizontal<?php endif ?> <?= $module->contentalign() ?>">
	                <h3 class="uk-margin-remove-bottom f3 fw6 lh-title <?= str::slug($site->headlineff()->html()) ?>" style="color: <?= $module->titlecolor() ?>"><?php echo $item->name() ?></h3>
	                <p class="f5 fw5 lh-copy uk-margin-small-top <?= str::slug($site->headlineff()->html()) ?>" style="color: <?= $module->positioncolor() ?>"><?php echo $item->position() ?></p>
	                <p class="uk-margin-remove-vertical">
	                    <a href="tel:<?php echo $item->phone() ?>" class="uk-button-text uk-text-lowercase f3" style="color: <?= $module->phonecolor() ?>"><?php echo $item->phone() ?></a>
	                </p>
	                <p class="uk-margin-remove-vertical uk-text-truncate">
	                    <a href="mailto:<?php echo $item->email() ?>" class="uk-button-text uk-text-lowercase f3" style="color: <?= $module->emailcolor() ?>"><?php echo $item->email() ?></a>
	                </p>
	            </div>
	        </div>
	        <?php endforeach ?>

	    </div>
	    
	</div>
</div>
<!-- TM-001 End =============================-->
