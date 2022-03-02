<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Auea $auea
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $auea->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $auea->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Auea'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="auea form content">
            <?= $this->Form->create($auea) ?>
            <fieldset>
                <legend><?= __('Edit Auea') ?></legend>
                <?php
                    echo $this->Form->control('Designation');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
