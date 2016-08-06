<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TematicasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TematicasTable Test Case
 */
class TematicasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TematicasTable
     */
    public $Tematicas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tematicas',
        'app.peliculas',
        'app.trailers',
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
        $config = TableRegistry::exists('Tematicas') ? [] : ['className' => 'App\Model\Table\TematicasTable'];
        $this->Tematicas = TableRegistry::get('Tematicas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tematicas);

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
