<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cerculaire $cerculaire
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cerculaire'), ['action' => 'edit', $cerculaire->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cerculaire'), ['action' => 'delete', $cerculaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cerculaire->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cerculaire'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cerculaire'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cerculaire view content">
            <h3><?= h($cerculaire->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($cerculaire->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cerculaire->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
