<?php

namespace App\Http\Controllers;

use App\Models\Cover;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// class CoverController extends Controller
// {
//     public function profile_pics(Request $request)
//     {
//         $user = User::query()
//             ->where('id', $request->id)
//             ->first();
//         return view('apps.profilepics', [
//             'user' => $user
//         ]);
//     }
//     public function pics(Request $request)
//     {
//         if ($request->has('profie_pic')) {
//             $fileName = $request->file('profile_pic')->store('profile_pics');
//         }
//         $cover = new Cover();
//         $cover->user_id = Auth::id();
//         $cover->profile_pic = $fileName ?? null;
//         $cover->save();
//         return redirect(route('sent'));
//     }

//     //* this hold the route to open chat *//
//     public function hold_pics()
//     {
//         $user = Auth::user();

//         return view('apps.hold_pic', [
//             'user' => $user
//         ]);
//     }
// }
