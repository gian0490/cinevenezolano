<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrailersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrailersTable Test Case
 */
class TrailersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TrailersTable
     */
    public $Trailers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.trailers',
        'app.peliculas',
        'app.cricticas',
        'app.referencias',
        'app.peliculas_referencias',
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
        $config = TableRegistry::exists('Trailers') ? [] : ['className' => 'App\Model\Table\TrailersTable'];
        $this->Trailers = TableRegistry::get('Trailers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Trailers);

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
