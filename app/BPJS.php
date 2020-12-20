<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BPJS extends Model
{
    protected $table = 'bpjss';
    protected $fillable = ['nama','NIK','divisi','keterangan'];
}
