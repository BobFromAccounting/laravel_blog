<?php

class UsersTableSeeder extends Seeder {
    
    public function run()
    {

        $user = new User();
        $user->first_name = $_ENV['USER_FIRST_NAME'];
        $user->last_name  = $_ENV['USER_LAST_NAME'];
        $user->username   = $_ENV['USER_USERNAME'];
        $user->email      = $_ENV['USER_EMAIL'];
        $user->password   = $_ENV['USER_PASS'];
        $user->password_confirmation = $_ENV['USER_PASS'];
        $user->confirmed  = 1;
        $user->confirmation_code =  md5(uniqid(mt_rand(), true));
        if(! $user->save()) {
            Log::info('Unable to create user '.$user->email, (array)$user->errors());
        } else {
            Log::info('Created user '.$user->email);
        }
    }
}