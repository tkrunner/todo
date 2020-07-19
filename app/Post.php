<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //SELECT * FROM posts INNER JOIN categories ON posts.category_id = categories.
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
