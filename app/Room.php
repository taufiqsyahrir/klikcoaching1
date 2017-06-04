<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $fillable = ['jenis', 'tentor', 'foto', 'negara', 'deskripsi', 'tanggal', 'jam'];


    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}