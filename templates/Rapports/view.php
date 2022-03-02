<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rapport $rapport
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rapport'), ['action' => 'edit', $rapport->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rapport'), ['action' => 'delete', $rapport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rapport->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rapports'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rapport'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rapports view content">
            <h3><?= h($rapport->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($rapport->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($rapport->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
