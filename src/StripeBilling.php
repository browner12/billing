<?php namespace browner12\billing;

use Stripe\Charge;
use Stripe\Error\ApiConnection;
use Stripe\Error\Authentication;
use Stripe\Error\Base;
use Stripe\Error\Card;
use Stripe\Error\InvalidRequest;
use Stripe\Stripe;

class StripeBilling implements BillingInterface
{
    /**
     * constructor
     */
    public function __construct()
    {
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
    }

    /**
     * charge
     *
     * @param int    $amount
     * @param string $token
     * @param string $description
     * @return \Stripe\Charge
     * @throws \browner12\billing\BillingException
     */
    public function charge($amount, $token, $description)
    {
        //try to charge
        try {

            //create the charge
            $charge = Charge::create([
                "amount"      => $amount,
                "currency"    => "usd",
                "card"        => $token,
                "description" => $description,
            ]);
        }

            //card declined
        catch (Card $e) {
            throw new BillingException('card declined', null, $e);
        }

            //invalid parameters were supplied to Stripe's API
        catch (InvalidRequest $e) {
            throw new BillingException('invalid parameters error', null, $e);
        }

            //authentication with Stripe's API failed (maybe you changed API keys recently)
        catch (Authentication $e) {
            throw new BillingException('Authentication error', null, $e);
        }

            //network communication with Stripe failed
        catch (ApiConnection $e) {
            throw new BillingException('Network communication error.', null, $e);
        }

            //display a very generic error to the user, and maybe send yourself an email
        catch (Base $e) {
            throw new BillingException('Generic Stripe Error', null, $e);
        }

        //return charge
        return $charge;
    }

}
