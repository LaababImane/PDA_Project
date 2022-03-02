<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profil $profil
 */
?>
<br>
<br>
<div class="row">
    <aside class="column">
        <div class="side-nav">    
            <?= $this->Html->link(__('List Profils'), ['action' => 'index'], ['class' => 'button']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profils view content">
            <table>
                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($profil->Nom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= @$this->Html->image($profil->image, ['style' => 'max-width:40px;height:40px;']) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($profil->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($profil->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
