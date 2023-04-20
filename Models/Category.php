<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $primaryKey = 'id';
    protected $fillable = [
        'ID',
        'Name',
    ];

    public function BoardGames()
    {
        return $this->belongsToMany(Category::class, 'boardgames_id', 'boardgames_name', 'category_name', 'category_id');
    }
}
