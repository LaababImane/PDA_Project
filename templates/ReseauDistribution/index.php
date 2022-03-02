<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReseauDistribution[]|\Cake\Collection\CollectionInterface $reseauDistribution
 */
?>
<div class="reseauDistribution index content">
    <?= $this->Html->link(__('Ajouter'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Réseau Distribution') ?></h3>
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
                <?php foreach ($reseauDistribution as $reseauDistribution): ?>
                <tr>
                    <td><?= h($reseauDistribution->Designation) ?></td>
                    <td><?= $this->Html->link('Télécharger', '../files/'
                   . $reseauDistribution->Fichier,['class'=>'link',  'download' => true, 'title'=>'Download', 'escape' => false]); ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $reseauDistribution->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reseauDistribution->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reseauDistribution->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reseauDistribution->id)]) ?>
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
