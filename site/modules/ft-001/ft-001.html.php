<!-- 

// Name:            FT-001
// Description:     Desc., Address, Phone, E-Mail, Links, Wide Copyright

// ========================================================================

-->

<footer id="<?= $module->uid() ?>" class="ft-001">
	<div class="uk-section <?= $module->addpadding() ?> <?= $module->removepadding() ?>" style="background-color: <?= $module->bgcolor() ?>" uk-scrollspy="target: > div  > .uk-card; cls: <?= $module->scrollspy() ?>; delay: <?= $module->scrollspydelay() ?>; repeat: <?php if($module->scrollspyrepeat() == 'true'): ?>true <?php else: ?>false<?php endif ?>">
	    <div class="uk-container <?= $module->container() ?>" style="color: <?= $module->textcolor() ?>">

        	<?php if(!$module->description()->isEmpty()): ?>
		<div class="measure f3 f2@m" style="color: <?= $module->desccolor() ?>">
			<?= $module->description()->kirbytext() ?>
		</div>
        	<?php endif ?>
	
	        
	        <div class="uk-card uk-margin-large-top" uk-grid>

	            <div class="uk-width-1-2@s uk-width-1-5@m uk-width-1-5@l">
	            	<h4 class="f5 f4@m fw6 <?= str::slug($site->headlineff()->html()) ?>" style="color: <?= $module->titlecolor() ?>"><?= $module->studiotitle()->html() ?></h4>
	                <div class="f4 f3@m" style="color: <?= $module->textcolor() ?>">
	                    <?= $module->studios()->kirbytext() ?>
	                </div>
	            </div>

	            <div class="uk-width-1-2@s uk-width-2-5@m uk-width-2-5@l">
	                <div>
	                    <h4 class="f5 f4@m fw6 <?= str::slug($site->headlineff()->html()) ?>" style="color: <?= $module->titlecolor() ?>"><?= $module->letstalk()->html() ?></h4>
	                    <ul class="uk-list">
	                    	<?php if(!$module->phone()->isEmpty()): ?>
	                        <li>
	                            <a href="tel:<?= $module->phone()->html() ?>" class="uk-button-text uk-text-lowercase f4 f3@m" style="color: <?= $module->linkcolor() ?>"><?= $module->phone()->html() ?></a>
	                        </li>
	                        <?php endif ?>
	                        <?php if(!$module->email()->isEmpty()): ?>
	                        <li>
	                            <a href="mailto:<?= $module->email()->html() ?>" class="uk-button-text uk-text-lowercase f4 f3@m" style="color: <?= $module->linkcolor() ?>"><?= $module->email()->html() ?></a>
	                        </li>
	                        <?php endif ?>
	                    </ul>


	                </div>
	            </div>

	            <div class="uk-width-1-2@s uk-width-1-5@m">
	                <div>
	                    <h4 class="f5 f4@m fw6 <?= str::slug($site->headlineff()->html()) ?>" style="color: <?= $module->titlecolor() ?>"><?= $module->menutitle()->html() ?></h4>
	                    <ul class="uk-list">
	                    	<?php foreach($module->addmenu()->toStructure() as $item): ?>
	                        <li>
	                            <a href="<?= url($item->pagelink()) ?>" class="uk-button-text uk-text-capitalize f4 f3@m" style="color: <?= $module->linkcolor() ?>"><?php echo $item->menuname() ?></a>
	                        </li>
	                        <?php endforeach ?>
	                    </ul>
	                    
	                </div>
	            </div>

	            <div class="uk-width-1-2@s uk-width-1-5@m">
	                <div>
	                    <h4 class="f5 f4@m fw6 <?= str::slug($site->headlineff()->html()) ?>" style="color: <?= $module->titlecolor() ?>"><?= $module->socialtitle()->html() ?></h4>
	                    <ul class="uk-list">
	                    	<?php foreach($module->sociallinks()->toStructure() as $item): ?>
	                        <li>
	                            <a href="<?php echo $item->link() ?>" target="_blank" class="uk-button-text uk-text-capitalize f4 f3@m" style="color: <?= $module->linkcolor() ?>"><?php echo $item->title() ?></a>
	                        </li>
	                        <?php endforeach ?>
	                    </ul>
	    
	                </div>
	            </div>
	        </div>
	        
	        <div class="uk-card measure-wide uk-margin-large-top typo-style-4 f6 f5@m" style="color: <?= $module->copyrightcolor() ?>">
	             
	        	<?= $module->copyright()->kirbytext() ?>
	             
	        </div>
	      
	    </div>
	</div>
</footer>
<!-- FT-001 End =============================-->
 


