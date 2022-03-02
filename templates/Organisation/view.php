<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organisation $organisation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Organisation'), ['action' => 'index'], ['class' => 'button']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="organisation view content">
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($organisation->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fichier') ?></th>
                    <td><?= $this->Html->link('Télécharger', '../files/'
                   . $organisation->Fichier,['class'=>'link',  'download' => true, 'title'=>'Download', 'escape' => false]); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
