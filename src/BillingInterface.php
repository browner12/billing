<?php namespace browner12\billing;

interface BillingInterface
{
    /**
     * charge
     *
     * @param int    $amount
     * @param string $token
     * @param string $description
     * @return mixed
     * @throws \browner12\billing\BillingException
     */
    public function charge($amount, $token, $description);
}
