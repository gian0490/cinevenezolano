<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FinanciamientosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FinanciamientosTable Test Case
 */
class FinanciamientosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FinanciamientosTable
     */
    public $Financiamientos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.financiamientos',
        'app.peliculas',
        'app.institutos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Financiamientos') ? [] : ['className' => 'App\Model\Table\FinanciamientosTable'];
        $this->Financiamientos = TableRegistry::get('Financiamientos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Financiamientos);

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
