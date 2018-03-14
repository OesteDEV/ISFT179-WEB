<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<?= $this->Froala->plugin();?>
<?= $this->Froala->editor('#edit', array('height' => '500px')); ?>	

<div class="container">
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend><?= __('Publicacion nueva') ?></legend>
        <?php 
            echo $this->Form->control('title', ['label' => 'Titulo', 'class' => 'form-control']);
            echo $this->Form->control('content', ['label' => 'Contenido', 'type' => 'textarea', 'id' => 'edit', 'escape' => 'false']);
            echo $this->Form->control('thumbnail', ['label' => 'Url de la imagen', 'class' => 'form-control']);	
        ?>
    </fieldset>
    <?= $this->Form->button(__('Publicar'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>


</div>
