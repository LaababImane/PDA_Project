<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Indicateur $indicateur
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Indicateurs'), ['action' => 'index'], ['class' => 'button']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="indicateurs view content">
            <table>
                <tr>
                    <th><?= __('Nom Indicateur') ?></th>
                    <td><?= h($indicateur->Nom_indicateur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($indicateur->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Administrations') ?></th>
                    <td><?= h($indicateur->Administrations) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contribution') ?></th>
                    <td><?= h($indicateur->Contribution) ?></td>
                </tr>
                <tr>
                    <th><?= __('Responsable') ?></th>
                    <td><?= h($indicateur->responsable) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
