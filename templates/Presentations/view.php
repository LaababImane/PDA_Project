<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Presentation $presentation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Presentations'), ['action' => 'index'], ['class' => 'button']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="presentations view content">
            <table>
                <tr>
                    <th><?= __('Désignation') ?></th>
                    <td><?= h($presentation->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fichier') ?></th>
                    <td><?=  $this->Html->link('Télécharger', '../files/'
                   . $presentation->Fichier,['class'=>'link',  'download' => true, 'title'=>'Download', 'escape' => false]); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
