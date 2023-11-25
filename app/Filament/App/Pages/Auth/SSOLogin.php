<?php

namespace App\Filament\App\Pages\Auth;

use App\Models\User;

/**
 *自定义登录，用于接入统一身份认证(单点登录 Single sign-on)
 */
class SSOLogin
{
    public function __invoke()
    {
        $user = User::find(1);


    }
}
