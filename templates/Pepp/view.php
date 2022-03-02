<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pepp $pepp
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Pepp'), ['action' => 'edit', $pepp->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Pepp'), ['action' => 'delete', $pepp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pepp->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Pepp'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Pepp'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pepp view content">
            <h3><?= h($pepp->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($pepp->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($pepp->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
