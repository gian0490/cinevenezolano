<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Crictica Entity
 *
 * @property int $id
 * @property int $pelicula_id
 * @property string $cri_descripcion
 * @property string $cri_mostrar
 *
 * @property \App\Model\Entity\Pelicula $pelicula
 * @property \App\Model\Entity\Referencia[] $referencias
 */
class Crictica extends Entity
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
