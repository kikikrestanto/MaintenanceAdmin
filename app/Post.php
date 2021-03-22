<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $timestamp = false;
    protected $fillable = [
        'user_id','inventarisEdit','jangkaWaktu','jenisEdit','lokasiEdit','merkEdit','created_at'
    ];


    public function user()
    {
        return $this->belongsTo('\App\User','user_id');
    }
    
    public function update_tbl()
    {
        return $this->hasOne('\App\Update');
    }
}
