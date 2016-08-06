<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FinanciamientosFixture
 *
 */
class FinanciamientosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'pelicula_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'instituto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fin_monto' => ['type' => 'decimal', 'length' => 10, 'precision' => 0, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'fin_mostrar' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_instituto_finaciamien' => ['type' => 'index', 'columns' => ['instituto_id'], 'length' => []],
            'fk_pelicula_financiamien' => ['type' => 'index', 'columns' => ['pelicula_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_pelicula_financiamien' => ['type' => 'foreign', 'columns' => ['pelicula_id'], 'references' => ['peliculas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_instituto_finaciamien' => ['type' => 'foreign', 'columns' => ['instituto_id'], 'references' => ['institutos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'instituto_id' => 1,
            'id' => 1,
            'fin_monto' => 1.5,
            'fin_mostrar' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
