<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cerculaire[]|\Cake\Collection\CollectionInterface $cerculaire
 */
?>
<div class="cerculaire index content">
    <?= $this->Html->link(__('Ajouter'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Circulaire') ?></h3>
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
                <?php foreach ($cerculaire as $cerculaire): ?>
                <tr>
                    <td><?= h($cerculaire->Designation) ?></td>
                    <td><?= $this->Html->link('Télécharger', '../files/'
                   . $cerculaire->Fichier,['class'=>'link',  'download' => true, 'title'=>'Download', 'escape' => false]); ?></td>
                    <td class="actions">
                        <?= $this->Html->link($this->Html->image("view.png",array("alt" => "alt-tag", 'class' => 'view-img')),['action' => 'view', $cerculaire->id], array('escape' => false)) ?>
                        <?= $this->Html->link($this->Html->image("edit.png",array("alt" => "alt-tag", 'class' => 'edit-img')), ['action' => 'edit', $cerculaire->id], array('escape' => false)) ?>
                        <?= $this->Form->postLink($this->Html->image("delete.png",array("alt" => "alt-tag", 'class' => 'delete-img')), ['action' => 'delete', $cerculaire->id], array('escape' => false), ['confirm' => __('Are you sure you want to delete # {0}?', $cerculaire->id)]) ?>
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
