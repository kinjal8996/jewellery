<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'category';
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'name',
        'description',
    ];

    public function subcategories()
    {
       return $this->hasMany(Subcategory::class, 'category_id');
    }
}
