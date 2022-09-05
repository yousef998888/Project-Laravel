<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=['id'];
//    protected $fillable=['title','excerpt','body'];
   protected $with=['category','author'];

    public function category(){

        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
