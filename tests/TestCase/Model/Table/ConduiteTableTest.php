<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConduiteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConduiteTable Test Case
 */
class ConduiteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConduiteTable
     */
    protected $Conduite;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Conduite',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Conduite') ? [] : ['className' => ConduiteTable::class];
        $this->Conduite = $this->getTableLocator()->get('Conduite', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Conduite);

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
