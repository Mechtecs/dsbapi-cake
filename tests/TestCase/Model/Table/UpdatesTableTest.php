<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UpdatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UpdatesTable Test Case
 */
class UpdatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UpdatesTable
     */
    public $Updates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.updates'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Updates') ? [] : ['className' => 'App\Model\Table\UpdatesTable'];
        $this->Updates = TableRegistry::get('Updates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Updates);

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
