<?php
namespace Tests\Traits;
use Illuminate\Http\Response;
use Illuminate\Testing\TestResponse;

trait AssertsApiResponses
{

    public function assertApiOkResponse(TestResponse $response, array $dataStructure, string $message = 'Sucesso')
    {

        $response->assertStatus(Response::HTTP_OK)->assertJsonStructure([
            'data' => $dataStructure
        ])->assertJson([
                'success' => true,
                'code' => Response::HTTP_OK,
                'message' => $message,
        ]);
    }

    public function assertApiNotFoundResponse(TestResponse $response, string $message = 'Recurso não encontrado')
    {

        $response->assertStatus(Response::HTTP_NOT_FOUND)->assertExactJson([
            'success' => false,
            'code' => Response::HTTP_NOT_FOUND,
            'message' => $message,
            'data' => []
        ]);
    }
}
