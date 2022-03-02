<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Auea $auea
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Auea'), ['action' => 'edit', $auea->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Auea'), ['action' => 'delete', $auea->id], ['confirm' => __('Are you sure you want to delete # {0}?', $auea->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Auea'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Auea'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="auea view content">
            <h3><?= h($auea->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($auea->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($auea->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
