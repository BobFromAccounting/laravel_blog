<?php

class EntrustSeeder extends Seeder {
    
    public function run()
    {
        /* ====================================================== */
        // Roles

        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'User Administrator';
        $admin->description  = 'User is allowed to manage and edit other users and their posts.';
        $admin->save();

        $blogger = new Role();
        $blogger->name         = 'blogger';
        $blogger->display_name = 'Persistent User Type';
        $blogger->description  = 'User is allowed to make persistent posts to the database, can edit or delete their own posts.';
        $blogger->save();

        $guestBlogger = new Role();
        $guestBlogger->name         = 'guest';
        $guestBlogger->display_name = 'Temporary User Type';
        $guestBlogger->description  = 'User is allowed to make persistent posts to the database, and can edit their own posts. However, they are only allowed to make a single post at a time, at the discretion of the admin staff.';
        $guestBlogger->save();

        $newUser = new Role();
        $newUser->name         = 'user';
        $newUser->display_name = 'Read Only User';
        $newUser->description  = 'User is able to view posts and can request more permissions or Roles.';
        $newUser->save();

        $user = User::where('username', '=', 'BobFromAccounting')->first();
        $user->attachRole($admin);
        $user->attachRole($blogger);

        $seconduser = User::where('username', '=', 'CiaoRachel')->first();
        $seconduser->attachRole($guestBlogger);
        $seconduser->attachRole($newUser);

        /* ======================================================== */
        // Permissions

        $createPost = new Permission();
        $createPost->name         = 'post-create';
        $createPost->display_name = 'Create Posts';
        $createPost->description  = 'create new blog posts';
        $createPost->save();

        $createPostOnce = new Permission();
        $createPostOnce->name         = 'post-create-once';
        $createPostOnce->display_name = 'Create Single Post';
        $createPostOnce->description  = 'create a new blog post';
        $createPostOnce->save();

        $editPost = new Permission();
        $editPost->name         = 'post-edit';
        $editPost->display_name = 'Edit Posts';
        $editPost->description  = 'edit any post on the website';
        $editPost->save();

        $editOwnPost = new Permission();
        $editOwnPost->name         = 'post-edit-own';
        $editOwnPost->display_name = 'Edit Your Own Posts';
        $editOwnPost->description  = 'edit any post you have created';
        $editOwnPost->save();

        $destroyPost = new Permission();
        $destroyPost->name         = 'post-destroy';
        $destroyPost->display_name = 'Soft Delete A Post';
        $destroyPost->description  = 'soft delete posts on webpage made by any user, admin only permission';
        $destroyPost->save();

        $editUser = new Permission();
        $editUser->name         = 'user-edit';
        $editUser->display_name = 'Edit Users';
        $editUser->description  = 'Edit All User Account details, admin only permission';
        $editUser->save();

        $editOwnUser = new Permission();
        $editOwnUser->name         = 'user-edit-own';
        $editOwnUser->display_name = 'Edit Own User';
        $editOwnUser->description  = 'Edit your user account details';
        $editOwnUser->save();

        $editRoles = new Permission();
        $editRoles->name         = 'edit-user-roles';
        $editRoles->display_name = 'Edit User Roles';
        $editRoles->description  = 'Add role or edit existing role for users. admin only permission.';
        $editRoles->save();

        $admin->attachPermissions(array($editPost, $destroyPost, $editUser, $editRoles));
        $blogger->attachPermissions(array($createPost, $editOwnPost, $editOwnUser));
        $guestBlogger->attachPermissions(array($createPostOnce, $editOwnPost, $editOwnUser));
        $newUser->attachPermission($editOwnUser);
    }
}