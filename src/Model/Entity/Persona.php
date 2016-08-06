<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Persona Entity
 *
 * @property int $id
 * @property string $per_primer_nombre
 * @property string $per_segundo_nombre
 * @property string $per_primer_apellido
 * @property string $per_segundo_apellido
 * @property string $per_sexo
 * @property \Cake\I18n\Time $per_fecha_nac
 * @property \Cake\I18n\Time $per_fecha_falle
 * @property string $per_ruta_foto
 * @property string $per_biografia
 * @property string $per_mostrar
 *
 * @property \App\Model\Entity\FichasTecnica[] $fichas_tecnicas
 * @property \App\Model\Entity\Reparto[] $repartos
 */
class Persona extends Entity
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
