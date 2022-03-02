<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vhindicateur $vhindicateur
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Vhindicateur'), ['action' => 'edit', $vhindicateur->Id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Vhindicateur'), ['action' => 'delete', $vhindicateur->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $vhindicateur->Id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Vhindicateurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Vhindicateur'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vhindicateurs view content">
            <h3><?= h($vhindicateur->Id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($vhindicateur->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($vhindicateur->Id) ?></td>
                </tr>
                <tr>
                    <th><?= __('DateArchivage') ?></th>
                    <td><?= h($vhindicateur->DateArchivage) ?></td>
                </tr>
                <tr>
                    <th><?= __('Actif') ?></th>
                    <td><?= $vhindicateur->Actif ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
