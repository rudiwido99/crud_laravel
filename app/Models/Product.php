<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;
    // protected $fillable = ['nama']
    protected $guarded = [];
    protected $hidden = ['brand_id', 'created_at', 'updated_at'];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
