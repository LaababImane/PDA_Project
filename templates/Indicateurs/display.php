<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Indicateur[]|\Cake\Collection\CollectionInterface $indicateurs
 * @var \App\Model\Entity\Indicateur $indicateur
 */


?>
<div class="indicateurs index content">
    <h3><?= __('Indicateurs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Nom_indicateur') ?></th>
                    <th><?= $this->Paginator->sort('Designation') ?></th>
                    <th><?= $this->Paginator->sort('Administrations') ?></th>
                    <th><?= $this->Paginator->sort('Contribution') ?></th>
                    <th><?= $this->Paginator->sort('responsable') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($indicateurs as $indicateur): ?>
                <?php if(h($indicateur->responsable) == "Comité de Pilotage"): ?>
                <tr>
                    <td><?= h($indicateur->Nom_indicateur) ?></td>
                    <td><?= h($indicateur->Designation) ?></td>
                    <td><?= h($indicateur->Administrations) ?></td>
                    <td><?= h($indicateur->Contribution) ?></td>
                    <td><?= h($indicateur->responsable) ?></td>
                </tr>
                <?php endif ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
    </div>
</div>