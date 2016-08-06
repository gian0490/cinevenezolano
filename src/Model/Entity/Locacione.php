<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Locacione Entity
 *
 * @property int $lugar_id
 * @property int $pelicula_id
 * @property int $id
 * @property string $log_mostrar
 *
 * @property \App\Model\Entity\Lugare $lugare
 * @property \App\Model\Entity\Pelicula $pelicula
 */
class Locacione extends Entity
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
