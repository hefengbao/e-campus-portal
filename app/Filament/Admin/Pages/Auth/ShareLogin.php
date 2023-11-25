<?php

namespace App\Filament\Admin\Pages\Auth;

use Filament\Pages\Page;

class ShareLogin
{
    public function __invoke()
    {
        return redirect(route('filament.app.auth.login').'?redirect=/admin');
    }
}
