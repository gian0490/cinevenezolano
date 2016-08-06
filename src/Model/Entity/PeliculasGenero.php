<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PeliculasGenero Entity
 *
 * @property int $pelicula_id
 * @property int $genero_id
 * @property int $id
 * @property string $pel_gen_mostrar
 *
 * @property \App\Model\Entity\Pelicula $pelicula
 * @property \App\Model\Entity\Genero $genero
 */
class PeliculasGenero extends Entity
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
