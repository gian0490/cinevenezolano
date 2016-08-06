<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TematicasController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TematicasController Test Case
 */
class TematicasControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
