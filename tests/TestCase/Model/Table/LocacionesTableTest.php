<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LocacionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LocacionesTable Test Case
 */
class LocacionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LocacionesTable
     */
    public $Locaciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.locaciones',
        'app.lugares',
        'app.peliculas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Locaciones') ? [] : ['className' => 'App\Model\Table\LocacionesTable'];
        $this->Locaciones = TableRegistry::get('Locaciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Locaciones);

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
