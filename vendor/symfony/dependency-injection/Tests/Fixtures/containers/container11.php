<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
$container = new ContainerBuilder();
$container->register('foo', 'FooClass')->addArgument(new Definition('BarClass', array(new Definition('BazClass'))));
return $container;

?>