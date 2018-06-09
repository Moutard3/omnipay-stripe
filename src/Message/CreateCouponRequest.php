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

    public function getEndpoint()
    {
        return $this->endpoint.'/coupons';
    }
}
