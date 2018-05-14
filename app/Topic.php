<?php

namespace App;

use App\Model;

class Topic extends Model
{
    /*
    * 属于这个主题的所有文章
    */
    public function posts()
    {
        return $this->belongsToMany(\App\Post::class, 'post_topics', 'topic_id', 'post_id');
    }

    /*
     * 专题的文章数,用于withCount
     * */
    public function postTopics()
    {
        $this->hasMany(\App\PostTopic::class, 'topic_id');
    }
}
