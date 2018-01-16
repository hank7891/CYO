<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

use App\Http\Controllers\Controller;
use App\Model;

class LoginController extends Controller
{
    public function show(Request $request) {
        if ($request->session()->get('has_login')) {
            return redirect(route('admin.index'));
        }
        return View::make('admin.login');
    }

    public function login(Request $request) {
        $url = route('admin.index');
        $input = Input::only('accountID', 'accountPassword');

        $user = Model\system_account::where('account', $input['accountID'])->first();
        if (!$user) {
            return redirect()->back()
                    ->withErrors([
                        'fail' => 'ID is not find!!',
                    ]);
        }

        if (Hash::check($input['accountPassword'], $user->password)) {
            $request->session()->put('has_login', True);
            $request->session()->put('user', $user);
        } else {
            return redirect()->back()
                    ->withErrors([
                        'fail' => 'accountPassword Error!!',
                    ]);
        }

        return redirect($url);
    }

    public function logout(Request $request) {
        $request->session()->forget('user');
        $request->session()->forget('has_login');
        return redirect(route('admin.loginShow'));
    }
}
