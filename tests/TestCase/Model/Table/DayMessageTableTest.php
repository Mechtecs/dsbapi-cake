<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DayMessageTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DayMessageTable Test Case
 */
class DayMessageTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DayMessageTable
     */
    public $DayMessage;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.day_message'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DayMessage') ? [] : ['className' => 'App\Model\Table\DayMessageTable'];
        $this->DayMessage = TableRegistry::get('DayMessage', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DayMessage);

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
