<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $guarded = ['id'];

    // protected $fillable = [
    //     'name',
    //     'description',
    //     'image1',
    //     'image2',
    //     'image3',
    //     'image4',
    //     'image5',
    //     'price',
    //     'category',
    //     'user_id',
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
