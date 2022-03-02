<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autorisation[]|\Cake\Collection\CollectionInterface $autorisations
 */
?>
<div class="autorisations index content">
    <?= $this->Html->link(__('New Autorisation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Autorisations') ?></h3>
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
                <?php foreach ($autorisations as $autorisation): ?>
                <tr>
                    <td><?= $this->Number->format($autorisation->id) ?></td>
                    <td><?= h($autorisation->Designation) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $autorisation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $autorisation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $autorisation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $autorisation->id)]) ?>
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
