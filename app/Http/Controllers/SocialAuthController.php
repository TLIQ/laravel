<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserSocial;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function vkAuth()
    {
        return Socialite::with('vkontakte')->redirect();
    }

    public function vkAuthCallback()
    {
        $user = Socialite::driver('vkontakte')->user();
//        $nickname = $user->getNickname();
//        $email = $user->getEmail();

        $userInSystem = UserSocial::query()
            ->where('id_in_soc', $user->id)
            ->first();
        if (empty($userInSystem)) {
            $userInSystem = new UserSocial();
            $userInSystem->fill([
               'name' => !empty($user->getName()) ?$user->getName(): '',
               'email' => !empty($user->getEmail()) ?$user->getEmail(): '',
               'password' => '12345678',
               'id_in_soc' => !empty($user->getId()) ? $user->getId(): '',
               'avatar' => !empty($user->getAvatar()) ? $user->getAvatar(): ''
            ]);
            $userInSystem->save();
        }
        return redirect()->route('news');
    }
}
