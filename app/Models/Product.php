<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name',
        'quantity',
        'price',
    ];

    protected $hidden = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

}
