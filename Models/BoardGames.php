<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardGames extends Model
{
    use HasFactory;
    protected $table = 'boardgames';
    protected $primaryKey = 'id';
    protected $fillable = [
        'ID',
        'Name',
        'Category',
        'Description',
        'Quantity',
        'Price',
    ];

    public function Cutomers()
    {
        return $this->belongsToMany(Customers::class, 'boardgames_name', 'boardgames_id', 'customers_id');
    }

    public function Sales()
    {
        return $this->hasOne(Sales::class, 'boardgames_id', 'sales_id');
    }

    public function Category()
    {
        return $this->belongsToMany(Category::class, 'boardgames_id', 'boardgames_name', 'category_name', 'category_id');
    }

    
}
