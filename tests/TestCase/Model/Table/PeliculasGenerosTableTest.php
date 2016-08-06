<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeliculasGenerosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeliculasGenerosTable Test Case
 */
class PeliculasGenerosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeliculasGenerosTable
     */
    public $PeliculasGeneros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.peliculas_generos',
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
        'app.peliculas_referencias',
        'app.tematicas',
        'app.peliculas_tematicas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PeliculasGeneros') ? [] : ['className' => 'App\Model\Table\PeliculasGenerosTable'];
        $this->PeliculasGeneros = TableRegistry::get('PeliculasGeneros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PeliculasGeneros);

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
