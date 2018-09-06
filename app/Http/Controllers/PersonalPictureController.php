<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePicture;
use App\Http\Requests\UploadPicture;
use App\PersonalPicture;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

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
    public function store(UploadPicture $request)
    {

        $picture = Cloudder::upload($request->file('picture'))->getResult()['secure_url'];

        $request->user()->personalPictures()->create(
            array_replace($request->all(), [
                'picture' => $picture,
                'slug' => str_slug($request->input('slug') ?: $request->input('title'), "-"),
            ])
        );

        return redirect('/portfolio');
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
    public function edit($id)
    {
        return view('portfolio.edit', ['picture' => PersonalPicture::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PersonalPicture  $personalPicture
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePicture $request, $id)
    {
        $picture = PersonalPicture::findOrFail($id);

        $picture->update(
            array_replace($request->except('picture'), [
                'slug' => str_slug($request->input('slug') ?: $request->input('title'), "-"),
            ])
        );

        return back();
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
