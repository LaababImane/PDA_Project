<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IndicateursTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IndicateursTable Test Case
 */
class IndicateursTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IndicateursTable
     */
    protected $Indicateurs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Indicateurs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Indicateurs') ? [] : ['className' => IndicateursTable::class];
        $this->Indicateurs = $this->getTableLocator()->get('Indicateurs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Indicateurs);

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
