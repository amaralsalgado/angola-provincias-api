<?php

namespace App\Mcp\Tools\Traits;

use App\Exceptions\ResourceNotFoundException;
use Illuminate\Support\Facades\Log;
use Laravel\Mcp\Response;
use Laravel\Mcp\ResponseFactory;

trait HandlesErrors
{
    /**
     * Runs the lookup. A missing record or any other failure becomes an error response the client can read.
     *
     * @param  callable(): (ResponseFactory|Response)  $callback
     * @param  string  $subject  What the tool retrieves, e.g. "province": it is used in the log and in the message.
     */
    protected function respondWith(callable $callback, string $subject): ResponseFactory|Response
    {
        try {
            return $callback();
        } catch (ResourceNotFoundException $e) {
            return Response::error($e->translatedMessage());
        } catch (\Exception $e) {
            Log::error("MCP - Error retrieving {$subject}: ".$e->getMessage(), ['exception' => $e]);

            return Response::error("Failed to retrieve {$subject}.");
        }
    }
}
