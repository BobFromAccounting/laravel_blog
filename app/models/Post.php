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

    public function renderBody($characterLimit = null)
    {
        $Parsedown = new Parsedown();
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);

        if (!is_null($characterLimit)) {
            $body = Str::words($this->body, $characterLimit);

            $body = $Parsedown->text($body);
        } else {
            $body = $Parsedown->text($this->body);
        }
        
        return $cleanBody = $purifier->purify($body);
    }
}