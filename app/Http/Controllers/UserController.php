<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request) {

        // $users = \App\Models\User::paginate(10);
        $users = DB::table('users')
        ->when($request->input('name'), function ($query, $name) {
            return $query->where('name', 'like', '%'.$name.'%');
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('pages.user.index', compact('users'));
    }

    public function create() {

        return view('pages.user.create');
    }

    public function store(UserStoreRequest  $request) { 

        $data = $request->all();
        $data['password'] =  Hash::make($request->password);
        User::create($data); 
        return redirect()->route('user.index')->with('success', 'User successfully created');
    }

    public function edit($id) {

        $users = User::findOrFail($id);
        return view('pages.user.edit', compact('users'));
    }

    public function update(UserUpdateRequest $request, User $user) {

        $data = $request->validated();
        $user->update($data);
        return redirect()->route('user.index')->with('success', 'User successfully updated');
    }

    public function destroy(User $user) {

        $user->delete();
        return redirect()->route('user.index')->with('success', 'User successfully deleted');
    } 
}
