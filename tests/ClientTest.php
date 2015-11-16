<?php

/*
 * This file is part of Packagist Stats.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Tests\PackagistStats;

use GrahamCampbell\PackagistStats\Client;
use Packagist\Api\Client as Packagist;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * This is the client test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class ClientTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $packagist = new Packagist();
        $client = new Client($packagist);

        $this->assertInstanceOf(Client::class, $client);
        $this->assertInstanceOf(Packagist::class, $client->getPackagistClient());
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testInstantiationRequiresParamOnPhp5()
    {
        if (PHP_MAJOR_VERSION !== 5) {
            $this->markTestSkipped('PHP 5 is required.');
        }

        new Client();
    }

    /**
     * @expectedException TypeError
     */
    public function testInstantiationRequiresParamOnPhp7()
    {
        if (PHP_MAJOR_VERSION !== 7) {
            $this->markTestSkipped('PHP 7 is required.');
        }

        new Client();
    }
}
