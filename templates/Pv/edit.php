<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pv $pv
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pv->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pv->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Pv'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pv form content">
            <?= $this->Form->create($pv) ?>
            <fieldset>
                <legend><?= __('Edit Pv') ?></legend>
                <?php
                    echo $this->Form->control('Designation');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
