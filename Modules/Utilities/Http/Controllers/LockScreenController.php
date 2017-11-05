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
        if(\Auth::check()){
            \Session::put('locked', true);

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

            \Session::forget('locked');

            return redirect()->back();
            //redirect(\RouteUrls::admin());
        }

        return back()->withErrors(['password' => trans('utilities::app.pass_not_match')]);
    }
}
