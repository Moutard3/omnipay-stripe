<?php

/**
 * Stripe List Coupons Request.
 */
namespace Omnipay\Stripe\Message;

/**
 * Stripe List Coupons Request.
 *
 * @see Omnipay\Stripe\Gateway
 * @link https://stripe.com/docs/api/curl#list_coupons
 */
class ListCouponsRequest extends AbstractRequest
{
    public function getData()
    {
        $data = array();

        return $data;
    }

    public function getEndpoint()
    {
        return $this->endpoint.'/coupons';
    }

    public function getHttpMethod()
    {
        return 'GET';
    }
}
