<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RehabilitationPalmeraie $rehabilitationPalmeraie
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Rehabilitation Palmeraies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rehabilitationPalmeraies form content">
            <?= $this->Form->create($rehabilitationPalmeraie) ?>
            <fieldset>
                <legend><?= __('Add Rehabilitation Palmeraie') ?></legend>
                <?php
                    echo $this->Form->control('Designation');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
