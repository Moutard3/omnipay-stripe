<?php

/**
 * Stripe Delete Coupon Request.
 */
namespace Omnipay\Stripe\Message;

/**
 * Stripe Delete Coupon Request.
 *
 * @link https://stripe.com/docs/api#delete_coupon
 */
class DeleteCouponRequest extends AbstractRequest
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
     * @param int $value
     * @return DeleteCouponRequest provides a fluent interface.
     */
    public function setId($value)
    {
        return $this->setParameter('id', $value);
    }

    public function getData()
    {
        $this->validate('id');

        return;
    }

    public function getEndpoint()
    {
        return $this->endpoint.'/coupons/'.$this->getId();
    }

    public function getHttpMethod()
    {
        return 'DELETE';
    }
}
