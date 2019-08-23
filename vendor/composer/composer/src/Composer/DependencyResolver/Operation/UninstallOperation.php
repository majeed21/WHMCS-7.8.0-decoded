<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Composer\DependencyResolver\Operation;

use Composer\Package\PackageInterface;
/**
 * Solver uninstall operation.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class UninstallOperation extends SolverOperation
{
    protected $package;
    /**
     * Initializes operation.
     *
     * @param PackageInterface $package package instance
     * @param string           $reason  operation reason
     */
    public function __construct(PackageInterface $package, $reason = null)
    {
        parent::__construct($reason);
        $this->package = $package;
    }
    /**
     * Returns package instance.
     *
     * @return PackageInterface
     */
    public function getPackage()
    {
        return $this->package;
    }
    /**
     * Returns job type.
     *
     * @return string
     */
    public function getJobType()
    {
        return 'uninstall';
    }
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {
        return 'Uninstalling ' . $this->package->getPrettyName() . ' (' . $this->formatVersion($this->package) . ')';
    }
}

?>