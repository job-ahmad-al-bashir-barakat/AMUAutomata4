<?php

namespace Modules\Utilities\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

class LockScreenController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function lock()
    {
        // only if user is logged in
        if(\Auth::check()){
            \Session::put('locked', true);

            return view('utilities::lockscreen');
        }

        return redirect(\RouteUrls::login());
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function unlock(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|string',
        ]);

        // if user in not logged in
        if(!\Auth::check())
            return redirect('login');

        $password = Input::get('password');



        if(\Hash::check($password ,\Auth::user()->password)){

            \Session::forget('locked');

            return redirect(\RouteUrls::admin());
        }

        return back()->withErrors(['password' => 'Password does not match. Please try again.']);
    }
}
