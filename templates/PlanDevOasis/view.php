<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlanDevOasi $planDevOasi
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Plan Dev Oasi'), ['action' => 'edit', $planDevOasi->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Plan Dev Oasi'), ['action' => 'delete', $planDevOasi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $planDevOasi->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Plan Dev Oasis'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Plan Dev Oasi'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="planDevOasis view content">
            <h3><?= h($planDevOasi->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($planDevOasi->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($planDevOasi->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
