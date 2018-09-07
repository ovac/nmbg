<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.show');
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
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = auth()->user();
        $profile = $user->profile;
        $social = $user->social ?: Social::make();

        return view('profile.edit', compact('social', 'profile', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $profile)
    {

        // Handle requests from the
        // UpdateProfile form
        if ($request->exists('update_profile')) {

            $validatedData = $request->validate([
                'avatar' => 'required|image',
                'level' => 'required|string',
                'programme' => 'required|string',
                'name_of_institution' => 'required|string',
            ]);

            auth()->user()->profile->update($validatedData);
        }

        // Handle requests from the
        // UpdateAccount form
        elseif ($request->exists('update_account')) {

            $validatedData = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'username' => 'required|alpha_dash|max:255|unique:users',
                'phone' => 'required|string|max:20|unique:users',
            ]);

            auth()->user()->update($validatedData);
        }

        // Handle requests from the
        // UpdatePassword form
        elseif (
            $request->exists('update_password') &&
            Hash::check(
                $request->input('old_password'),
                ($user = auth()->user())->password
            )
        ) {

            $validatedData = $request->validate([
                'password' => 'required|string|min:6|confirmed',
            ]);

            $user->password = $validatedData['password'];
            $user->save();
        }

        // Handle requests from the
        // UpdateSocial form
        elseif ($request->exists('update_social')) {
            $validatedData = $request->validate([
                'facebook' => 'nullable|aplha_dash',
                'google' => 'nullable|aplha_dash',
                'instagram' => 'nullable|aplha_dash',
                'linkedin' => 'nullable|aplha_dash',
                'pinterest' => 'nullable|aplha_dash',
                'twitter' => 'nullable|aplha_dash',
            ]);

            (Social::find(auth()->id()) ?: auth()->user()->social()->create())->update($validatedData);
        }

        return redirect('/profile/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
