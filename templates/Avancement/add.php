<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avancement $avancement
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Avancement'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="avancement form content">
        <?= $this->Form->create($avancement, array('type' => 'file')) ?>
            <fieldset>
                <legend><?= __('Add Avancement') ?></legend>
                <?php
                    echo $this->Form->control('Designation');
                    echo $this->Form->control('Fichier',['type' => 'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
