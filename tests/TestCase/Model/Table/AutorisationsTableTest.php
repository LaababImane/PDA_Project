<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AutorisationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AutorisationsTable Test Case
 */
class AutorisationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AutorisationsTable
     */
    protected $Autorisations;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Autorisations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Autorisations') ? [] : ['className' => AutorisationsTable::class];
        $this->Autorisations = $this->getTableLocator()->get('Autorisations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Autorisations);

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
