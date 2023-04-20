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
        'Number',
        'Price',
    ];

    public function Sale()
    {
        return $this->hasOne(Sales::class, 'boardgames_id', 'id');
    }
}
