<?php

namespace App\Mcp\Tools\Traits;

use Laravel\Mcp\Response;
use Laravel\Mcp\ResponseFactory;

trait ReturnsStructuredResponse
{
    /**
     * Structured content plus the same JSON in a text block, for clients that ignore structuredContent.
     *
     * @param  array<string, mixed>  $data
     */
    protected function structuredResponse(string $description, array $data): ResponseFactory
    {
        return Response::make([
            Response::text($description),
            Response::json($data),
        ])->withStructuredContent($data);
    }
}
