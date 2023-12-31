<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use Uuid;

    protected $fillable = [
        'job',
        'name',
        'email',
        'phone',
        'profile',
        'resume',
        'cover_letter',
        'dob',
        'gender',
        'address',
        'country',
        'state',
        'city',
        'zip_code',
        'stage',
        'order',
        'skill',
        'rating',
        'is_archive',
        'custom_question',
        'created_by',
    ];

    public function jobs()
    {
        return $this->hasOne('App\Models\Job', 'id', 'job');
    }
}
