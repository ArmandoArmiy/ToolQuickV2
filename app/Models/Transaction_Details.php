<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction_Details extends Model
{
    use HasFactory;
    protected $table = 'transaction_details';
    protected $fillable = ['Transaction_id', 'Product_id', 'Quantity','UnitPrice','Subtotal'];
}
