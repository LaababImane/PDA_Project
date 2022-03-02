<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlanDevOasi[]|\Cake\Collection\CollectionInterface $planDevOasis
 */
?>
<div class="planDevOasis index content">
    <?= $this->Html->link(__('New Plan Dev Oasi'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Plan Dev Oasis') ?></h3>
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
                <?php foreach ($planDevOasis as $planDevOasi): ?>
                <tr>
                    <td><?= $this->Number->format($planDevOasi->id) ?></td>
                    <td><?= h($planDevOasi->Designation) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $planDevOasi->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $planDevOasi->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $planDevOasi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $planDevOasi->id)]) ?>
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
