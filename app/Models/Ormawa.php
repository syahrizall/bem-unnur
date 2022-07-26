<?php

namespace App\Models;

use App\Models\Ormawa;
use App\Models\KategoriOrmawa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ormawa extends Model
{
    protected $table = 't_ormawa';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function kategoriOrmawa(){
        return $this->belongsTo(KategoriOrmawa::class);
    }
}