<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

/*
 * This file is part of the JSON Lint package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Seld\JsonLint;

class ParsingException extends \Exception
{
    protected $details;
    public function __construct($message, $details = array())
    {
        $this->details = $details;
        parent::__construct($message);
    }
    public function getDetails()
    {
        return $this->details;
    }
}

?>