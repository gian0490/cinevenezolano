<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CasasProductorasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CasasProductorasTable Test Case
 */
class CasasProductorasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CasasProductorasTable
     */
    public $CasasProductoras;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.casas_productoras'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CasasProductoras') ? [] : ['className' => 'App\Model\Table\CasasProductorasTable'];
        $this->CasasProductoras = TableRegistry::get('CasasProductoras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CasasProductoras);

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
