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
            <?= $this->Html->link(__('List Vhindicateurs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vhindicateurs form content">
            <?= $this->Form->create($vhindicateur) ?>
            <fieldset>
                <legend><?= __('Add Vhindicateur') ?></legend>
                <?php
                    echo $this->Form->control('Designation');
                    echo $this->Form->control('Actif');
                    echo $this->Form->control('DateArchivage');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
