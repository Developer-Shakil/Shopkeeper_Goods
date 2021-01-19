<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Food extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'cat_id',
        'image',
    ];
    use HasFactory;
    public function category(){
        return $this->hasOne(Category::class,'id','cat_id');
    }
}
