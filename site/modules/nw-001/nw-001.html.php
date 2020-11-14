<?php
	// Max number of posts shown per page
	$list       = $module->children()->visible();
?>

<?php if($list->count()) : ?> 

 

<!-- 

// Name:            NW-001
// Description:     Date, Narrow X-Small Title, Wide Lead and Button (Half Column)

// ========================================================================

-->
<div id="<?= $module->uid() ?>" class="nw-001 uk-section <?= $module->addpadding() ?> <?= $module->removepadding() ?>" uk-scrollspy="target: > div > .uk-card; cls: <?= $module->scrollspy() ?>; delay: <?= $module->scrollspydelay() ?>; repeat: <?php if($module->scrollspyrepeat() == 'true'): ?>true <?php else: ?>false<?php endif ?>" style="background-color: <?= $module->bgcolor() ?>">

	
    <div class="uk-container <?= $module->container() ?>">


        <?php foreach($list as $news): ?>
        <div class="uk-child-width-1-2@s uk-margin-xlarge-top uk-card" uk-grid>
            <div>
                <div class="f4 f3@m lh-copy measure-wide" style="color: <?= $module->datecolor() ?>">
                    <time datetime="<?php echo $news->date('c') ?>"><?php echo $news->date('d.m.Y'); ?></time>
                </div>
            </div>

            <div>
                <div class="typo-style-2">
                    <h3 class="<?= str::slug($site->headlineff()->html()) ?> f4 f3@m fw6 lh-title measure-narrow" style="color: <?= $module->titlecolor() ?>">
                        <a href="<?= $news->url(); ?>" class="dim"><?= $news->title()->html() ?></a>
                    </h3>
                    <div class="f4 f3@m lh-copy measure-wide" style="color: <?= $module->textcolor() ?>">
                        <?= $news->description()->kirbytext() ?>
                    </div>

                    

                    <a href="<?= $news->url(); ?>" class="<?= str::slug($site->headlineff()->html()) ?> uk-link f4 fw5 dim" style="color: <?= $module->linkcolor() ?>"><?= $news->textbutton()->html() ?></a>
                </div>
                 
            </div>

        </div>
        <?php endforeach ?>
    </div>
    
</div>
<!-- NW-001 End =============================-->
 
<?php endif ?>