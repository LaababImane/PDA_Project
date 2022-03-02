<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pge[]|\Cake\Collection\CollectionInterface $pges
 */
?>
<div class="pges index content">
    <?= $this->Html->link(__('New Pge'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Pges') ?></h3>
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
                <?php foreach ($pges as $pge): ?>
                <tr>
                    <td><?= $this->Number->format($pge->id) ?></td>
                    <td><?= h($pge->Designation) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $pge->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pge->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pge->id)]) ?>
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
