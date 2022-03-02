<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CerculaireTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CerculaireTable Test Case
 */
class CerculaireTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CerculaireTable
     */
    protected $Cerculaire;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Cerculaire',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cerculaire') ? [] : ['className' => CerculaireTable::class];
        $this->Cerculaire = $this->getTableLocator()->get('Cerculaire', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Cerculaire);

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
