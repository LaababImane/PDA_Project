<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Indicateur Entity
 *
 * @property int $id
 * @property string $Nom_indicateur
 * @property string $Designation
 * @property string $Administrations
 * @property string $Contribution
 * @property string $responsable
 */
class Indicateur extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'Nom_indicateur' => true,
        'Designation' => true,
        'Administrations' => true,
        'Contribution' => true,
        'responsable' => true,
    ];
}
