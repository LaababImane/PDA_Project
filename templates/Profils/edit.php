<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profil $profil
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Profils'), ['action' => 'index'], ['class' => 'button']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profils form content">
            <?= $this->Form->create($profil, ['type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Edit Profil') ?></legend>
                <?php
                    echo $this->Form->control('Nom');
                    echo $this->Form->control('change_image', ['type' => 'file']);
                    echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
