<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    protected $fillable = ['nama','NIK','detail_perihal','via_laporan','tanggal_lapor','penerima','kelengkapan'];
}
