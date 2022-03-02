<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AppelProjet $appelProjet
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Appel Projet'), ['action' => 'edit', $appelProjet->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Appel Projet'), ['action' => 'delete', $appelProjet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appelProjet->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Appel Projet'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Appel Projet'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="appelProjet view content">
            <h3><?= h($appelProjet->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($appelProjet->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($appelProjet->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
