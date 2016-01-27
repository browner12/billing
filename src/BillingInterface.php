<?php namespace browner12\billing;

interface BillingInterface
{
    /**
     * charge
     *
     * @param int    $amount
     * @param string $token
     * @param string $description
     */
    public function charge($amount, $token, $description);
}
