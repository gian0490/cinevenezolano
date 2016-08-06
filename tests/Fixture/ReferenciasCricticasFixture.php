<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReferenciasCricticasFixture
 *
 */
class ReferenciasCricticasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'crictica_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'referencia_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ref_cri_mostrar' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_crictica_refere_critic' => ['type' => 'index', 'columns' => ['crictica_id'], 'length' => []],
            'fk_referecia_referen_critic' => ['type' => 'index', 'columns' => ['referencia_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_referecia_referen_critic' => ['type' => 'foreign', 'columns' => ['referencia_id'], 'references' => ['referencias', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_crictica_refere_critic' => ['type' => 'foreign', 'columns' => ['crictica_id'], 'references' => ['cricticas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'crictica_id' => 1,
            'referencia_id' => 1,
            'id' => 1,
            'ref_cri_mostrar' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
