<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlanDevOasisTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlanDevOasisTable Test Case
 */
class PlanDevOasisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PlanDevOasisTable
     */
    protected $PlanDevOasis;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PlanDevOasis',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PlanDevOasis') ? [] : ['className' => PlanDevOasisTable::class];
        $this->PlanDevOasis = $this->getTableLocator()->get('PlanDevOasis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PlanDevOasis);

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
