<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fingerprint extends Model
{
    // protected $fillable = [
    // 	'user_id', 'finger_status', 'finger_data', 'finger_salt',
    // ];
    protected $table = 'fingerprint';

    public $timestamps = false;
}
