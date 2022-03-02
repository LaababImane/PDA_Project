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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rehabilitationPalmeraie->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rehabilitationPalmeraie->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Rehabilitation Palmeraies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rehabilitationPalmeraies form content">
            <?= $this->Form->create($rehabilitationPalmeraie) ?>
            <fieldset>
                <legend><?= __('Edit Rehabilitation Palmeraie') ?></legend>
                <?php
                    echo $this->Form->control('Designation');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
