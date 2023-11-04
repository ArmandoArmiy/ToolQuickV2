<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Partners extends Model
{
    use Searchable;
    use HasFactory;
    protected $table = 'partners';
    protected $fillable = ['PartnerName', 'Address', 'PhoneNumber', 'Email', 'PartnerType'];

    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize the searchable array if needed
        // For instance, include more attributes or manipulate the data before indexing

        return $array;
    }
}
