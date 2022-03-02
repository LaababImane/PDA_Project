<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlanAction $planAction
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Plan Action'), ['action' => 'edit', $planAction->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Plan Action'), ['action' => 'delete', $planAction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $planAction->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Plan Action'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Plan Action'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="planAction view content">
            <h3><?= h($planAction->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($planAction->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($planAction->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
