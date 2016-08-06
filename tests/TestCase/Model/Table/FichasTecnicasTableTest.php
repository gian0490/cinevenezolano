<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FichasTecnicasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FichasTecnicasTable Test Case
 */
class FichasTecnicasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FichasTecnicasTable
     */
    public $FichasTecnicas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fichas_tecnicas',
        'app.peliculas',
        'app.personas',
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
        $config = TableRegistry::exists('FichasTecnicas') ? [] : ['className' => 'App\Model\Table\FichasTecnicasTable'];
        $this->FichasTecnicas = TableRegistry::get('FichasTecnicas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FichasTecnicas);

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
