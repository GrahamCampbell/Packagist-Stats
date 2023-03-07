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

namespace GrahamCampbell\PackagistStats;

use Packagist\Api\Client as Packagist;

/**
 * This is the client class.
 *
 * @author Graham Campbell <hello@gjcampbell.co.uk>
 */
final class Client
{
    /**
     * The packagist client instance.
     *
     * @var \Packagist\Api\Client
     */
    private Packagist $packagist;

    /**
     * Create a new client instance.
     *
     * @param \Packagist\Api\Client $packagist
     *
     * @return void
     */
    public function __construct(Packagist $packagist)
    {
        $this->packagist = $packagist;
    }

    /**
     * Get the aggregated information from packagist.
     *
     * Please pass an array of vendors or package names, or a single vendor or
     * package name to this method.
     *
     * @param string[]|string $vendors
     *
     * @return array
     */
    public function packages($vendors): array
    {
        $packages = [];

        foreach ((array) $vendors as $vendor) {
            if (strpos($vendor, '/') !== false) {
                $packages[] = $this->packagist->get($vendor);
            } else {
                foreach ($this->packagist->all(compact('vendor')) as $result) {
                    $packages[] = $this->packagist->get($result);
                }
            }
        }

        return $packages;
    }
}
