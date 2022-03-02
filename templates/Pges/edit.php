<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pge $pge
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pge->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pge->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pges'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pges form content">
            <?= $this->Form->create($pge) ?>
            <fieldset>
                <legend><?= __('Edit Pge') ?></legend>
                <?php
                    echo $this->Form->control('Designation');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
