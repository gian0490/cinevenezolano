<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PeliculasTematicasController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PeliculasTematicasController Test Case
 */
class PeliculasTematicasControllerTest extends IntegrationTestCase
{

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
        'app.peliculas_referencias',
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
        'app.tematicas',
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
