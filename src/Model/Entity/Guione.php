<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Guione Entity
 *
 * @property int $id
 * @property string $gui_tipo
 * @property string $gui_obra
 * @property string $gui_autor_obra
 * @property string $tip_car_nombre
 * @property string $tip_car_mostrar
 */
class Guione extends Entity
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
