<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlanDevOasi $planDevOasi
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Plan Dev Oasis'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="planDevOasis form content">
            <?= $this->Form->create($planDevOasi) ?>
            <fieldset>
                <legend><?= __('Add Plan Dev Oasi') ?></legend>
                <?php
                    echo $this->Form->control('Designation');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
