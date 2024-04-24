<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        if ($user) {
            return view('edit', ['user' => $user]);
        } else {
            return redirect()->route('login');
        }
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
        $user->delete();
        return redirect('/home')->with('success', 'Account deleted successfully');
    }

}
