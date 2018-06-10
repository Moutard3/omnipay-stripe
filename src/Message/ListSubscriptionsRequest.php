<?php

/**
 * Stripe List Subscriptions Request.
 */
namespace Omnipay\Stripe\Message;

/**
 * Stripe List Subscriptions Request.
 *
 * @see Omnipay\Stripe\Gateway
 * @link https://stripe.com/docs/api/curl#list_plans
 */
class ListSubscriptionsRequest extends AbstractRequest
{
    /**
     * Get the subscription limit.
     *
     * @return string
     */
    public function getLimit()
    {
        return $this->getParameter('limit');
    }

    /**
     * Set the subscription limit.
     *
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest|ListSubscriptionsRequest
     */
    public function setLimit($value)
    {
        return $this->setParameter('limit', $value);
    }

    /**
     * Get the subscription status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->getParameter('status');
    }

    /**
     * Set the subscription status.
     *
     * @param $value
     * @return \Omnipay\Common\Message\AbstractRequest|ListSubscriptionsRequest
     */
    public function setStatus($value)
    {
        return $this->setParameter('status', $value);
    }

    public function getData()
    {
        $data = array();

        return $data;
    }

    public function getEndpoint()
    {
        $endpoint = $this->endpoint.'/subscriptions?';
        if ($customerReference = $this->getCustomerReference()) {
            $endpoint = $endpoint . 'customer=' . $customerReference . '&';
        }
        if ($limit = $this->getLimit()) {
            $endpoint = $endpoint . 'limit=' . $limit . '&';
        }
        if ($status = $this->getStatus()) {
            $endpoint = $endpoint . 'status=' . $status . '&';
        }

        return $endpoint;
    }

    public function getHttpMethod()
    {
        return 'GET';
    }
}
