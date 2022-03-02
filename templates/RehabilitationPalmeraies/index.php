<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RehabilitationPalmeraie[]|\Cake\Collection\CollectionInterface $rehabilitationPalmeraies
 */
?>
<div class="rehabilitationPalmeraies index content">
    <?= $this->Html->link(__('New Rehabilitation Palmeraie'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rehabilitation Palmeraies') ?></h3>
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
                <?php foreach ($rehabilitationPalmeraies as $rehabilitationPalmeraie): ?>
                <tr>
                    <td><?= $this->Number->format($rehabilitationPalmeraie->id) ?></td>
                    <td><?= h($rehabilitationPalmeraie->Designation) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rehabilitationPalmeraie->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rehabilitationPalmeraie->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rehabilitationPalmeraie->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rehabilitationPalmeraie->id)]) ?>
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
