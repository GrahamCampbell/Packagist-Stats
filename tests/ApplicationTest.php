<?php

declare(strict_types=1);

/*
 * This file is part of Packagist Stats.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Tests\PackagistStats;

use GrahamCampbell\PackagistStats\Console\Application;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application as SymfonyApplication;

class ApplicationTest extends TestCase
{
    public function testCreateApplication()
    {
        $app = new Application();

        $this->assertInstanceOf(SymfonyApplication::class, $app);
        $this->assertSame('Packagist Stats', $app->getName());
    }
}
