<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeppTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeppTable Test Case
 */
class PeppTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PeppTable
     */
    protected $Pepp;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Pepp',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pepp') ? [] : ['className' => PeppTable::class];
        $this->Pepp = $this->getTableLocator()->get('Pepp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Pepp);

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
