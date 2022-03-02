<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Indicateur[]|\Cake\Collection\CollectionInterface $indicateurs
 * @var \App\Model\Entity\Indicateur $indicateur
 */

 $responsables = array("Administrateur", "Chef de Projet", "Comité de Pilotage");
?>
<div class="indicateurs index content">
    <h3><?= __('Indicateurs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Nom_indicateur') ?></th>
                    <th><?= $this->Paginator->sort('Designation') ?></th>
                    <th><?= $this->Paginator->sort('Administrations') ?></th>
                    <th><?= $this->Paginator->sort('Contribution') ?></th>
                    <th><?= $this->Paginator->sort('responsable') ?></th>
                    <th><?= $this->Paginator->sort('Valeurs') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php for ($i=0; $i < count(json_decode($res1)); $i++): ?>
                <?php if(json_decode($res1)[$i]->responsable == "Comité de Pilotage"): ?>
                <tr>
                    <td><?= json_decode($res1)[$i]->Nom_indicateur ?></td>
                    <td><?= json_decode($res1)[$i]->Designation ?></td>
                    <td><?= json_decode($res1)[$i]->Administrations ?></td>
                    <td><?= json_decode($res1)[$i]->Contribution ?></td>
                    <td><?= json_decode($res1)[$i]->responsable ?></td>
                    <td><?= json_decode($res1)[$i]->Valeur ?>%</td>
                   <?php endif; ?>
                   <?php endfor; ?>
                </tr>
            </tbody>
        </table>
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