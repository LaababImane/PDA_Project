<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlanActionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlanActionTable Test Case
 */
class PlanActionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PlanActionTable
     */
    protected $PlanAction;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PlanAction',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PlanAction') ? [] : ['className' => PlanActionTable::class];
        $this->PlanAction = $this->getTableLocator()->get('PlanAction', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PlanAction);

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
