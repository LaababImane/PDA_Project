<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PartenariatPpTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PartenariatPpTable Test Case
 */
class PartenariatPpTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PartenariatPpTable
     */
    protected $PartenariatPp;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PartenariatPp',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PartenariatPp') ? [] : ['className' => PartenariatPpTable::class];
        $this->PartenariatPp = $this->getTableLocator()->get('PartenariatPp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PartenariatPp);

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
