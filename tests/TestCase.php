<?php

namespace Exdeliver\Cart\Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\RefreshDatabaseState;
use Illuminate\Foundation\Testing\TestCase as IlluminateFoundationTestCase;
use Tests\CreatesApplication;

/**
 * Class TestCase.
 */
abstract class TestCase extends IlluminateFoundationTestCase
{
    use CreatesApplication;
    use RefreshDatabase;

    /**
     * Starts every test method.
     */
    public function setUp()
    {
        parent::setUp();

        $this->beginDatabaseTransaction();
    }

    /**
     * Refresh a conventional test database.
     */
    protected function refreshTestDatabase()
    {
        $this->artisan('migrate:fresh', ['--seed' => true]);
        $this->app[Kernel::class]->setArtisan(null);

        RefreshDatabaseState::$migrated = true;

        $this->beginDatabaseTransaction();
    }
}
