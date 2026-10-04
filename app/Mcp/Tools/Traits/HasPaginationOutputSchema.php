<?php

namespace App\Mcp\Tools\Traits;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\JsonSchema\Types\Type;

trait HasPaginationOutputSchema
{
    /**
     * Build the output schema for a paginator's "pagination" metadata block.
     */
    protected function paginationOutputSchema(JsonSchema $schema): Type
    {
        return $schema->object([
            'current_page' => $schema->integer()
                ->description('The current page number.'),
            'next_page' => $schema->integer()
                ->nullable()
                ->description('The next page number, or null if this is the last page.'),
            'prev_page' => $schema->integer()
                ->nullable()
                ->description('The previous page number, or null if this is the first page.'),
            'last_page' => $schema->integer()
                ->description('The last page number available.'),
            'per_page' => $schema->integer()
                ->description('The number of items returned per page.'),
            'total' => $schema->integer()
                ->description('The total number of items across all pages.'),
        ])->description('Pagination metadata.');
    }
}
