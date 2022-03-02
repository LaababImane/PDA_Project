<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AppuiPromoteur[]|\Cake\Collection\CollectionInterface $appuiPromoteur
 */
?>
<div class="appuiPromoteur index content">
    <?= $this->Html->link(__('New Appui Promoteur'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Appui Promoteur') ?></h3>
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
                <?php foreach ($appuiPromoteur as $appuiPromoteur): ?>
                <tr>
                    <td><?= $this->Number->format($appuiPromoteur->id) ?></td>
                    <td><?= h($appuiPromoteur->Designation) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $appuiPromoteur->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $appuiPromoteur->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appuiPromoteur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appuiPromoteur->id)]) ?>
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
