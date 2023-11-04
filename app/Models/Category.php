<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Category extends Model
{
    use Searchable;
    use HasFactory;
    protected $table = 'category';
    protected $fillable = ['CategoryName', 'CategoryDescription'];

    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize the searchable array if needed
        // For instance, include more attributes or manipulate the data before indexing

        return $array;
    }
}
