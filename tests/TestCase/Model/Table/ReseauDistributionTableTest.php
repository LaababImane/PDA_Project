<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReseauDistributionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReseauDistributionTable Test Case
 */
class ReseauDistributionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ReseauDistributionTable
     */
    protected $ReseauDistribution;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ReseauDistribution',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ReseauDistribution') ? [] : ['className' => ReseauDistributionTable::class];
        $this->ReseauDistribution = $this->getTableLocator()->get('ReseauDistribution', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ReseauDistribution);

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
