<?php namespace Tests\Repositories;

use App\Models\employee_master;
use App\Repositories\employee_masterRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class employee_masterRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var employee_masterRepository
     */
    protected $employeeMasterRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->employeeMasterRepo = \App::make(employee_masterRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_employee_master()
    {
        $employeeMaster = employee_master::factory()->make()->toArray();

        $createdemployee_master = $this->employeeMasterRepo->create($employeeMaster);

        $createdemployee_master = $createdemployee_master->toArray();
        $this->assertArrayHasKey('id', $createdemployee_master);
        $this->assertNotNull($createdemployee_master['id'], 'Created employee_master must have id specified');
        $this->assertNotNull(employee_master::find($createdemployee_master['id']), 'employee_master with given id must be in DB');
        $this->assertModelData($employeeMaster, $createdemployee_master);
    }

    /**
     * @test read
     */
    public function test_read_employee_master()
    {
        $employeeMaster = employee_master::factory()->create();

        $dbemployee_master = $this->employeeMasterRepo->find($employeeMaster->id);

        $dbemployee_master = $dbemployee_master->toArray();
        $this->assertModelData($employeeMaster->toArray(), $dbemployee_master);
    }

    /**
     * @test update
     */
    public function test_update_employee_master()
    {
        $employeeMaster = employee_master::factory()->create();
        $fakeemployee_master = employee_master::factory()->make()->toArray();

        $updatedemployee_master = $this->employeeMasterRepo->update($fakeemployee_master, $employeeMaster->id);

        $this->assertModelData($fakeemployee_master, $updatedemployee_master->toArray());
        $dbemployee_master = $this->employeeMasterRepo->find($employeeMaster->id);
        $this->assertModelData($fakeemployee_master, $dbemployee_master->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_employee_master()
    {
        $employeeMaster = employee_master::factory()->create();

        $resp = $this->employeeMasterRepo->delete($employeeMaster->id);

        $this->assertTrue($resp);
        $this->assertNull(employee_master::find($employeeMaster->id), 'employee_master should not exist in DB');
    }
}
