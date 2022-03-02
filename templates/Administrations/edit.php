<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administration $administration
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Administrations'), ['action' => 'index'], ['class' => 'button']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="administrations form content">
            <?= $this->Form->create($administration) ?>
            <fieldset>
                <legend><?= __('Edit Administration') ?></legend>
                <?php
                    echo $this->Form->control('Nom');
                    echo $this->Form->control('Adresse');
                    echo $this->Form->control('Telephone');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
