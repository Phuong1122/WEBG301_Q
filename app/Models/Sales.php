<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        return $this->belongsTo(Customers::class);
    }

    public function BoardGames(): BelongsTo
    {
        return $this->belongsTo(BoardGames::class);
    }

}
