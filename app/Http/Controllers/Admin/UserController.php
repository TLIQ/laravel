<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = User::query()->orderby('created_at', 'desc')->paginate(10);

        return view('users.users', [
            'users' => $users,
        ]);
    }

    public function edit(User $user)
    {
        return view('users.user_edit', [
            'user' => $user
        ]);
    }

    public function update(UserCreateRequest $request, User $user)
    {
//        $user->fill($request->validated());
//        dd($user);
//        $user->save();
//
//        return redirect()->route('users.index');
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)]
            ]);

            $user->fill($request->all());
            $user->save();

        return redirect()->route('users.index');

    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
