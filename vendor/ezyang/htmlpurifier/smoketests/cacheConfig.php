<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

require_once 'common.php';
$config = HTMLPurifier_Config::createDefault();
$config->set('HTML.Doctype', 'HTML 4.01 Strict');
$config->set('HTML.Allowed', 'b,a[href],br');
$config->set('CSS.AllowTricky', true);
$config->set('URI.Disable', true);
$serial = $config->serialize();
$result = unserialize($serial);
$purifier = new HTMLPurifier($result);
echo htmlspecialchars($purifier->purify('<b>Bold</b><br><i><a href="http://google.com">no</a> formatting</i>'));

?>