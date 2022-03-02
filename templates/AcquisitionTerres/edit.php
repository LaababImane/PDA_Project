<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AcquisitionTerre $acquisitionTerre
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $acquisitionTerre->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $acquisitionTerre->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Acquisition Terres'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="acquisitionTerres form content">
            <?= $this->Form->create($acquisitionTerre) ?>
            <fieldset>
                <legend><?= __('Edit Acquisition Terre') ?></legend>
                <?php
                    echo $this->Form->control('Designation');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
