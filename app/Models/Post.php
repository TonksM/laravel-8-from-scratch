<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body', 'slug', 'category_id', 'user_id'];
    
    //protected $with=['category', 'author'];
    //Makes this the default for EVERY post query
    //To disable it for a specific post query use as eg 
    // Post::without(['category', 'author']) in web.php

    //protected $guarded = ['id'];

    //$guarded vs $fillable
    //$guarded means any field except these
    //$fillable means only these fields

    //public function getRouteKeyName()
    //{
    //    return 'slug';
    //}

    //getRouteKeyName() only needs to be used if the key identifier
    //eg the slug part of {post:slug} is undefined and you don't
    //wish to find a post by id

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
