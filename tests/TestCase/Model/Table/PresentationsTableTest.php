<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PresentationsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PresentationsTable Test Case
 */
class PresentationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PresentationsTable
     */
    protected $Presentations;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Presentations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Presentations') ? [] : ['className' => PresentationsTable::class];
        $this->Presentations = $this->getTableLocator()->get('Presentations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Presentations);

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
