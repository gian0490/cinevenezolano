<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RepartosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RepartosTable Test Case
 */
class RepartosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RepartosTable
     */
    public $Repartos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.repartos',
        'app.personas',
        'app.fichas_tecnicas',
        'app.peliculas',
        'app.trailers',
        'app.cricticas',
        'app.referencias',
        'app.peliculas_referencias',
        'app.referencias_cricticas',
        'app.financiamientos',
        'app.institutos',
        'app.locaciones',
        'app.lugares',
        'app.generos',
        'app.peliculas_generos',
        'app.tematicas',
        'app.peliculas_tematicas',
        'app.pel_tems',
        'app.casas_productoras',
        'app.guiones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Repartos') ? [] : ['className' => 'App\Model\Table\RepartosTable'];
        $this->Repartos = TableRegistry::get('Repartos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Repartos);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
