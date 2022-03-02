<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadreLogique $cadreLogique
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cadre Logique'), ['action' => 'edit', $cadreLogique->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cadre Logique'), ['action' => 'delete', $cadreLogique->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadreLogique->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cadre Logique'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cadre Logique'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cadreLogique view content">
            <h3><?= h($cadreLogique->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($cadreLogique->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($cadreLogique->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
