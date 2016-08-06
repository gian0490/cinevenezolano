<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ReferenciasCrictica Entity
 *
 * @property int $crictica_id
 * @property int $referencia_id
 * @property int $id
 * @property string $ref_cri_mostrar
 *
 * @property \App\Model\Entity\Crictica $crictica
 * @property \App\Model\Entity\Referencia $referencia
 */
class ReferenciasCrictica extends Entity
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
        '*' => true,
        'id' => false
    ];
}
