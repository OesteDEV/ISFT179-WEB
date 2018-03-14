<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div class="container clearfix">
		<img class="img-responsive img-thumbnail center-block" src="<?= h($post->thumbnail) ?>" >
	    <h3><?= h($post->title) ?></h3>
    	    <?= $this->Text->autoParagraph(h($post->content)); ?>
	    <div> Autor: <?= h($post->author_name) ?> </div>
	    <div> Publicado el <?= h($post->created) ?> </div>
</div>
<div class="clearfix"></div>
