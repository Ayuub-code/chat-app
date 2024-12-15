<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function User_details()
    {
        return view('apps.user_info');
    }
    public function reg(Request $request)
    {
        $request->validate([
            'phone_no' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->phone_no = $request->phone_no;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect(route('intoduction'));
    }
    public function login()
    {
        return view('apps.login');
    }
    public function login_page(Request $request)
    {
        $request->validate([
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);
        $user = User::query()
            ->where('email', $request->email)
            ->first();
        if ($user && Hash::check($request->password, $user->password)) {
            $login = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            if ($login === true) {
                return redirect(route('route'));
            }
        }
    }

    // * introduction before loginpage *//

    public function intro()
    {
        return view('apps.intro');
    }
    //* profile_pics *//

    public function profile_pics(Request $request)
    {
        $user = User::query()
            ->where('id', $request->id)
            ->first();
        return view('apps.profilepics', [
            'user' => $user
        ]);
    }
    public function pics(Request $request)
    {
        $user = Auth::user();
        $fileName = null;
        if ($request->hasFile('profile_pics')) {
            $fileName = $request->file('profile_pics')->store('profile_pices');
        }

        $user = User::query()
            ->where('id', $user->id)
            ->update([
                'profile_pics' => $fileName
            ]);

        return redirect(route('suggestions.show'));
    }
    public function hold_pics()
    {
        $user = Auth::user();

        return view('apps.hold_pic', [
            'user' => $user
        ]);
    }
}
