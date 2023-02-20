<?php

/** @noinspection ALL */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }

    public function session()
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'php',
                        'product_data' => [
                            'name' => 'PAY',
                        ],
                        'unit_amount'  => 5000,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }

    public function success()
    {
        return "Payment Successful";
    }


    // ANOTHER SESSION

    public function checkout1()
    {
        return view('checkout1');
    }


    public function anotherSession()



    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'php',
                        'product_data' => [
                            'name' => 'PAY',
                        ],
                        'unit_amount'  => 100000,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment',
            'success_url' => route('anotherSuccess'),
            'cancel_url'  => route('checkout1'),
        ]);

        return redirect()->away($session->url);
    }

    public function anotherSuccess()
    {
        return "Another Payment Successful";
    }
}
