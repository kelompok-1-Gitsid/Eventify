<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $table = 'vendors';

    protected $guarded = ['id'];

    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role');
    }

}
