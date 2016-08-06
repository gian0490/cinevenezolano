<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FichasTecnicasFixture
 *
 */
class FichasTecnicasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'pelicula_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'persona_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'casa_productora_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_cargo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fic_tec_mostrar' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_casa_product_ficha_tecn' => ['type' => 'index', 'columns' => ['casa_productora_id'], 'length' => []],
            'fk_pelicula_fichatecnic' => ['type' => 'index', 'columns' => ['pelicula_id'], 'length' => []],
            'fk_persona_ficha_tecni' => ['type' => 'index', 'columns' => ['persona_id'], 'length' => []],
            'fk_tipo_cargo_ficha_tecnic' => ['type' => 'index', 'columns' => ['tipo_cargo_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_tipo_cargo_ficha_tecnic' => ['type' => 'foreign', 'columns' => ['tipo_cargo_id'], 'references' => ['guiones', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_casa_product_ficha_tecn' => ['type' => 'foreign', 'columns' => ['casa_productora_id'], 'references' => ['casas_productoras', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_pelicula_fichatecnic' => ['type' => 'foreign', 'columns' => ['pelicula_id'], 'references' => ['peliculas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_persona_ficha_tecni' => ['type' => 'foreign', 'columns' => ['persona_id'], 'references' => ['personas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'pelicula_id' => 1,
            'id' => 1,
            'persona_id' => 1,
            'casa_productora_id' => 1,
            'tipo_cargo_id' => 1,
            'fic_tec_mostrar' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
