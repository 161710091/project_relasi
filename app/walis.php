<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class walis extends Model
{
    protected $fillable = ['nama', 'alamat', 'siswa_id'];

    public function mahasiswa()
    {
    	return $this->belongsTo('App\mahasiswas', 'siswa_id');
    }
}
