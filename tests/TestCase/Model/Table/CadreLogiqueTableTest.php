<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CadreLogiqueTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CadreLogiqueTable Test Case
 */
class CadreLogiqueTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CadreLogiqueTable
     */
    protected $CadreLogique;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.CadreLogique',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CadreLogique') ? [] : ['className' => CadreLogiqueTable::class];
        $this->CadreLogique = $this->getTableLocator()->get('CadreLogique', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CadreLogique);

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
