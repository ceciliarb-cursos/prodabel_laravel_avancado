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

    protected $fillable = ['nome', 'mascote', 'fundado_em'];

    public function getRouteKeyName()
    {
        return 'id_diferente';
    }

    public function salva($time)
    {
        $this->fill($time);
        return $this->save();
    }

    public function clona()
    {
        $time = $this->replicate();
        return $time->save();
    }

}
