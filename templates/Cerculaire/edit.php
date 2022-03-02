<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cerculaire $cerculaire
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Circulaire'), ['action' => 'index'], ['class' => 'button']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cerculaire form content">
            <?= $this->Form->create($cerculaire, array('type' => 'file')) ?>
            <fieldset>
                <legend><?= __('Editer Circulaire') ?></legend>
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
