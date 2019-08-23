<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

namespace Aws\Exception;

use Aws\HasMonitoringEventsTrait;
use Aws\MonitoringEventsInterface;
class UnresolvedApiException extends \RuntimeException implements MonitoringEventsInterface
{
    use HasMonitoringEventsTrait;
}

?>