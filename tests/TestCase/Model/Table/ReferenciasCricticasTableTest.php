<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReferenciasCricticasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReferenciasCricticasTable Test Case
 */
class ReferenciasCricticasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReferenciasCricticasTable
     */
    public $ReferenciasCricticas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.referencias_cricticas',
        'app.cricticas',
        'app.peliculas',
        'app.trailers',
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
        'app.referencias',
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
        $config = TableRegistry::exists('ReferenciasCricticas') ? [] : ['className' => 'App\Model\Table\ReferenciasCricticasTable'];
        $this->ReferenciasCricticas = TableRegistry::get('ReferenciasCricticas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ReferenciasCricticas);

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
