<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PartenariatPp $partenariatPp
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Partenariat Pp'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="partenariatPp form content">
            <?= $this->Form->create($partenariatPp) ?>
            <fieldset>
                <legend><?= __('Add Partenariat Pp') ?></legend>
                <?php
                    echo $this->Form->control('Designation');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
