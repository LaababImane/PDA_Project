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
            <?= $this->Html->link(__('List Contrat Location'), ['action' => 'index'], ['class' => 'button']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contratLocation form content">
            <?= $this->Form->create($contratLocation, array('type' => 'file')) ?>
            <fieldset>
                <legend><?= __('Add Contrat Location') ?></legend>
                <?php
                    echo $this->Form->control('Designation');
                    echo $this->Form->control('Fichier',['type' => 'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
