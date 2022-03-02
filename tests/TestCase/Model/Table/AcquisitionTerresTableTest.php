<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AcquisitionTerresTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AcquisitionTerresTable Test Case
 */
class AcquisitionTerresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AcquisitionTerresTable
     */
    protected $AcquisitionTerres;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.AcquisitionTerres',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AcquisitionTerres') ? [] : ['className' => AcquisitionTerresTable::class];
        $this->AcquisitionTerres = $this->getTableLocator()->get('AcquisitionTerres', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AcquisitionTerres);

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
