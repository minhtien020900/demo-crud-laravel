<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey="id";
    public $timestamps = false;
    protected $table = "products";

    protected $fillable =[
        'product_name',
        'category_id',
        'product_desc',
        'product_price',
        'product_image'
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
