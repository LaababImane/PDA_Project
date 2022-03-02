<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AppelProjet $appelProjet
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $appelProjet->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $appelProjet->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Appel Projet'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="appelProjet form content">
            <?= $this->Form->create($appelProjet) ?>
            <fieldset>
                <legend><?= __('Edit Appel Projet') ?></legend>
                <?php
                    echo $this->Form->control('Designation');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
