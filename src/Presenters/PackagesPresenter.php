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

namespace GrahamCampbell\PackagistStats\Presenters;

use ArrayIterator;
use Countable;
use IteratorAggregate;

/**
 * This is the packages presenter class.
 *
 * @author    Graham Campbell <graham@mineuk.com>
 * @copyright 2014 Graham Campbell
 * @license   <https://github.com/GrahamCampbell/Packagist-Stats/blob/master/LICENSE.md> MIT
 */
class PackagesPresenter implements Countable, IteratorAggregate
{
    /**
     * The array of packages.
     *
     * @var array
     */
    protected $packages;

    /**
     * Create a new packages presenter instance.
     *
     * @param array $packages
     *
     * @return void
     */
    public function __construct(array $packages)
    {
        $this->packages = $packages;
    }

    /**
     * Get the all time total downloads.
     *
     * @return int
     */
    public function getAllTimeTotal()
    {
        $downloads = 0;

        foreach ($this->packages as $package) {
            $downloads += $package->getDownloads()->getTotal();
        }

        return $downloads;
    }

    /**
     * Get the total monthly downloads.
     *
     * @return int
     */
    public function getMonthlyTotal()
    {
        $downloads = 0;

        foreach ($this->packages as $package) {
            $downloads += $package->getDownloads()->getMonthly();
        }

        return $downloads;
    }

    /**
     * Get the total number of packages.
     *
     * @return int
     */
    public function count()
    {
        return count($this->packages);
    }

    /**
     * Get an iterator for the packages.
     *
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new ArrayIterator($this->packages);
    }
}
