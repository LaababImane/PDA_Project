<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<br>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'button']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <table>
                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($user->Nom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prenom') ?></th>
                    <td><?= h($user->Prenom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Login') ?></th>
                    <td><?= h($user->login) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Profile') ?></th>
                    <td><?= h($user->profile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Société') ?></th>
                    <td><?= h($user->société) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
