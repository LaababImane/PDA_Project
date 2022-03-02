<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Indicateur[]|\Cake\Collection\CollectionInterface $indicateurs
 * @var \App\Model\Entity\Indicateur $indicateur
 */

 $responsables = array("Administrateur", "Chef de Projet", "Comité de Pilotage");
?>
<div class="indicateurs index content">
    <?= $this->Html->link(__('Ajouter'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Indicateurs') ?></h3>
    <div class="table-responsive">
    <?= $this->Form->create(null, ['url' => ['action' => 'deleteAll']]) ?>
        <button>Delete All</button>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th><?= $this->Paginator->sort('Nom_indicateur') ?></th>
                    <th><?= $this->Paginator->sort('Designation') ?></th>
                    <th><?= $this->Paginator->sort('Administrations') ?></th>
                    <th><?= $this->Paginator->sort('Contribution') ?></th>
                    <th><?= $this->Paginator->sort('responsable') ?></th>
                    <th><?= $this->Paginator->sort('Valeurs') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($indicateurs as $indicateur): ?>
                <tr>
                    <td><?= $this->Form->checkbox('ids[]', ['value' => $indicateur->id]) ?></td>
                    <td><?= h($indicateur->Nom_indicateur) ?></td>
                    <td><?= h($indicateur->Designation) ?></td>
                    <td><?= h($indicateur->Administrations) ?></td>
                    <td><?= h($indicateur->Contribution) ?></td>
                    <td>
                    <?php echo $this->Form->create($indicateur, ['url' => ['action' => 'edit', $indicateur->id], "name" => "indicateur".h($indicateur->id)]); ?>
                    <select id="resp" name="responsable" onchange="document.getElementById('indicateur<?= $indicateur->id ?>').hidden = false">
                    <option id="<?= h($indicateur->id) ?>" value="<?= h($indicateur->id) ?>" selected><?= h($indicateur->responsable) ?></option>
                    <?php foreach($responsables as $value): ?>
                    <?php if(h($indicateur->responsable) != $value): ?>
                    <option id="<?= $value ?>" value="<?= $value ?>"><?= $value ?></option>
                    <?php endif; endforeach ?>
                    </select>
                    <button id="indicateur<?= $indicateur->id ?>" type="button" class="btn btn-info" onclick="var form = document.getElementsByName('indicateur<?= $indicateur->id ?>');form[0].submit()" hidden>Valider</button>
                    </td>
                    <td>
                    <?php echo $this->Form->create($indicateur, ['url' => ['action' => 'edit', $indicateur->id], "name" => "Vindicateur".h($indicateur->id)]); ?>
                    <input id="VHistoriques<?= $indicateur->id ?>" onmouseover="document.getElementById('VHistoriques<?= $indicateur->id ?>').disabled = false" value="<?= h($indicateur->Valeur) ?>" name="Valeur" style="border: 0px"></input>
                    <input value="<?= h($indicateur->VHistoriques) ?>" name="VHistoriques" style="width: 0px; border: 0px" hidden></input>
                    <button id="indicateur<?= $indicateur->id ?>" type="button" class="btn btn-info" onclick="var form = document.getElementsByName('Vindicateur<?= $indicateur->id ?>');form[0].submit()" hidden>Valider</button>
                    </td>
                    <td class="actions">
                        <?= $this->Html->link($this->Html->image("view.png",array("alt" => "alt-tag", 'class' => 'view-img')),['action' => 'view', $indicateur->id], array('escape' => false)) ?>
                        <?= $this->Html->link($this->Html->image("edit.png",array("alt" => "alt-tag", 'class' => 'edit-img')), ['action' => 'edit', $indicateur->id], array('escape' => false)) ?>
                        <?= $this->Form->postLink($this->Html->image("delete.png",array("alt" => "alt-tag", 'class' => 'delete-img')), ['action' => 'delete', $indicateur->id], array('escape' => false), ['confirm' => __('Are you sure you want to delete # {0}?', $indicateur->id)]) ?>
                    </td>
                    <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
        <?= $this->Form->end() ?>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

<style>
.edit-img{
    max-width:37px;
    height:37px;
}
.view-img{
    max-width:37px;
    height:37px;
}
.delete-img{
    max-width:37px;
    height:37px;
}
    </style>