<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtimes extends Model
{
    use HasFactory;

            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'movieTitle',
        'movieDate',
        'movieTime1Begin',
        'movieTime1End',
        'movieTime2Begin',
        'movieTime2End',
        'movieTime3Begin',
        'movieTime3End',
        'movieTime4Begin',
        'movieTime4End'
    ];
}
