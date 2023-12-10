<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\RegisterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use function Laravel\Prompts\password;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("pages.admin.users.index", compact('users'));
    }

    public function create()
    {
        return view("pages.admin.users.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255',
        ]);

        $save = new User;
        $save->name = $request->name;
        $save->email = $request->email;
        $save->password = bcrypt($request->password);

        $save->remember_token = \Illuminate\Support\Str::random(60);
        $save->remember_token = sha1($save->email);
        $save->save();

        Mail::to($save->email)->send(new RegisterMail($save, $save->id, $save->remember_token));
        return redirect("/users")->with('success', "User has been created! Please verify the user's email address!");
    }

    public function edit(User $user)
    {
        return view('pages.admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $input = $request->all();

        if (!empty($request->new_password)) {
            $request->validate([
                'password' => 'required|min:8|max:255',
            ]);
            $input['password'] = bcrypt($request->new_password);
        } else {
            unset($input['password']);
        }

        $user->update($input);
        return redirect('/users')->with('success', 'User successfully edited!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users')->with('success', 'User successfully deleted!');
    }
}
