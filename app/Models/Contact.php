<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contactus';
    protected $primaryKey = 'contactus_id';

    protected $fillable = [
        'email',
        'address',
        'contact',
    ];

}
