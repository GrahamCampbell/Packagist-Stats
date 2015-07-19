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
use Mockery;
use Packagist\Api\Client as Packagist;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * This is the client test class.
 *
 * @author    Graham Campbell <graham@alt-three.com>
 * @copyright 2014 Graham Campbell
 * @license   <https://github.com/GrahamCampbell/Packagist-Stats/blob/master/LICENSE.md> MIT
 */
class ClientTest extends TestCase
{
    /**
     * Tear down the test case.
     *
     * @return void
     */
    public function tearDown()
    {
        if ($container = Mockery::getContainer()) {
            $this->addToAssertionCount($container->mockery_getExpectationCount());
        }

        Mockery::close();
    }

    public function testCanBeInstantiated()
    {
        $packagist = new Packagist();
        $client = new Client($packagist);

        $this->assertInstanceOf('GrahamCampbell\PackagistStats\Client', $client);
        $this->assertInstanceOf('Packagist\Api\Client', $client->getPackagistClient());
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testInstantiationRequiresParam()
    {
        if (version_compare(PHP_VERSION, '7.0') > 0) {
            $this->markTestSkipped('PHP 5 is required.');
        }

        $client = new Client();
    }

    /**
     * @expectedException TypeError
     */
    public function testInstantiationRequiresParam()
    {
        if (version_compare(PHP_VERSION, '7.0') < 0) {
            $this->markTestSkipped('PHP 7 is required.');
        }

        $client = new Client();
    }

    public function testSingleString()
    {
        $this->markTestSkipped('TODO');
    }

    public function testArrayOfOne()
    {
        $this->markTestSkipped('TODO');
    }

    public function testArrayOfMany()
    {
        $this->markTestSkipped('TODO');
    }

    protected function getMockedClient()
    {
        $mock = Mockery::mock('Packagist\Api\Client');
    }
}
