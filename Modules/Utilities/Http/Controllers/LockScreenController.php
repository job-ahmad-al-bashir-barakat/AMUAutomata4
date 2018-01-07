<?php

namespace Modules\Utilities\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

class LockScreenController extends Controller
{
    public function lock()
    {
        // only if user is logged in
        if(\Auth::check()) {

            \Session::put('locked', true);

            if(!\Session::has('locked_redirect')) {

                $locked_redirect = \LaravelLocalization::getNonLocalizedURL(\Redirect::back()->getTargetUrl());

                \Session::put('locked_redirect', $locked_redirect);
            }

            return view('utilities::lockscreen');
        }

        return redirect(\RouteUrls::login());
    }

    public function unlock(Request $request)
    {
        // if user in not logged in
        if(!\Auth::check())
            return redirect('login');

        $this->validate($request, [
            'password' => 'required|string',
        ]);

        $password = Input::get('password');

        if(\Hash::check($password ,\Auth::user()->password)){

            $redirect = \Session::get('locked_redirect');

            \Session::forget('locked');
            \Session::forget('locked_redirect');

            return redirect()->intended($redirect);
        }

        return back()->withErrors(['password' => trans('utilities::app.pass_not_match')]);
    }
}
