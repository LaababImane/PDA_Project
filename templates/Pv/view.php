<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pv $pv
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pv'), ['action' => 'edit', $pv->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pv'), ['action' => 'delete', $pv->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pv->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pv'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pv'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pv view content">
            <h3><?= h($pv->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($pv->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pv->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
