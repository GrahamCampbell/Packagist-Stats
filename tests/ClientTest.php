<?php

declare(strict_types=1);

/*
 * This file is part of Packagist Stats.
 *
 * (c) Graham Campbell <hello@gjcampbell.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Tests\PackagistStats;

use GrahamCampbell\PackagistStats\Client;
use Packagist\Api\Client as Packagist;
use PHPUnit\Framework\TestCase;
use TypeError;

class ClientTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $packagist = new Packagist();
        $client = new Client($packagist);

        $this->assertInstanceOf(Client::class, $client);
        $this->assertInstanceOf(Packagist::class, $client->getPackagistClient());
    }

    public function testInstantiationRequiresParam()
    {
        $this->expectException(TypeError::class);

        new Client();
    }
}
