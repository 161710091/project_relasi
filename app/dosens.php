<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosens extends Model
{
    protected $fillable = ['nama', 'nipd', 'alamat', 'mata_kuliah'];

    public function mahasiswa()
    {
    	return $this->hasMany('App\mahasiswas', 'guru_id');
    }
}
