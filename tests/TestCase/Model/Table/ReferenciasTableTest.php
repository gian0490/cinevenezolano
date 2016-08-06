<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReferenciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReferenciasTable Test Case
 */
class ReferenciasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReferenciasTable
     */
    public $Referencias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.referencias',
        'app.peliculas',
        'app.trailers',
        'app.cricticas',
        'app.referencias_cricticas',
        'app.fichas_tecnicas',
        'app.personas',
        'app.repartos',
        'app.casas_productoras',
        'app.guiones',
        'app.financiamientos',
        'app.institutos',
        'app.locaciones',
        'app.lugares',
        'app.generos',
        'app.peliculas_generos',
        'app.peliculas_referencias',
        'app.tematicas',
        'app.peliculas_tematicas',
        'app.pel_tems'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Referencias') ? [] : ['className' => 'App\Model\Table\ReferenciasTable'];
        $this->Referencias = TableRegistry::get('Referencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Referencias);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
