<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfilsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfilsTable Test Case
 */
class ProfilsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfilsTable
     */
    protected $Profils;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Profils',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Profils') ? [] : ['className' => ProfilsTable::class];
        $this->Profils = $this->getTableLocator()->get('Profils', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Profils);

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
