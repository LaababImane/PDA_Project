<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<br>
<div class="users index content">
    <?= $this->Html->link(__('Ajouter'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Utilisateurs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Nom & Prenom') ?></th>
                    <th><?= $this->Paginator->sort('login') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('Phone') ?></th>
                    <th><?= $this->Paginator->sort('profile') ?></th>
                    <th><?= $this->Paginator->sort('société') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= h($user->Nom) , ' ',h($user->Prenom)?></td>
                    <td><?= h($user->login) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->Phone) ?></td>
                    <td><?= h($user->profile) ?></td>
                    <td><?= h($user->société) ?></td>
                    <td class="actions">
                    <?= $this->Html->link($this->Html->image("view.png",array("alt" => "alt-tag", 'class' => 'view-img')), ['action' => 'view', $user->id], array('escape' => false)); ?>
                        <?= $this->Html->link($this->Html->image("edit.png",array("alt" => "alt-tag", 'class' => 'edit-img')), ['action' => 'edit', $user->id], array('escape' => false)); ?>
                        <?= $this->Form->postLink($this->Html->image("delete.png",array("alt" => "alt-tag", 'class' => 'delete-img')), ['action' => 'delete', $user->id], array('escape' => false), ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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