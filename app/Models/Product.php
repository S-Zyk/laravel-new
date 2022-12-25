<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name', 'category_id', 'price', 'img', 'status', 'description'];

    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public  function getPagePriceAttribute(){
        return $this->attributes['price'] / 100;
    }

    public function setPriceAttribute($value) {
        $this->attributes['price'] = $value * 100;
    }

}
