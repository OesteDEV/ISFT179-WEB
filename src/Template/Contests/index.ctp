<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contest[]|\Cake\Collection\CollectionInterface $contests
 */
?>
<div class="breadcrumb">
	<h2>Concursos</h2>
</div>

<!-- Esto es lo nuevo que estoy armando -->
<div id="concursos" class="container">
    <div class="row">
        <div class="col-xs-10" style="">
            <div class="panel panel-default list-group-panel">
                <div class="panel-body">

                    <ul class="list-group list-group-header">
                        <li class="list-group-item list-group-body">
                            <div class="row">
                                <div class="col-xs-3 text-left">Carrera</div>
                                <div class="col-xs-3">Materia</div>
                                <div class="col-xs-2">Fecha de concurso</div>
                                <div class="col-xs-2">Ganador</div>
	                        <div class="col-xs-2">Acciones</div>
                            </div>
                        </li>
                    </ul>

                    <ul class="list-group list-group-body" style="">
		        <?php foreach ($contests as $contest): ?>
			<li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-3 text-left" style=" "><a> <?= h($contest->carrera) ?></a></div>
                                <div class="col-xs-3" style=""><?= h($contest->materia) ?></div>
                                <div class="col-xs-2" style=""><?= h($contest->fecha) ?></div>
                                <div class="col-xs-2" style=""><?= h($contest->ganador) ?></div>
				<div class="col-xs-2" style="">
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $contest->id]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $contest->id], ['confirm' => __('Está seguro de que quiere borrar "{0}"?', $contest->materia)]) ?>

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
