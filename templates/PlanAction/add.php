<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlanAction $planAction
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Plan Action'), ['action' => 'index'], ['class' => 'button']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="planAction form content">
            <?= $this->Form->create($planAction, array('type' => 'file')) ?>
            <fieldset>
                <legend><?= __('Add Plan Action') ?></legend>
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
