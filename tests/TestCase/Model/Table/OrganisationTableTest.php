<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrganisationTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrganisationTable Test Case
 */
class OrganisationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrganisationTable
     */
    protected $Organisation;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Organisation',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Organisation') ? [] : ['className' => OrganisationTable::class];
        $this->Organisation = $this->getTableLocator()->get('Organisation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Organisation);

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
