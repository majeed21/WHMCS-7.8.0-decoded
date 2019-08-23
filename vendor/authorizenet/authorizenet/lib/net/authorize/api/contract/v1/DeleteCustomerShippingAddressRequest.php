<?php
/*
 * @ PHP 5.6
 * @ Decoder version : 1.0.0.1
 * @ Release on : 24.03.2018
 * @ Website    : http://EasyToYou.eu
 */

namespace net\authorize\api\contract\v1;

/**
 * Class representing DeleteCustomerShippingAddressRequest
 */
class DeleteCustomerShippingAddressRequest extends ANetApiRequestType
{
    /**
     * @property string $customerProfileId
     */
    private $customerProfileId = null;
    /**
     * @property string $customerAddressId
     */
    private $customerAddressId = null;
    /**
     * Gets as customerProfileId
     *
     * @return string
     */
    public function getCustomerProfileId()
    {
        return $this->customerProfileId;
    }
    /**
     * Sets a new customerProfileId
     *
     * @param string $customerProfileId
     * @return self
     */
    public function setCustomerProfileId($customerProfileId)
    {
        $this->customerProfileId = $customerProfileId;
        return $this;
    }
    /**
     * Gets as customerAddressId
     *
     * @return string
     */
    public function getCustomerAddressId()
    {
        return $this->customerAddressId;
    }
    /**
     * Sets a new customerAddressId
     *
     * @param string $customerAddressId
     * @return self
     */
    public function setCustomerAddressId($customerAddressId)
    {
        $this->customerAddressId = $customerAddressId;
        return $this;
    }
}

?>