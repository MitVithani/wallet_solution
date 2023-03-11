<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\employee_master;

class employee_masterApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_employee_master()
    {
        $employeeMaster = employee_master::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/employee_masters', $employeeMaster
        );

        $this->assertApiResponse($employeeMaster);
    }

    /**
     * @test
     */
    public function test_read_employee_master()
    {
        $employeeMaster = employee_master::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/employee_masters/'.$employeeMaster->id
        );

        $this->assertApiResponse($employeeMaster->toArray());
    }

    /**
     * @test
     */
    public function test_update_employee_master()
    {
        $employeeMaster = employee_master::factory()->create();
        $editedemployee_master = employee_master::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/employee_masters/'.$employeeMaster->id,
            $editedemployee_master
        );

        $this->assertApiResponse($editedemployee_master);
    }

    /**
     * @test
     */
    public function test_delete_employee_master()
    {
        $employeeMaster = employee_master::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/employee_masters/'.$employeeMaster->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/employee_masters/'.$employeeMaster->id
        );

        $this->response->assertStatus(404);
    }
}
