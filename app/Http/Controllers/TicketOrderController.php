<?php

namespace App\Http\Controllers;

use App\TicketOrder;
use Illuminate\Http\Request;

class TicketOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orders.ticket-orders');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TicketOrder  $ticketOrder
     * @return \Illuminate\Http\Response
     */
    public function show(TicketOrder $ticketOrder)
    {
        return view('orders.ticket-order');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TicketOrder  $ticketOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(TicketOrder $ticketOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TicketOrder  $ticketOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TicketOrder $ticketOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TicketOrder  $ticketOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(TicketOrder $ticketOrder)
    {
        //
    }
}
