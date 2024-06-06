<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $rvw_data
 */
class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';
    protected $primaryKey = 'rvw_id';
    protected $fillable = ['rvw_data'];
    protected $casts = ['rvw_data' => 'object'];
}
