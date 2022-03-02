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
        <div class="presentations form content">
            <?= $this->Form->create($presentation, array('type' => 'file')) ?>
            <fieldset>
                <legend><?= __('Add Presentation') ?></legend>
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
