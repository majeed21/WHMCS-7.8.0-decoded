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
namespace Symfony\Component\Config\Definition;

use Symfony\Component\Config\Definition\Exception\InvalidTypeException;
/**
 * This node represents a Boolean value in the config tree.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class BooleanNode extends ScalarNode
{
    /**
     * {@inheritdoc}
     */
    protected function validateType($value)
    {
        if (!is_bool($value)) {
            $ex = new InvalidTypeException(sprintf('Invalid type for path "%s". Expected boolean, but got %s.', $this->getPath(), gettype($value)));
            if ($hint = $this->getInfo()) {
                $ex->addHint($hint);
            }
            $ex->setPath($this->getPath());
            throw $ex;
        }
    }
    /**
     * {@inheritdoc}
     */
    protected function isValueEmpty($value)
    {
        // a boolean value cannot be empty
        return false;
    }
}

?>