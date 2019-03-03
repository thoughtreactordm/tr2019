<?php

namespace App;


class Post extends \TCG\Voyager\Models\Post
{

    public function author()
    {
        return $this->hasOne(User::class, 'id', 'author_id');
    }

}
