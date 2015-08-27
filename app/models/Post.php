<?php

class Post extends BaseModel {

    protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo('User');
    }

    public static $rules = array(
        'title' => 'required|min:5|max:100',
        'body'  => 'required|min:10|max:10000'
    );
}