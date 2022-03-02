<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BanqueProjetTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BanqueProjetTable Test Case
 */
class BanqueProjetTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BanqueProjetTable
     */
    protected $BanqueProjet;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.BanqueProjet',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BanqueProjet') ? [] : ['className' => BanqueProjetTable::class];
        $this->BanqueProjet = $this->getTableLocator()->get('BanqueProjet', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->BanqueProjet);

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
