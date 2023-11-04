<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Transaction extends Model
{
    use Searchable;
    use HasFactory;
    protected $table = 'transaction';
    protected $fillable = ['TransactionDate', 'Partner_id', 'TotalAmount', 'TransactionType'];

    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize the searchable array if needed
        // For instance, include more attributes or manipulate the data before indexing

        return $array;
    }
}
