<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AppelProjetTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AppelProjetTable Test Case
 */
class AppelProjetTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AppelProjetTable
     */
    protected $AppelProjet;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.AppelProjet',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('AppelProjet') ? [] : ['className' => AppelProjetTable::class];
        $this->AppelProjet = $this->getTableLocator()->get('AppelProjet', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->AppelProjet);

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
