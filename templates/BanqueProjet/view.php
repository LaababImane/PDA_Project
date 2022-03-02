<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BanqueProjet $banqueProjet
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Banque Projet'), ['action' => 'edit', $banqueProjet->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Banque Projet'), ['action' => 'delete', $banqueProjet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banqueProjet->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Banque Projet'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Banque Projet'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="banqueProjet view content">
            <h3><?= h($banqueProjet->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($banqueProjet->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($banqueProjet->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
