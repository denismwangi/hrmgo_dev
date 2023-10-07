<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class AllowanceOption extends Model
{
    use Uuid;

    protected $fillable = [
        'name',
        'created_by',
    ];
}
