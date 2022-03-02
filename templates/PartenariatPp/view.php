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
            <?= $this->Html->link(__('Edit Partenariat Pp'), ['action' => 'edit', $partenariatPp->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Partenariat Pp'), ['action' => 'delete', $partenariatPp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partenariatPp->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Partenariat Pp'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Partenariat Pp'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="partenariatPp view content">
            <h3><?= h($partenariatPp->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($partenariatPp->Designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($partenariatPp->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
