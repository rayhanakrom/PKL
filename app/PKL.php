<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class PKL extends Model
{
    protected $table = 'pkls';
    protected $fillable = ['nama','NIM','email','asal','universitas','jurusan','no_telefon','Status'];
}
