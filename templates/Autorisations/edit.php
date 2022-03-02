<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autorisation $autorisation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $autorisation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $autorisation->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Autorisations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="autorisations form content">
            <?= $this->Form->create($autorisation) ?>
            <fieldset>
                <legend><?= __('Edit Autorisation') ?></legend>
                <?php
                    echo $this->Form->control('Designation');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
