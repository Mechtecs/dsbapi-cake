<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KlasseTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KlasseTable Test Case
 */
class KlasseTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KlasseTable
     */
    public $Klasse;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.klasse'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Klasse') ? [] : ['className' => 'App\Model\Table\KlasseTable'];
        $this->Klasse = TableRegistry::get('Klasse', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Klasse);

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
