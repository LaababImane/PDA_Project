<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AppelProjet[]|\Cake\Collection\CollectionInterface $appelProjet
 */
?>
<div class="appelProjet index content">
    <?= $this->Html->link(__('New Appel Projet'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Appel Projet') ?></h3>
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
                <?php foreach ($appelProjet as $appelProjet): ?>
                <tr>
                    <td><?= $this->Number->format($appelProjet->id) ?></td>
                    <td><?= h($appelProjet->Designation) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $appelProjet->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $appelProjet->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appelProjet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appelProjet->id)]) ?>
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
