<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdministrationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdministrationsTable Test Case
 */
class AdministrationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AdministrationsTable
     */
    protected $Administrations;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Administrations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Administrations') ? [] : ['className' => AdministrationsTable::class];
        $this->Administrations = $this->getTableLocator()->get('Administrations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Administrations);

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
