<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BanqueProjet[]|\Cake\Collection\CollectionInterface $banqueProjet
 */
?>
<div class="banqueProjet index content">
    <?= $this->Html->link(__('New Banque Projet'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Banque Projet') ?></h3>
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
                <?php foreach ($banqueProjet as $banqueProjet): ?>
                <tr>
                    <td><?= $this->Number->format($banqueProjet->id) ?></td>
                    <td><?= h($banqueProjet->Designation) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $banqueProjet->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $banqueProjet->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $banqueProjet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banqueProjet->id)]) ?>
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
