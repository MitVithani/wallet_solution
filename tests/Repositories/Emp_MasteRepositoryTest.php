<?php namespace Tests\Repositories;

use App\Models\Emp_Maste;
use App\Repositories\Emp_MasteRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class Emp_MasteRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var Emp_MasteRepository
     */
    protected $empMasteRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->empMasteRepo = \App::make(Emp_MasteRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_emp__maste()
    {
        $empMaste = Emp_Maste::factory()->make()->toArray();

        $createdEmp_Maste = $this->empMasteRepo->create($empMaste);

        $createdEmp_Maste = $createdEmp_Maste->toArray();
        $this->assertArrayHasKey('id', $createdEmp_Maste);
        $this->assertNotNull($createdEmp_Maste['id'], 'Created Emp_Maste must have id specified');
        $this->assertNotNull(Emp_Maste::find($createdEmp_Maste['id']), 'Emp_Maste with given id must be in DB');
        $this->assertModelData($empMaste, $createdEmp_Maste);
    }

    /**
     * @test read
     */
    public function test_read_emp__maste()
    {
        $empMaste = Emp_Maste::factory()->create();

        $dbEmp_Maste = $this->empMasteRepo->find($empMaste->id);

        $dbEmp_Maste = $dbEmp_Maste->toArray();
        $this->assertModelData($empMaste->toArray(), $dbEmp_Maste);
    }

    /**
     * @test update
     */
    public function test_update_emp__maste()
    {
        $empMaste = Emp_Maste::factory()->create();
        $fakeEmp_Maste = Emp_Maste::factory()->make()->toArray();

        $updatedEmp_Maste = $this->empMasteRepo->update($fakeEmp_Maste, $empMaste->id);

        $this->assertModelData($fakeEmp_Maste, $updatedEmp_Maste->toArray());
        $dbEmp_Maste = $this->empMasteRepo->find($empMaste->id);
        $this->assertModelData($fakeEmp_Maste, $dbEmp_Maste->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_emp__maste()
    {
        $empMaste = Emp_Maste::factory()->create();

        $resp = $this->empMasteRepo->delete($empMaste->id);

        $this->assertTrue($resp);
        $this->assertNull(Emp_Maste::find($empMaste->id), 'Emp_Maste should not exist in DB');
    }
}
