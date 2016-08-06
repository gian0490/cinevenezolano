<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Genero Entity
 *
 * @property int $id
 * @property string $gen_nombre
 * @property string $gen_mostrar
 *
 * @property \App\Model\Entity\Pelicula[] $peliculas
 */
class Genero extends Entity
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
