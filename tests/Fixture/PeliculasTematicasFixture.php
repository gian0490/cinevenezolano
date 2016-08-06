<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PeliculasTematicasFixture
 *
 */
class PeliculasTematicasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'pelicula_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tematica_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pel_tem_id' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_pelicula_pel_te' => ['type' => 'index', 'columns' => ['pelicula_id'], 'length' => []],
            'fk_tematica_pel_ge' => ['type' => 'index', 'columns' => ['tematica_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_tematica_pel_ge' => ['type' => 'foreign', 'columns' => ['tematica_id'], 'references' => ['tematicas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_pelicula_pel_te' => ['type' => 'foreign', 'columns' => ['pelicula_id'], 'references' => ['peliculas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'tematica_id' => 1,
            'id' => 1,
            'pel_tem_id' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
