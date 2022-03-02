<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContratLocationTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContratLocationTable Test Case
 */
class ContratLocationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContratLocationTable
     */
    protected $ContratLocation;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ContratLocation',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ContratLocation') ? [] : ['className' => ContratLocationTable::class];
        $this->ContratLocation = $this->getTableLocator()->get('ContratLocation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ContratLocation);

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
