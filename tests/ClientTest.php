<?php

/**
 * This file is part of Packagist Stats by Graham Campbell.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace GrahamCampbell\Tests\PackagistStats;

use GrahamCampbell\PackagistStats\Client;
use Mockery;
use Packagist\Api\Client as Packagist;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * This is the client test class.
 *
 * @author    Graham Campbell <graham@cachethq.io>
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
