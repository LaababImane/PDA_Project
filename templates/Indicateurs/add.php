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
        <div class="indicateurs form content">
            <?= $this->Form->create($indicateur) ?>
            <fieldset>
                <legend><?= __('Add Indicateur') ?></legend>
                <?php
                    echo $this->Form->control('Nom_indicateur');
                    echo $this->Form->control('Designation');
                    echo $this->Form->control('Administrations', 
                    [
                        'type' => 'select',
                        'multiple' => 'checkbox', 
                        'options' => [' ANDZOA',' ABH-GZR',' ORMVA-TF']
                    ]);
                   
                    echo $this->Form->control('Contribution');
                ?>
              
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
