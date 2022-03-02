<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profil[]|\Cake\Collection\CollectionInterface $profils
 */
?>
<br>
<br>
<div class="profils index content">
    <?= $this->Html->link(__('Ajouter'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Profiles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Nom') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($profils as $profil): ?>
                <tr>
                    <td><?= h($profil->Nom) ?></td>
                    <td><?= @$this->Html->image($profil->image, ['style' => 'max-width:40px;height:40px;']) ?></td>
                    <td class="actions">
                        <?= $this->Html->link($this->Html->image("view.png",array("alt" => "alt-tag", 'class' => 'view-img')),['action' => 'view', $profil->id], array('escape' => false)) ?>
                        <?= $this->Html->link($this->Html->image("edit.png",array("alt" => "alt-tag", 'class' => 'edit-img')), ['action' => 'edit', $profil->id], array('escape' => false)) ?>
                        <?= $this->Form->postLink($this->Html->image("delete.png",array("alt" => "alt-tag", 'class' => 'delete-img')), ['action' => 'delete', $profil->id], array('escape' => false), ['confirm' => __('Are you sure you want to delete # {0}?', $profil->id)]) ?>
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
    </div>
</div>

<style>
.edit-img{
    max-width:37px;
    height:37px;
}
.view-img{
    max-width:37px;
    height:37px;
}
.delete-img{
    max-width:37px;
    height:37px;
}
    </style>