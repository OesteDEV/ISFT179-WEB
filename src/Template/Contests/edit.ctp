<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contest $contest
 */
?>
<!--
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contest->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contest->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contests'), ['action' => 'index']) ?></li>
    </ul>
</nav>
-->
<div class="container cleafix">
    <?= $this->Form->create($contest) ?>
    <fieldset>
        <legend><?= __('Editar Concurso') ?></legend>
        <?php
            echo $this->Form->control('carrera', ['class' => 'form-control']);
		    echo $this->Form->control('materia', ['label' => 'Materia', 'class' => 'form-control']);
            echo $this->Form->control('fecha', ['class' => 'form-control']);
            echo $this->Form->control('ganador', ['class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
