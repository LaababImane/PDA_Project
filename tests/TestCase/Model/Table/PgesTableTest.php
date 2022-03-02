<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PgesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PgesTable Test Case
 */
class PgesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PgesTable
     */
    protected $Pges;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Pges',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pges') ? [] : ['className' => PgesTable::class];
        $this->Pges = $this->getTableLocator()->get('Pges', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Pges);

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
