<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeRequest;
use App\Subscribtion;
use App\User;
use Illuminate\Http\Request;
use OVAC\LaravelHubtelPayment\Facades\HubtelPayment;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->isSubscribed()) {
            return redirect('/dashboard');
        }

        return view('subscribe.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe(User $user, Request $request)
    {
        if ($request->has('Data') && $request->ResponseCode === "0000") {
            $subscription = new Subscribtion;

            $subscription->user_id = $user->id;
            $subscription->amount = $request->input('Data.Amount');
            $subscription->charges = $request->input('Data.Charges');
            $subscription->token = $request->input('Data.TransactionId');
            $subscription->description = $request->input('Data.Description');
            $subscription->transaction_id = $request->input('Data.ExternalTransactionId');
            $subscription->amount_after_charges = $request->input('Data.AmountAfterCharges');

            $subscription->save();
        }

        return 200;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubscribeRequest $request)
    {
        try {
            // NOTE:
            // The phone number must be of type string as
            // Laravel considers all numbers with a
            // leading 0 to be a hex number.

            HubtelPayment::ReceiveMoney()

            //- The phone number to send the prompt to.
                ->from($request->input('phone'))

            //- The exact amount value of the transaction
                ->amount(config('nmbg.subscription.price'))

            //- Description of the transaction.
                ->description(config('app.name') . ' Subsctiption Payment')

            //- Name of the person making the payment.callback after payment.
                ->customerName(auth()->user()->name)

            //- The mobile network Channel.configuration
                ->channel($request->input('channel'))

            //- The URL to send callback after payment.
                ->callback(url('subscription-activation/' . auth()->id()))

            //- Run the transaction after required data.
                ->run();
            //
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage())->withInput();
        }

        return back()->withErrors('A payment prompt has been sent to your phone: ' . $request->input('phone') . '. Please complete the prompt.');
    }
}
