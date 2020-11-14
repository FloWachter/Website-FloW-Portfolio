<!-- 

// Name:            TL-002
// Description:     Full-image from Project

// ========================================================================

-->
<div id="<?= $module->uid() ?>" 
	class="im-003 uk-section <?= $module->addpadding() ?> <?= $module->removepadding() ?>" uk-scrollspy="target: > div; cls: <?= $module->scrollspy() ?>; delay: <?= $module->scrollspydelay() ?>; repeat: <?php if($module->scrollspyrepeat() == 'true'): ?>true <?php else: ?>false<?php endif ?>" 
	style="background-color: <?= $module->bgcolor() ?>">

	<figure class="uk-imgage-crop">
		
		<img class="uk-transition-opaque"
		style="transform: translateY(<?= $module->imgposition() ?>%)"
		data-src="<?php if($image = $page->coverimage()->toFile()): ?><?= $image->resize(840, null, 80)->url() ?><?php endif ?>" data-srcset="<?php if($image = $page->coverimage()->toFile()): ?><?= $image->resize(2560, null, 80)->url() ?><?php endif ?> 2560w,
		<?php if($image = $page->coverimage()->toFile()): ?><?= $image->resize(1680, null, 80)->url() ?><?php endif ?> 1680w,
		<?php if($image = $page->coverimage()->toFile()): ?><?= $image->resize(840, null, 80)->url() ?><?php endif ?> 840w" sizes="100vw" width="2560" height="600" alt="" uk-img >

	</figure>
</div>

<!-- TL-001 End =============================-->



