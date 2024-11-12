<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = ['name','status', 'model','license_plate','driver_name','capacity'];

    public function wasteCollections()
    {
        return $this->hasMany(WasteCollection::class);
    }
}
