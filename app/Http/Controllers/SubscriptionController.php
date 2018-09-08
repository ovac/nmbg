<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeRequest;
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
    public function create()
    {
        //
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
                ->callback(url('/subscription-activation/' . auth()->id()))

            //- Run the transaction after required data.
                ->run();
            //
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage())->withInput();
        }

        return 'A payment prompt has been sent to your phone: ' . $request->input('phone') . '. Please complete the prompt.';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
