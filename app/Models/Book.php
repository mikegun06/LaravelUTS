<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'book'; 
    use HasFactory;
    public function BookPublisher()
    {
        return $this->belongsTo(Publisher::class,'publisher_id','id');
    }
    public function BookCategory()
    {
        return $this->belongsToMany(Category::class,'bookcat','category_id','book_id');
    }
}
