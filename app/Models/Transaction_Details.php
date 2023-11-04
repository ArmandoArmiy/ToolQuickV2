<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Transaction_Details extends Model
{
    use Searchable;
    use HasFactory;
    protected $table = 'transaction_details';
    protected $fillable = ['Transaction_id', 'Product_id', 'Quantity','UnitPrice','Subtotal'];

    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize the searchable array if needed
        // For instance, include more attributes or manipulate the data before indexing

        return $array;
    }
}
