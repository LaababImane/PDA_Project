<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AcquisitionTerre $acquisitionTerre
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Acquisition Terre'), ['action' => 'edit', $acquisitionTerre->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Acquisition Terre'), ['action' => 'delete', $acquisitionTerre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $acquisitionTerre->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Acquisition Terres'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Acquisition Terre'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="acquisitionTerres view content">
            <h3><?= h($acquisitionTerre->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($acquisitionTerre->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($acquisitionTerre->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
