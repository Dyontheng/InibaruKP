<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // $user = Auth::user();

        // if ($user->hasRole('admin')) {
        //     return redirect()->route('admin.dashboard.index');
        // } elseif ($user->karyawan()) {
        //     return redirect()->route('user.dashboard.index');
        // }elseif ($user->ITdept()) {
        //     return redirect()->route('user.dashboard.index');
        // }elseif ($user->legaldept()) {
        //     return redirect()->route('user.dashboard.index');
        // }elseif ($user->Hrddept()) {
        //     return redirect()->route('user.dashboard.index');
        // }elseif ($user->exportdept()) {
        //     return redirect()->route('user.dashboard.index');
        // }elseif ($user->purchdept()) {
        //     return redirect()->route('user.dashboard.index');
        // }elseif ($user->financedept()) {
        //     return redirect()->route('user.dashboard.index');
        // }elseif ($user->operator()) {
        //     return redirect()->route('user.dashboard.index');
        // }
    
        return redirect('/dashboard')->with('error', 'You do not have access to this page.');
        

        // return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
