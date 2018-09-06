<?php

namespace App\Http\Controllers;

use Vinkla\Instagram\Instagram;

class DashboardController extends Controller
{
    public function dashboard()
    {

        // Create a new instagram instance.
        $instagram = new Instagram(config('nmbg.tokens.instagram'));

        // Fetch recent user media items.
        $instagram->media();

        // Fetch user information.
        $pictures = collect($instagram->media());

        return view('interior.dashboard', compact('pictures'));
    }
}
