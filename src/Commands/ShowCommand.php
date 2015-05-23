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

namespace GrahamCampbell\PackagistStats\Commands;

use GrahamCampbell\PackagistStats\Client;
use GrahamCampbell\PackagistStats\Presenters\PackagesPresenter;
use Packagist\Api\Client as Packagist;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Helper\TableSeparator;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * This is the show command class.
 *
 * @author    Graham Campbell <graham@cachethq.io>
 * @copyright 2014 Graham Campbell
 * @license   <https://github.com/GrahamCampbell/Packagist-Stats/blob/master/LICENSE.md> MIT
 */
class ShowCommand extends Command
{
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
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $packages = $this->getPackages($input->getArgument('vendors'));

        $table = $this->getTable($output);

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
    }

    /**
     * Get the presented packages.
     *
     * @param array $vendors
     *
     * @return \GrahamCampbell\PackagistStats\Presenters\PackagesPresenter
     */
    protected function getPackages(array $vendors)
    {
        $packagist = new Packagist();

        $client = new Client($packagist);

        $packages = $client->packages($vendors);

        return new PackagesPresenter($packages);
    }

    /**
     * Get the table instance.
     *
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return \Symfony\Component\Console\Helper\Table
     */
    protected function getTable(OutputInterface $output)
    {
        $table = new Table($output);

        $table->setHeaders(['Package', 'Total Downloads', 'Monthly Downloads']);

        return $table;
    }
}
