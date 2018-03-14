<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="breadcrumb">
	<h2>Usuarios</h2>
</div>
<div id="usuarios" class="container">
    <div class="row">
        <div class="col-xs-10" style="">
            <div class="panel panel-default list-group-panel">
                <div class="panel-body">

                    <ul class="list-group list-group-header">
                        <li class="list-group-item list-group-body">
                            <div class="row">
                                <div class="col-xs-2"><?= $this->Paginator->sort('username', 'Nombre de usuario') ?></div>
                                <div class="col-xs-2"><?= $this->Paginator->sort('email', 'Email') ?></div>
                                <div class="col-xs-2"><?= $this->Paginator->sort('first_name', 'Nombre') ?></div>
                                <div class="col-xs-2"><?= $this->Paginator->sort('last_name', 'Apellido') ?></div>
                                <div class="col-xs-2">Acciones</div>
                            </div>
                        </li>
                    </ul>

                    <ul class="list-group list-group-body" style="">
		        <?php foreach ($users as $user): ?>
			<li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-2" style=""><?= h($user->username) ?></div>
                                <div class="col-xs-2" style=""><?= h($user->email) ?></div>
                                <div class="col-xs-2" style=""><?= h($user->first_name) ?></div>
                                <div class="col-xs-2" style=""><?= h($user->last_name) ?></div>
				<div class="col-xs-2" style="">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $user->id], ['confirm' => __('Está seguro de que quiere borrar "{0}"?', $user->username)]) ?>

				</div>
                            </div>
                        </li>

			<?php endforeach; ?>

                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>



    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primero')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}}')]) ?></p>
    </div>
