<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    protected $table = 'sales';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Id',
        'boardgames_id',
        'customer_id',
    ];

    public function Customers(): BelongsTo
    {
        return $this->belongsToMany(Customers::class);
    }

    public function BoardGames(): BelongsTo
    {
        return $this->belongsToMany(BoardGames::class);
    }

}
