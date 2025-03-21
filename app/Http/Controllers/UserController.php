<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Database\Eloquent\Builder;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('projects')->has('projects')->get();

        return view('users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
