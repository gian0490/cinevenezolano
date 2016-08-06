<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reparto Entity
 *
 * @property int $persona_id
 * @property int $pelicula_id
 * @property int $id
 * @property string $rep_personaje
 * @property string $rep_mostrar
 *
 * @property \App\Model\Entity\Persona $persona
 * @property \App\Model\Entity\Pelicula $pelicula
 */
class Reparto extends Entity
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
