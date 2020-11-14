<?php

	// nested menu
	$items = $pages->visible();
	$menu = $module->addmenu()->toStructure();

?>


<!-- 

// Name:            OC-001
// Description:     Vertical Centered Menu and Social Links

// ========================================================================

-->
<div id="offcanvas-oc-001" class="oc-001 <?= $module->uid() ?>" uk-offcanvas="mode: slide; flip: false; overlay: true; esc-close: true; bg-close: true">
	<div class="uk-offcanvas-bar uk-flex uk-flex-column uk-text-center" style="background-color: <?= $module->bgcolor() ?>">

	    <button class="uk-offcanvas-close uk-close-large" type="button" uk-close></button>

	    <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical" uk-nav uk-scrollspy="target: > li; cls: <?= $module->scrollspy() ?>; delay: <?= $module->scrollspydelay() ?>; repeat: <?php if($module->scrollspyrepeat() == 'true'): ?>true <?php else: ?>false<?php endif ?>">
	    	<?php foreach($menu as $item): ?>
			<li  class="f3">
				<a href="<?= url($item->pagelink()) ?>"><?php echo $item->menuname() ?></a>
			</li>
		<?php endforeach ?>
	    </ul>

	    <div>
	        <div class="uk-grid-small uk-child-width-auto uk-flex-inline" uk-grid>
			<?php foreach($module->sociallinks()->toStructure() as $item): ?>
			<div>
				<a class="uk-icon-button" href="<?php echo $item->link() ?>" uk-icon="icon: <?php echo $item->title() ?>"></a>
			</div>
			<?php endforeach ?>
	        </div>
	    </div>

	</div>
</div>
<!-- OC-001 End =============================-->

<style>
	.<?= $module->uid() ?> .uk-offcanvas-close {
		color: <?= $module->menucolor() ?>
	}

	.<?= $module->uid() ?> .uk-offcanvas-close:hover {
		color: <?= $module->menuhovercolor() ?>
	}

	/* Normal */
	.<?= $module->uid() ?> .uk-nav-primary > li > a {
		color: <?= $module->menucolor() ?>
	}

	/* Hover */
	.<?= $module->uid() ?> .uk-nav-primary > li:hover > a,
	.<?= $module->uid() ?> .uk-nav-primary > li > a:focus,
	.<?= $module->uid() ?> .uk-nav-primary > li > a.uk-open {
		color: <?= $module->menuhovercolor() ?>
	}
	/* OnClick */
	.<?= $module->uid() ?> .uk-nav-primary > li > a:active {
	    	color: <?= $module->menuactivecolor() ?>
	}

	/* Active */
	.<?= $module->uid() ?> .uk-nav-primary > li.uk-active > a {
	    	color: <?= $module->menuactivecolor() ?>;
	    	font-weight: bold
	}
</style>

















