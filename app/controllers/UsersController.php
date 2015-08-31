<?php

class UsersController extends \BaseController {
    protected $entrustPerms = array(

        'index'    => 'user-edit',
        'show'     => ['user-edit-own',    'user-edit'],
        'edit'     => ['user-edit-own',    'user-edit'],
        'update'   => ['user-edit-own',    'user-edit'],
        'role'     => 'edit-user-roles',
        'editRole' => 'edit-user-roles'
    );

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::paginate(4);

        return View::make('users.index')->with('users', $users);
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $user = User::findOrFail($id);

        if (!$user) {
            App::abort(404);
        }

        return View::make('users.show')->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

        if (!$user) {
            App::abort(404);
        }

        return View::make('users.edit')->with('user', $user);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	    $user = User::find($id);

        if (!$user) {
            App::abort(404);
        }

        $validator = Validator::make(Input::all(), User::$rules);

        if ($validator->fails()) {
            Session::flash('errorMessage', 'Ohh no! Something went wrong...You should be seeing some errors down below...');
            Log::info('Validator failed', Input::all());
            // validation failed, redirect to the post create page with validation errors and old inputs
            return Redirect::back()->withInput()->withErrors($validator);
        } else {

            $user->first_name = Input::get('first_name');
            $user->last_name  = Input::get('last_name');
            $user->email      = Input::get('email');
            $user->save();

            Session::flash('successMessage', 'Your profile has been successfully updated.');

            return Redirect::action('UsersController@show', array($user->id));
        }
	}

    public function role($id)
    {
    	$user = User::find($id);

        $roles = Role::all();

    	if (!$user) {
    		App::abort(404);
    	}

        return View::make('users.edit-roles')->with(array('user' => $user, 'roles' => $roles));
    }

    public function editRole($id)
    {
    	$user = User::find($id);

        $roles = Input::get('roles');

        $user->roles()->sync($roles);
            
        Session::flash('successMessage', "Role successfully updated on $user->first_name's account.");

        return Redirect::action('UsersController@edit', array($user->id));
    }
	

}