<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstitutosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstitutosTable Test Case
 */
class InstitutosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InstitutosTable
     */
    public $Institutos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.institutos',
        'app.financiamientos',
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
        $config = TableRegistry::exists('Institutos') ? [] : ['className' => 'App\Model\Table\InstitutosTable'];
        $this->Institutos = TableRegistry::get('Institutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Institutos);

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
