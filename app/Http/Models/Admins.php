<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    protected $guarded = [];

    const UPDATED_AT  = 'update_at';

    const CREATED_AT = 'create_at';

    protected $dateFormat = 'U';
}
