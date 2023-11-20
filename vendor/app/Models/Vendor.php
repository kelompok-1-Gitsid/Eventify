<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = ['nama', 'alamat', 'telepon', 'email', 'deskripsi', 'instagram', 'facebook', 'youtube'];
}
