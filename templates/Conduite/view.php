<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conduite $conduite
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Conduite'), ['action' => 'edit', $conduite->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Conduite'), ['action' => 'delete', $conduite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conduite->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conduite'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Conduite'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conduite view content">
            <h3><?= h($conduite->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($conduite->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($conduite->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
