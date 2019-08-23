<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Symfony\Component\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Exception\ServiceCircularReferenceException;
use Symfony\Component\DependencyInjection\ContainerBuilder;
/**
 * Checks your services for circular references.
 *
 * References from method calls are ignored since we might be able to resolve
 * these references depending on the order in which services are called.
 *
 * Circular reference from method calls will only be detected at run-time.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class CheckCircularReferencesPass implements CompilerPassInterface
{
    private $currentPath;
    private $checkedNodes;
    /**
     * Checks the ContainerBuilder object for circular references.
     *
     * @param ContainerBuilder $container The ContainerBuilder instances
     */
    public function process(ContainerBuilder $container)
    {
        $graph = $container->getCompiler()->getServiceReferenceGraph();
        $this->checkedNodes = array();
        foreach ($graph->getNodes() as $id => $node) {
            $this->currentPath = array($id);
            $this->checkOutEdges($node->getOutEdges());
        }
    }
    /**
     * Checks for circular references.
     *
     * @param ServiceReferenceGraphEdge[] $edges An array of Edges
     *
     * @throws ServiceCircularReferenceException When a circular reference is found.
     */
    private function checkOutEdges(array $edges)
    {
        foreach ($edges as $edge) {
            $node = $edge->getDestNode();
            $id = $node->getId();
            if (empty($this->checkedNodes[$id])) {
                // don't check circular dependencies for lazy services
                if (!$node->getValue() || !$node->getValue()->isLazy()) {
                    $searchKey = array_search($id, $this->currentPath);
                    $this->currentPath[] = $id;
                    if (false !== $searchKey) {
                        throw new ServiceCircularReferenceException($id, array_slice($this->currentPath, $searchKey));
                    }
                    $this->checkOutEdges($node->getOutEdges());
                }
                $this->checkedNodes[$id] = true;
                array_pop($this->currentPath);
            }
        }
    }
}

?>