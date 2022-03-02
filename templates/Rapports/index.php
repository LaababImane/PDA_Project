<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rapport[]|\Cake\Collection\CollectionInterface $rapports
 */
?>
<div class="rapports index content">
    <?= $this->Html->link(__('New Rapport'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rapports') ?></h3>
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
                <?php foreach ($rapports as $rapport): ?>
                <tr>
                    <td><?= $this->Number->format($rapport->id) ?></td>
                    <td><?= h($rapport->Designation) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rapport->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rapport->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rapport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rapport->id)]) ?>
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
