<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Editar Usuario') ?></legend>
        <?php
            echo $this->Form->control('username', ['label' => 'Nombre de Usuario', 'class' => 'form-control']);
            echo $this->Form->control('email', ['label' => 'E-mail', 'class' => 'form-control']);
            echo $this->Form->control('first_name', ['label' => 'Nombre', 'class' => 'form-control']);
            echo $this->Form->control('last_name', ['label' => 'Apellido', 'class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
