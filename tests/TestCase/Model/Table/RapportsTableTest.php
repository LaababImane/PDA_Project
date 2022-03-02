<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RapportsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RapportsTable Test Case
 */
class RapportsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RapportsTable
     */
    protected $Rapports;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Rapports',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Rapports') ? [] : ['className' => RapportsTable::class];
        $this->Rapports = $this->getTableLocator()->get('Rapports', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Rapports);

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
