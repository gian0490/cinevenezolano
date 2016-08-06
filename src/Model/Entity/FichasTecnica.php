<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FichasTecnica Entity
 *
 * @property int $pelicula_id
 * @property int $id
 * @property int $persona_id
 * @property int $casa_productora_id
 * @property int $tipo_cargo_id
 * @property string $fic_tec_mostrar
 *
 * @property \App\Model\Entity\Pelicula $pelicula
 * @property \App\Model\Entity\Persona $persona
 * @property \App\Model\Entity\CasasProductora $casas_productora
 * @property \App\Model\Entity\Guione $guione
 */
class FichasTecnica extends Entity
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
