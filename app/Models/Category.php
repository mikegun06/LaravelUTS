<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    public function BookCategory()
    {
        return $this->belongsToMany(Book::class,'bookcat','category_id','book_id');
    }
}
