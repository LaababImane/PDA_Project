<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RehabilitationPalmeraiesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RehabilitationPalmeraiesTable Test Case
 */
class RehabilitationPalmeraiesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RehabilitationPalmeraiesTable
     */
    protected $RehabilitationPalmeraies;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.RehabilitationPalmeraies',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('RehabilitationPalmeraies') ? [] : ['className' => RehabilitationPalmeraiesTable::class];
        $this->RehabilitationPalmeraies = $this->getTableLocator()->get('RehabilitationPalmeraies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->RehabilitationPalmeraies);

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
