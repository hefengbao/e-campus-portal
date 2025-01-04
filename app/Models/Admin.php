<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\AdminFactory> */
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }
}
