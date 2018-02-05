<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusans extends Model
{
    protected $fillable = ['nama_jurusan'];

    public function mahasiswa()
    {
    	return $this->belongsTo('App\mahasiswas', 'kelas_id');
    }
}
