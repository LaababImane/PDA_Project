<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContratLocation $contratLocation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contratLocation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contratLocation->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Contrat Location'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="contratLocation form content">
            <?= $this->Form->create($contratLocation) ?>
            <fieldset>
                <legend><?= __('Edit Contrat Location') ?></legend>
                <?php
                    echo $this->Form->control('Designation');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
