<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PeliculasReferenciasFixture
 *
 */
class PeliculasReferenciasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'pelicula_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'referencia_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pel_ref_mostrar' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_pelicula_pelicula_referenci' => ['type' => 'index', 'columns' => ['pelicula_id'], 'length' => []],
            'fk_referencia_pelicula_referenci' => ['type' => 'index', 'columns' => ['referencia_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_referencia_pelicula_referenci' => ['type' => 'foreign', 'columns' => ['referencia_id'], 'references' => ['referencias', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_pelicula_pelicula_referenci' => ['type' => 'foreign', 'columns' => ['pelicula_id'], 'references' => ['peliculas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'referencia_id' => 1,
            'id' => 1,
            'pel_ref_mostrar' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
