<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RehabilitationPalmeraie $rehabilitationPalmeraie
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Rehabilitation Palmeraie'), ['action' => 'edit', $rehabilitationPalmeraie->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rehabilitation Palmeraie'), ['action' => 'delete', $rehabilitationPalmeraie->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rehabilitationPalmeraie->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rehabilitation Palmeraies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rehabilitation Palmeraie'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rehabilitationPalmeraies view content">
            <h3><?= h($rehabilitationPalmeraie->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($rehabilitationPalmeraie->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($rehabilitationPalmeraie->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
