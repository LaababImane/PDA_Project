<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AppuiPromoteurTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AppuiPromoteurTable Test Case
 */
class AppuiPromoteurTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AppuiPromoteurTable
     */
    protected $AppuiPromoteur;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.AppuiPromoteur',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AppuiPromoteur') ? [] : ['className' => AppuiPromoteurTable::class];
        $this->AppuiPromoteur = $this->getTableLocator()->get('AppuiPromoteur', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AppuiPromoteur);

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
