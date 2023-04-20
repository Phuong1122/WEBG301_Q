<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Id',
        'sales_id',
        'customers_id',
        'boardgames_name',
        'boardgames_quantity',
        'boardgames_price',
    ];

    public function Cutomers()
    {
        return $this->hasOne(Customers::class, 'boardgames_name', 'boardgames_id', 'customers_id');
    }

    public function Sales()
    {
        return $this->hasOne(Customers::class, 'boardgames_name', 'boardgames_id', 'customers_id');
    }
}
