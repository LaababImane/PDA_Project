<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReseauDistribution $reseauDistribution
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Reseau Distribution'), ['action' => 'edit', $reseauDistribution->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Reseau Distribution'), ['action' => 'delete', $reseauDistribution->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reseauDistribution->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Reseau Distribution'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Reseau Distribution'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reseauDistribution view content">
            <h3><?= h($reseauDistribution->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($reseauDistribution->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($reseauDistribution->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
