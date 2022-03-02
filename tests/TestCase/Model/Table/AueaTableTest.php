<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AueaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AueaTable Test Case
 */
class AueaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AueaTable
     */
    protected $Auea;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Auea',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Auea') ? [] : ['className' => AueaTable::class];
        $this->Auea = $this->getTableLocator()->get('Auea', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Auea);

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
