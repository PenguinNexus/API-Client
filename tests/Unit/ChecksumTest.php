<?php

namespace Tests\Unit;

use Tests\TestCase;

class ChecksumTest extends TestCase
{
    /**
     * @throws \Http\Client\Exception
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasADLL()
    {
        $version = $this->version();

        $this->assertIsString($version->getATSMPChecksum()->getDLL());
    }

    /**
     * @throws \Http\Client\Exception
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     */
    public function testItHasAnADB()
    {
        $version = $this->version();

        $this->assertIsString($version->getATSMPChecksum()->getADB());
    }
}
