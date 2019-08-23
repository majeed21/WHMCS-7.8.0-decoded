<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

/**
 * @license Copyright 2011-2015 BitPay Inc., MIT License 
 * see https://github.com/bitpay/php-bitpay-client/blob/master/LICENSE
 */
namespace Bitpay;

/**
 * This is the currency code set for the price setting. The currencies supported are any
 * of the codes listed on this page: https://bitpay.com/bitcoin-exchange-rates
 *
 * @package Bitpay
 */
interface CurrencyInterface
{
    /**
     * @return string
     */
    public function getCode();
    /**
     * @return string
     */
    public function getSymbol();
    /**
     * @return string
     */
    public function getPrecision();
    /**
     * @return string
     */
    public function getExchangePctFee();
    /**
     * @return boolean
     */
    public function isPayoutEnabled();
    /**
     * @return string
     */
    public function getName();
    /**
     * @return string
     */
    public function getPluralName();
    /**
     * @return array
     */
    public function getAlts();
    /**
     * @return array
     */
    public function getPayoutFields();
}

?>