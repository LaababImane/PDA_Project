<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avancement[]|\Cake\Collection\CollectionInterface $avancement
 */
?>
<div class="avancement index content">
    <?= $this->Html->link(__('New Avancement'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Avancement') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Designation') ?></th>
                    <th><?= $this->Paginator->sort('Fichier') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($avancement as $avancement): ?>
                <tr>
                    <td><?= h($avancement->Designation) ?></td>
                    <td><?= $this->Html->link('Télécharger', '../files/'
                   . $avancement->Fichier,['class'=>'link',  'download' => true, 'title'=>'Download', 'escape' => false]); ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $avancement->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $avancement->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $avancement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avancement->id)]) ?>
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
