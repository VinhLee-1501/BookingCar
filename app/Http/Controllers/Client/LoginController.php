<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('email', $googleUser->getEmail())->first();

            if ($user) {
                // Nếu người dùng đã tồn tại, đăng nhập
                Auth::login($user);

                // dd($user);
            } else {
                $name = $googleUser->getName();
                $email = $googleUser->getEmail();
                $id = $googleUser->getId();
                // dd($id);
                // Nếu người dùng chưa tồn tại, tạo một người dùng mới và đăng nhập
                $user = User::create([
                    'name' => $name,
                    'email' => $email,
                    'google_id' => $id,
                    'password' => bcrypt('your-random-password') // không bắt buộc
                ]);
                // dd($user);
                Auth::login($user);
            }

            return redirect()->intended(route('user.home'));
        } catch (Exception $e) {
            return redirect('auth/google')->withErrors(['message' => $e->getMessage()]);

        }
    }


}
