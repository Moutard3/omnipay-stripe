<?php

/**
 * Stripe Create Coupon Request.
 */

namespace Omnipay\Stripe\Message;

/**
 * Stripe Create Coupon Request
 *
 * @see \Omnipay\Stripe\Gateway
 * @link https://stripe.com/docs/api#create_coupon
 */
class CreateCouponRequest extends AbstractRequest
{
    /**
 * Set the coupon ID
 *
 * @param $value
 * @return \Omnipay\Common\Message\AbstractRequest|CreateCouponRequest
 */
    public function setId($value)
    {
        return $this->setParameter('id', $value);
    }

    /**
     * Get the coupon ID
     *
     * @return string
     */
    public function getId()
    {
        return $this->getParameter('id');
    }

    /**
     * Set the coupon duration
     *
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest|CreateCouponRequest
     */
    public function setDuration($value)
    {
        return $this->setParameter('duration', $value);
    }

    /**
     * Get the coupon duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->getParameter('duration');
    }

    /**
     * Set the coupon amount off
     *
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest|CreateCouponRequest
     */
    public function setAmountOff($value)
    {
        return $this->setParameter('amount_off', $value);
    }

    /**
     * Get the coupon amount off
     *
     * @return string
     */
    public function getAmountOff()
    {
        return $this->getParameter('amount_off');
    }

    /**
     * Set the coupon currency
     *
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest|CreateCouponRequest
     */
    public function setCurrency($value)
    {
        return $this->setParameter('currency', $value);
    }

    /**
     * Get the coupon currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->getParameter('currency');
    }

    /**
     * Set the coupon percent off
     *
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest|CreateCouponRequest
     */
    public function setPercentOff($value)
    {
        return $this->setParameter('percent_off', $value);
    }

    /**
     * Get the coupon percent off
     *
     * @return string
     */
    public function getPercentOff()
    {
        return $this->getParameter('percent_off');
    }

    public function getData()
    {
        $this->validate('duration');

        $data = array();

        if ($this->getId()) {
            $data['id'] = $this->getId();
        }
        if ($this->getAmountOff()) {
            $this->validate('currency');
            $data['amount_off'] = $this->getAmountOff();
            $data['currency'] = $this->getCurrency();
        }
        if ($this->getPercentOff()) {
            $data['percent_off'] = $this->getPercentOff();
        }

        return $data;
    }

    public function getEndpoint()
    {
        return $this->endpoint.'/coupons';
    }

    public function getHttpMethod()
    {
        return 'POST';
    }
}
