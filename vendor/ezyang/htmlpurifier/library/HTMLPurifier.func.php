<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

/**
 * @file
 * Defines a function wrapper for HTML Purifier for quick use.
 * @note ''HTMLPurifier()'' is NOT the same as ''new HTMLPurifier()''
 */
/**
 * Purify HTML.
 * @param string $html String HTML to purify
 * @param mixed $config Configuration to use, can be any value accepted by
 *        HTMLPurifier_Config::create()
 * @return string
 */
function HTMLPurifier($html, $config = null)
{
    static $purifier = false;
    if (!$purifier) {
        $purifier = new HTMLPurifier();
    }
    return $purifier->purify($html, $config);
}
// vim: et sw=4 sts=4

?>