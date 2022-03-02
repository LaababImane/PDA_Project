<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autorisation $autorisation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Autorisation'), ['action' => 'edit', $autorisation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Autorisation'), ['action' => 'delete', $autorisation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $autorisation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Autorisations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Autorisation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="autorisations view content">
            <h3><?= h($autorisation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($autorisation->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($autorisation->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
