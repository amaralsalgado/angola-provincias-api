<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // the test client sends "Accept-Language: en-us,en" by default, unlike most real API clients
        $this->withServerVariables(['HTTP_ACCEPT_LANGUAGE' => '']);
    }
}
