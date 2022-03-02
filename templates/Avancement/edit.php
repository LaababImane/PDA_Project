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
            <?= $this->Html->link(__('List Avancement'), ['action' => 'index'], ['class' => 'button']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="avancement form content">
        <?= $this->Form->create($avancement, array('type' => 'file')) ?>
            <fieldset>
                <legend><?= __('Edit Avancement') ?></legend>
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
