<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rapport $rapport
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rapport->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rapport->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Rapports'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rapports form content">
            <?= $this->Form->create($rapport) ?>
            <fieldset>
                <legend><?= __('Edit Rapport') ?></legend>
                <?php
                    echo $this->Form->control('Designation');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
