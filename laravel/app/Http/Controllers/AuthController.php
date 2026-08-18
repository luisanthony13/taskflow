<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function showRegistrationForm(): View
    {
        return view('auth.register');
    }
    public function register(Request $request): RedirectResponse
    {
        $request->validate([
            'user_name' => 'required|string|max:255|unique:usuarios',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user = User::create([
            'user_name' => $request->input('user_name'),
            'password' => $request->input('password'),
        ]);
        Auth::login($user);
        request()->session()->regenerate();
        //Ayuda a evitar ataques de fijación de sesión, generando un nuevo ID de sesión para el usuario autenticado.
        return redirect()->route('dashboard');
    }

    public function showLoginForm(): View
    {
        return view('auth.login');
    }
}
?>