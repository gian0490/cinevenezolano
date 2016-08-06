<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lugare Entity
 *
 * @property int $id
 * @property int $lugar_id
 * @property string $lug_tipo
 * @property string $lug_nombre
 * @property string $lug_mostrar
 *
 * @property \App\Model\Entity\Lugare $lugare
 */
class Lugare extends Entity
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
