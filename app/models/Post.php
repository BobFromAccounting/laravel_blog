<?php

class Post extends BaseModel {
    
    protected $table = 'posts';

    public static $rules = array(
        'title' => 'required|min:5|max:100',
        'body'  => 'required|min:10|max:10000'
    );
}