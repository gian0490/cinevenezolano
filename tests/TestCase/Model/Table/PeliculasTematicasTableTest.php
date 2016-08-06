<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeliculasTematicasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeliculasTematicasTable Test Case
 */
class PeliculasTematicasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeliculasTematicasTable
     */
    public $PeliculasTematicas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.peliculas_tematicas',
        'app.peliculas',
        'app.trailers',
        'app.cricticas',
        'app.referencias',
        'app.referencias_cricticas',
        'app.fichas_tecnicas',
        'app.personas',
        'app.casas_productoras',
        'app.guiones',
        'app.financiamientos',
        'app.institutos',
        'app.locaciones',
        'app.lugares',
        'app.repartos',
        'app.generos',
        'app.peliculas_generos',
        'app.peliculas_referencias',
        'app.tematicas',
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
        $config = TableRegistry::exists('PeliculasTematicas') ? [] : ['className' => 'App\Model\Table\PeliculasTematicasTable'];
        $this->PeliculasTematicas = TableRegistry::get('PeliculasTematicas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PeliculasTematicas);

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
