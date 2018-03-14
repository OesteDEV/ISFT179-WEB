<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<?= $this->Froala->plugin(); ?>
<?= $this->Froala->editor('#froala', array('height' => '500px')); ?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $post->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="container">
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend><?= __('Editar publicacion') ?></legend>
        <?php
            echo $this->Form->control('title', ['label' => 'Titulo', 'class' => 'form-control']);
            echo $this->Form->control('content', ['label' => 'Contenido', 'type' => 'textarea', 'id' => 'froala', 'escape' => false]);
//            echo $this->Form->control('thumbnail', ['label' => 'Url de la imagen', 'class' => 'form-control']);
			echo $this->Form->input('thumbnail', ['type' => 'file']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
