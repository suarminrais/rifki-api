<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Jadwal extends Model
{
    protected $fillable = [
        'user_id', 'nama', 'waktu'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}