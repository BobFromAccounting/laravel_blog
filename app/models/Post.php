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

        $body = $Parsedown->text($this->body);
        $cleanBody = $purifier->purify($body);

        if (!is_null($characterLimit)) {
            return Str::words($cleanBody, $characterLimit);
        }

        return $cleanBody;
    }

    public function uploadImage($file)
    {
        $name = $file->getClientOriginalName();

        $path = '/uploadedimgs/';

        $file->move(public_path() . $path, $name);

        $this->image = $path . $name;
    }
}