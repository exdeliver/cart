<?php

namespace Exdeliver\Cart\Tests\Unit\Services;

use Exdeliver\Cart\Domain\Services\WaveformService;
use Exdeliver\Cart\Tests\TestCase;

class WaveformServiceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        /** @var WaveformService $waveformService */
        $waveformService = app(WaveformService::class);

        $this->assertTrue(true);
    }
}
