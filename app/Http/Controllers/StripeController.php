<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Auth;
class StripeController extends Controller
{
    public function checkout()
    {
        $user = Auth::user();
       
        if($user != null){
            return view('payment');
        }else{
            session(['user_want_pay'=>"true"]);
            return view('signup');
        }
    }

    public function session()
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            'name' => 'Buy ',
                        ],
                        'unit_amount'  => 100,
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
        $user = Auth::user();
        $data = session('data');
        $input = ["user_id"=>$user->id, "date"=>$data];
        Payment::create($input);
        echo "<script>sessionStorage.setItem('data', '$data');</script>";
        return redirect(route('paiddesc'));
    }
    public function paymentCheckout(){
        return view('payment-checkout');
    }
}
