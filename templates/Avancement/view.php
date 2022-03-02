<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avancement $avancement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Avancement'), ['action' => 'index'], ['class' => 'button']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="avancement view content">
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($avancement->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fichier') ?></th>
                    <td><?= h($avancement->Fichier) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
