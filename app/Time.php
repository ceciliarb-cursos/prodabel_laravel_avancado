<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $table = 'times';
    protected $primaryKey = "id";
    public $timestamps = true;
    protected $dateFormat = 'U';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $connection = 'sqlite';

    public function getRouteKeyName()
    {
        return 'id';
    }

}
