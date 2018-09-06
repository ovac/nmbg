<?php

namespace App\Http\Controllers;

use App\PersonalPicture;
use Illuminate\Http\Request;

class PersonalPictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pictures = auth()->user()->personalPictures;

        return view('portfolio.personal', compact('pictures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolio.create');

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
     * @param  \App\PersonalPicture  $personalPicture
     * @return \Illuminate\Http\Response
     */
    public function show(PersonalPicture $personalPicture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PersonalPicture  $personalPicture
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonalPicture $personalPicture)
    {
        return view('portfolio.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PersonalPicture  $personalPicture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonalPicture $personalPicture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PersonalPicture  $personalPicture
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonalPicture $personalPicture)
    {
        //
    }
}
