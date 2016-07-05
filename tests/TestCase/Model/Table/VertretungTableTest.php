<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VertretungTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VertretungTable Test Case
 */
class VertretungTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VertretungTable
     */
    public $Vertretung;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vertretung'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Vertretung') ? [] : ['className' => 'App\Model\Table\VertretungTable'];
        $this->Vertretung = TableRegistry::get('Vertretung', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vertretung);

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
