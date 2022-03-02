<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadreLogique[]|\Cake\Collection\CollectionInterface $cadreLogique
 */
?>
<div class="cadreLogique index content">
    <?= $this->Html->link(__('New Cadre Logique'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cadre Logique') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('Designation') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cadreLogique as $cadreLogique): ?>
                <tr>
                    <td><?= $this->Number->format($cadreLogique->id) ?></td>
                    <td><?= h($cadreLogique->Designation) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $cadreLogique->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cadreLogique->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cadreLogique->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadreLogique->id)]) ?>
                    </td>
                </tr>
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
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
