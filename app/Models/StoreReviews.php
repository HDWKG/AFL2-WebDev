<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreReviews extends Model
{
    use HasFactory;

    protected $table = 'storereviews';
    protected $fillable = [
        'name',
        'branch_id',
        'image',
        'review',
        'stars',
    ];
}
