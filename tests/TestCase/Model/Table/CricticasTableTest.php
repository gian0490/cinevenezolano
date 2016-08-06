<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CricticasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CricticasTable Test Case
 */
class CricticasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CricticasTable
     */
    public $Cricticas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cricticas',
        'app.peliculas',
        'app.referencias',
        'app.referencias_cricticas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cricticas') ? [] : ['className' => 'App\Model\Table\CricticasTable'];
        $this->Cricticas = TableRegistry::get('Cricticas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cricticas);

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
