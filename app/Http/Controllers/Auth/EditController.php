<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
    public function show(User $user)
    {
        if (Auth::id() !== $user->id) {
            return redirect('/home')->with('error', 'Unauthorized access');
        }

        return view('/edit', compact('user'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        if (Auth::id() !== $user->id) {
            return redirect('/home')->with('error', 'Unauthorized access');
        }

        $user->update($request->validated());
        
        return redirect('/home')->with('success', 'Account updated successfully');
    }

    public function destroy(User $user)
    {
        if (Auth::id() !== $user->id) {
            return redirect('/home')->with('error', 'Unauthorized access');
        }

        $user->delete();
        Auth::logout();
        return redirect('/home')->with('success', 'Account deleted successfully');
    }

}
