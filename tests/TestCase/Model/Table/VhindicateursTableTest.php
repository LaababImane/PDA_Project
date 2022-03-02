<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VhindicateursTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VhindicateursTable Test Case
 */
class VhindicateursTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VhindicateursTable
     */
    protected $Vhindicateurs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Vhindicateurs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Vhindicateurs') ? [] : ['className' => VhindicateursTable::class];
        $this->Vhindicateurs = $this->getTableLocator()->get('Vhindicateurs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Vhindicateurs);

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
