<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GuionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GuionesTable Test Case
 */
class GuionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GuionesTable
     */
    public $Guiones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Guiones') ? [] : ['className' => 'App\Model\Table\GuionesTable'];
        $this->Guiones = TableRegistry::get('Guiones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Guiones);

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
