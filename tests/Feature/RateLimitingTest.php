<?php

namespace Tests\Feature;

use Illuminate\Http\Response;
use Tests\TestCase;

class RateLimitingTest extends TestCase
{
    private const ENDPOINT = '/api/v1/angola';

    private const LIMIT = 60;

    private function requestFrom(string $ip)
    {
        return $this->withServerVariables(['REMOTE_ADDR' => $ip])->getJson(self::ENDPOINT);
    }

    public function test_requests_within_the_limit_are_allowed_and_expose_rate_limit_headers()
    {
        $response = $this->requestFrom('10.0.0.1');

        $response->assertOk()
            ->assertHeader('X-RateLimit-Limit', self::LIMIT)
            ->assertHeader('X-RateLimit-Remaining', self::LIMIT - 1);
    }

    public function test_exceeding_the_limit_returns_a_json_429_response()
    {
        $ip = '10.0.0.2';

        for ($i = 0; $i < self::LIMIT; $i++) {
            $this->requestFrom($ip)->assertOk();
        }

        $response = $this->requestFrom($ip);

        $response->assertStatus(Response::HTTP_TOO_MANY_REQUESTS)
            ->assertHeader('X-RateLimit-Limit', self::LIMIT)
            ->assertHeader('X-RateLimit-Remaining', 0)
            ->assertJson([
                'success' => false,
                'code' => Response::HTTP_TOO_MANY_REQUESTS,
                'data' => [],
            ]);
    }

    public function test_rate_limit_is_scoped_per_ip()
    {
        $limitedIp = '10.0.0.3';
        $otherIp = '10.0.0.4';

        for ($i = 0; $i < self::LIMIT; $i++) {
            $this->requestFrom($limitedIp)->assertOk();
        }

        $this->requestFrom($limitedIp)->assertStatus(Response::HTTP_TOO_MANY_REQUESTS);

        $this->requestFrom($otherIp)
            ->assertOk()
            ->assertHeader('X-RateLimit-Remaining', self::LIMIT - 1);
    }
}
