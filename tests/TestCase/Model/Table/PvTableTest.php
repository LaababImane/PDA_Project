<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PvTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PvTable Test Case
 */
class PvTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PvTable
     */
    protected $Pv;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Pv',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pv') ? [] : ['className' => PvTable::class];
        $this->Pv = $this->getTableLocator()->get('Pv', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Pv);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
