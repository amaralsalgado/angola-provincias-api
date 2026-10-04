<?php

use App\Mcp\Servers\AngolaProvincesServer;
use Laravel\Mcp\Facades\Mcp;

Mcp::web('/mcp/angola-provinces', AngolaProvincesServer::class)->middleware(['throttle:mcp']);
