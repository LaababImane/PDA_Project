<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vhindicateur[]|\Cake\Collection\CollectionInterface $vhindicateurs
 */
?>
<div class="vhindicateurs index content">
    <?= $this->Html->link(__('New Vhindicateur'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Vhindicateurs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id') ?></th>
                    <th><?= $this->Paginator->sort('Designation') ?></th>
                    <th><?= $this->Paginator->sort('Actif') ?></th>
                    <th><?= $this->Paginator->sort('DateArchivage') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vhindicateurs as $vhindicateur): ?>
                <tr>
                    <td><?= $this->Number->format($vhindicateur->Id) ?></td>
                    <td><?= h($vhindicateur->Designation) ?></td>
                    <td><?= h($vhindicateur->Actif) ?></td>
                    <td><?= h($vhindicateur->DateArchivage) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $vhindicateur->Id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vhindicateur->Id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vhindicateur->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $vhindicateur->Id)]) ?>
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
