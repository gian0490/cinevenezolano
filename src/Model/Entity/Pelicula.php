<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pelicula Entity
 *
 * @property int $id
 * @property int $trailer_id
 * @property string $pel_titulo
 * @property \Cake\I18n\Time $pel_ano
 * @property string $pel_sinopsis
 * @property float $pel_recaudo_estreno
 * @property float $pel_recaudo_acumulado
 * @property float $pel_espectadoresestreno
 * @property float $pel_espectadores_acumulado
 * @property string $pel_ruta_ima_captura
 * @property string $pel_ruta_ima_poster
 * @property string $pel_ruta_pelicula
 * @property string $pel_mostrar
 *
 * @property \App\Model\Entity\Trailer[] $trailers
 * @property \App\Model\Entity\Crictica[] $cricticas
 * @property \App\Model\Entity\FichasTecnica[] $fichas_tecnicas
 * @property \App\Model\Entity\Financiamiento[] $financiamientos
 * @property \App\Model\Entity\Locacione[] $locaciones
 * @property \App\Model\Entity\Reparto[] $repartos
 * @property \App\Model\Entity\Genero[] $generos
 * @property \App\Model\Entity\Referencia[] $referencias
 * @property \App\Model\Entity\Tematica[] $tematicas
 */
class Pelicula extends Entity
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
