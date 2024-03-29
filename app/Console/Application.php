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

namespace GrahamCampbell\PackagistStats\Console;

use GrahamCampbell\PackagistStats\Client;
use GrahamCampbell\PackagistStats\Console\Commands\ShowCommand;
use GuzzleHttp\Client as GuzzleClient;
use Packagist\Api\Client as Packagist;
use Symfony\Component\Console\Application as SymfonyApplication;

final class Application extends SymfonyApplication
{
    /**
     * The application name.
     *
     * @var string
     */
    const APP_NAME = 'Packagist Stats';

    /**
     * The application version.
     *
     * @var string
     */
    const APP_VERSION = '6.1.0';

    /**
     * Create a new StyleCI CLI application.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct(self::APP_NAME, self::APP_VERSION);
        $this->add(new ShowCommand(new Client(new Packagist(new GuzzleClient(['connect_timeout' => 10, 'timeout' => 30])))));
    }
}
