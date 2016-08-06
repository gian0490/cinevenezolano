<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeliculasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeliculasTable Test Case
 */
class PeliculasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeliculasTable
     */
    public $Peliculas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Peliculas') ? [] : ['className' => 'App\Model\Table\PeliculasTable'];
        $this->Peliculas = TableRegistry::get('Peliculas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Peliculas);

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
