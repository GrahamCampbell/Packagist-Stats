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

namespace GrahamCampbell\PackagistStats\Presenters;

use ArrayIterator;
use Countable;
use IteratorAggregate;

/**
 * This is the packages presenter class.
 *
 * @author Graham Campbell <hello@gjcampbell.co.uk>
 */
final class PackagesPresenter implements Countable, IteratorAggregate
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
