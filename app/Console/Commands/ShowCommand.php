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

namespace GrahamCampbell\PackagistStats\Console\Commands;

use GrahamCampbell\PackagistStats\Client;
use GrahamCampbell\PackagistStats\Presenters\PackagesPresenter;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Helper\TableSeparator;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * This is the show command class.
 *
 * @author Graham Campbell <hello@gjcampbell.co.uk>
 */
final class ShowCommand extends Command
{
    /**
     * The client instance.
     *
     * @var \GrahamCampbell\PackagistStats\Client
     */
    private $client;

    /**
     * Create a new show command instance.
     *
     * @param \GrahamCampbell\PackagistStats\Client $client
     *
     * @return void
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
        parent::__construct();
    }

    /**
     * Configures the command.
     *
     * This method is called by the parent's constructor.
     *
     * @return void
     */
    protected function configure()
    {
        $this->setName('show');
        $this->setDescription('Display the package stats for the given vendor');
        $this->addArgument('vendors', InputArgument::IS_ARRAY, 'The vendor name(s)');
    }

    /**
     * Executes the command.
     *
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $packages = $this->getPackages((array) $input->getArgument('vendors'));

        $table = self::getTable($output);

        foreach ($packages as $package) {
            $table->addRow([
                $package->getName(),
                $package->getDownloads()->getTotal(),
                $package->getDownloads()->getMonthly(),
            ]);
        }

        $table->addRow(new TableSeparator());

        $table->addRow(['SUMMARY', $packages->getAllTimeTotal(), $packages->getMonthlyTotal()]);

        $table->render();

        return 0;
    }

    /**
     * Get the presented packages.
     *
     * @param array $vendors
     *
     * @return \GrahamCampbell\PackagistStats\Presenters\PackagesPresenter
     */
    private function getPackages(array $vendors)
    {
        $packages = $this->client->packages($vendors);

        return new PackagesPresenter($packages);
    }

    /**
     * Get the table instance.
     *
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return \Symfony\Component\Console\Helper\Table
     */
    private static function getTable(OutputInterface $output)
    {
        $table = new Table($output);

        $table->setHeaders(['Package', 'Total Downloads', 'Monthly Downloads']);

        return $table;
    }
}
