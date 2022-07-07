<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use Sluggable, HasFactory;
    protected $guarded = ['id','created_at','updated_at'];
    protected $fillable = [
        'namaproduk', 'slug', 'merk','stok','deskripsi','category_id','harga'
    ];
    public function category(){
        return $this->belongsTo(category::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'namaproduk'
            ]
        ];
    }
}
