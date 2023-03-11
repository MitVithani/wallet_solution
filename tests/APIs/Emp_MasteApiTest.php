<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Emp_Maste;

class Emp_MasteApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_emp__maste()
    {
        $empMaste = Emp_Maste::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/emp__mastes', $empMaste
        );

        $this->assertApiResponse($empMaste);
    }

    /**
     * @test
     */
    public function test_read_emp__maste()
    {
        $empMaste = Emp_Maste::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/emp__mastes/'.$empMaste->id
        );

        $this->assertApiResponse($empMaste->toArray());
    }

    /**
     * @test
     */
    public function test_update_emp__maste()
    {
        $empMaste = Emp_Maste::factory()->create();
        $editedEmp_Maste = Emp_Maste::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/emp__mastes/'.$empMaste->id,
            $editedEmp_Maste
        );

        $this->assertApiResponse($editedEmp_Maste);
    }

    /**
     * @test
     */
    public function test_delete_emp__maste()
    {
        $empMaste = Emp_Maste::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/emp__mastes/'.$empMaste->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/emp__mastes/'.$empMaste->id
        );

        $this->response->assertStatus(404);
    }
}
