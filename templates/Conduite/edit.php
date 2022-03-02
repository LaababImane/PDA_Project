<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conduite $conduite
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Conduite'), ['action' => 'index'], ['class' => 'button']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conduite form content">
            <?= $this->Form->create($conduite, array('type' => 'file')) ?>
            <fieldset>
                <legend><?= __('Edit Conduite') ?></legend>
                <?php
                    echo $this->Form->control('Designation');
                    echo $this->Form->control('change_pdf', ['type' => 'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
