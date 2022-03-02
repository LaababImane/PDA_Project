<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContratLocation $contratLocation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Contrat Location'), ['action' => 'edit', $contratLocation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Contrat Location'), ['action' => 'delete', $contratLocation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contratLocation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Contrat Location'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Contrat Location'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contratLocation view content">
            <h3><?= h($contratLocation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($contratLocation->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($contratLocation->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
