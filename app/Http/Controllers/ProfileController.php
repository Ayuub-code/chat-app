<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile_pics()
    {
        return view('apps.profilepics');
    }
    public function pics(Request $request)
    {
        if ($request->has('pic')) {
            $fileName = $request->file('profile_pic')->store('profile_pics');
        }
        $profile_pics = new Profile();
        $profile_pics->profile_pics = $fileName ?? null;
        $profile_pics->save();
        return redirect(route('send'));
    }

    //* this hold the route to open chat *//
    public function hold_pics()
    {
        $user = Auth::user();

        return view('apps.hold_pic', [
            'user' => $user
        ]);
    }
}
