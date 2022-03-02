<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administration $administration
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Administrations'), ['action' => 'index'], ['class' => 'button']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="administrations view content">
            <table>
                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($administration->Nom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adresse') ?></th>
                    <td><?= h($administration->Adresse) ?></td>
                </tr>
                <tr>
                    <th><?= __('Telephone') ?></th>
                    <td><?= $this->Number->format($administration->Telephone) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
