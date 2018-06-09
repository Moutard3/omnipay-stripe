<?php

/**
 * Stripe Fetch Coupon Request.
 */
namespace Omnipay\Stripe\Message;

/**
 * Stripe Fetch Coupon Request.
 *
 * @link https://stripe.com/docs/api#retrieve_coupon
 */
class FetchCouponRequest extends AbstractRequest
{
    /**
     * Get the coupon id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->getParameter('id');
    }

    /**
     * Set the coupon id.
     *
     * @return \Omnipay\Common\Message\AbstractRequest|FetchCouponRequest
     */
    public function setId($couponId)
    {
        return $this->setParameter('id', $couponId);
    }

    public function getData()
    {
        $this->validate('id');
        $data = array();

        return $data;
    }

    public function getEndpoint()
    {
        return $this->endpoint.'/coupons/'.$this->getId();
    }

    public function getHttpMethod()
    {
        return 'GET';
    }
}
