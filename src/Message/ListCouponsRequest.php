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
    /**
     * Get the coupon limit.
     *
     * @return string
     */
    public function getLimit()
    {
        return $this->getParameter('limit');
    }

    /**
     * Set the coupon limit.
     *
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest|ListSubscriptionsRequest
     */
    public function setLimit($value)
    {
        return $this->setParameter('limit', $value);
    }

    public function getData()
    {
        $data = array();

        return $data;
    }

    public function getEndpoint()
    {
        $endpoint = $this->endpoint.'/coupons?';
        if ($limit = $this->getLimit()) {
            $endpoint = $endpoint . 'limit=' . $limit . '&';
        }

        return $endpoint;
    }

    public function getHttpMethod()
    {
        return 'GET';
    }
}
