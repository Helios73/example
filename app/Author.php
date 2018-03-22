<?php
/**
 * Created by PhpStorm.
 * User: atarasov
 * Date: 22.03.18
 * Time: 10:47
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'first_name',
        'secondary_name',
        'day_of_birth',
        'month_of_birth',
        'year_of_birth'
    ];

    public function books()
    {
        return $this->belongsToMany('App\Book');
    }

    public function getFullName()
    {
        return $this->first_name . ' ' . $this->secondary_name;
    }
}