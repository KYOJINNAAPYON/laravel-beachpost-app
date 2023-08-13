<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFavorite\Traits\Favoriteable;
use Kyslik\ColumnSortable\Sortable;

class Post extends Model
{
    use HasFactory, Favoriteable, Sortable;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    protected $table = 'posts';

    protected $fillable = [
        'image',
    ];
}
