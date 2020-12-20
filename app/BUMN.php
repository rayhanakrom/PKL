<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BUMN extends Model
{
    protected $table = 'bumns';
    protected $fillable = ['nama_karyawan','nama_panggilan','NIK','bank','no_rekening','status_kartu','keterangan'];
}
