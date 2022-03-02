<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pge $pge
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pge'), ['action' => 'edit', $pge->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pge'), ['action' => 'delete', $pge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pge->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pges'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pge'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pges view content">
            <h3><?= h($pge->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($pge->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pge->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
