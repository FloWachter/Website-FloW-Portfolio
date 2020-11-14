<!-- 

// Name:            CN-001
// Description:     There Columns - Narrow Light X-Small Title and Lead E-Mail

// ========================================================================

-->
<div id="<?= $module->uid() ?>" class="cn-001 uk-section <?= $module->addpadding() ?> <?= $module->removepadding() ?>" style="background-color: <?= $module->bgcolor() ?>">
	<div class="uk-container <?= $module->container() ?>">

	    <div class="uk-child-width-expand@m uk-grid-collapse" uk-grid uk-scrollspy="target: > div; cls: <?= $module->scrollspy() ?>; delay: <?= $module->scrollspydelay() ?>; repeat: <?php if($module->scrollspyrepeat() == 'true'): ?>true <?php else: ?>false<?php endif ?>">
	        <?php foreach($module->emails()->toStructure() as $item): ?>
	        <div>
	            <h3 class="f4 f3@m fw5 lh-title measure-narrow <?= str::slug($site->headlineff()->html()) ?>" style="color: <?= $module->titlecolor() ?>"><?php echo $item->title() ?></h3>
	            <a href="mailto:<?php echo $item->email() ?>" class="uk-button-text uk-text-lowercase f4 f3@m" style="color: <?= $module->emailcolor() ?>"><?php echo $item->email() ?></a></p>
	        </div>
	        <?php endforeach ?>
	    </div>
	    
	</div>
</div>
<!-- CN-001 End =============================-->
