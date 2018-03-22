<?php
/**
 * Created by PhpStorm.
 * User: atarasov
 * Date: 22.03.18
 * Time: 10:47
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name_book',
        'description'
    ];

    public function authors()
    {
        return $this->belongsToMany('App\Author', 'authors_books')->withTimestamps();
    }

    public static function search($query)
    {
        $result = Book::WhereHas('authors', function($queryBuilder) use ($query) {
            $queryBuilder->where('first_name', 'like', "%{$query}%");
        })->orWhere('name_book', 'like', "%{$query}%")->with('authors')->get();
        return $result;
    }
}