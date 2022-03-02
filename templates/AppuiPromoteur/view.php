<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AppuiPromoteur $appuiPromoteur
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Appui Promoteur'), ['action' => 'edit', $appuiPromoteur->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Appui Promoteur'), ['action' => 'delete', $appuiPromoteur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appuiPromoteur->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Appui Promoteur'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Appui Promoteur'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="appuiPromoteur view content">
            <h3><?= h($appuiPromoteur->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($appuiPromoteur->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($appuiPromoteur->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
