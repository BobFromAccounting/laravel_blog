<?php

class UsersTableSeeder extends Seeder {
    
    public function run()
    {

        $user = new User();
        $user->first_name            = $_ENV['USER_FIRST_NAME'];
        $user->last_name             = $_ENV['USER_LAST_NAME'];
        $user->username              = $_ENV['USER_USERNAME'];
        $user->email                 = $_ENV['USER_EMAIL'];
        $user->password              = $_ENV['USER_PASS'];
        $user->password_confirmation = $_ENV['USER_PASS'];
        $user->confirmed             = 1;
        $user->confirmation_code     = md5(uniqid(mt_rand(), true));
        if(!$user->save()) {
            Log::info('Unable to create user '.$user->email, (array)$user->errors());
        } else {
            Log::info('Created user '.$user->email);
        }

        $guest = new User();
        $guest->first_name            = $_ENV['GUEST_FIRST_NAME'];
        $guest->last_name             = $_ENV['GUEST_LAST_NAME'];
        $guest->username              = $_ENV['GUEST_USERNAME'];
        $guest->email                 = $_ENV['GUEST_EMAIL'];
        $guest->password              = $_ENV['GUEST_PASS'];
        $guest->password_confirmation = $_ENV['GUEST_PASS'];
        $guest->confirmed             = 1;
        $guest->confirmation_code     = md5(uniqid(mt_rand(), true));
        if(!$guest->save()) {
            Log::info('Unable to create user '.$guest->email, (array)$guest->errors());
        } else {
            Log::info('Created user '.$guest->email);
        }
    }
}