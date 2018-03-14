<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contest $contest
 */
?>
<div class="container">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Carrera') ?></th>
            <td><?= h($contest->carrera) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ganador') ?></th>
            <td><?= h($contest->ganador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contest->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($contest->fecha) ?></td>
        </tr>
    </table>
</div>
