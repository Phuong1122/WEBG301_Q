<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'ID',
        'Name',
        'Phone Number',
        'Address',
    ];
    public function Sales(): HasMany
    {
        return $this->hasMany(Sales::class);
    }
}
