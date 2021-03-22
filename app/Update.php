<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    protected $table = 'updates';
    protected $timestamp = false;
    protected $fillable = [
        'user_id','post_id','no','tanggalMaintenance','tanggalMaintenanceSelanjutnya','tindakan','keterangan','created_at','updated_at'
    ];

    public function user()
    {
        return $this->belongsTo('\App\Post');
    }

    public function update_tbl()
    {
        return $this->belongsTo('\App\Update','post_id');
    }
}
