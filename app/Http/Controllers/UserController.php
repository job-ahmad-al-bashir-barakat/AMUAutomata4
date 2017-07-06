<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(\Request $req)
    {
        return User::all();
    }

    public function store()
    {

    }

    public function create()
    {

    }

    public function show(User $user)
    {

    }

    public function update(User $user)
    {

    }

    public function destroy(User $user)
    {

    }

    public function edit(User $user)
    {

    }
}
