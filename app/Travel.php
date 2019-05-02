<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    // Table Name
    protected $table = 'travels';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User');
    }
}
