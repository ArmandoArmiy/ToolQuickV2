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

    public function Product_id()
    {
        return $this->hasMany ('App\Models\Product', 'Product_id');
    }
    public function Id_Product()
    {
        return $this->belongsTo('App\Models\Product', 'Product_id');
    }

    public function Transaction_id()
    {
        return $this->hasMany ('App\Models\Transaction', 'Transaction_id');
    }
    public function Id_Transaction()
    {
        return $this->belongsTo('App\Models\Transaction', 'Transaction_id');
    }
    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize the searchable array if needed
        // For instance, include more attributes or manipulate the data before indexing

        return $array;
    }
}
