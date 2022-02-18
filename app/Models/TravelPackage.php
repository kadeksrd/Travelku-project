<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    //    aktifkan softDelete
    use SoftDeletes;
    use HasFactory;



    // fillable
    protected $fillable =
    [
        'title', 'slug', 'location',
        'about', 'featured_event', 'language',
        'food', 'depature_date', 'duration',
        'type', 'price'
    ];

    // protected hidden
    protected $hidden = [];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    // galleries has many
    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'travel_packages_id', 'id');
    }
}
