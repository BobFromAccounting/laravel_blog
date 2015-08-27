<?php

class PostsController extends BaseController 
{

	protected $entrustPerms = array(
		'create'  => ['post-create-once', 'post-create'],
		'store'   => ['post-create-once', 'post-create'],
		'edit'    => ['post-edit-own',    'post-edit'],
		'update'  => ['post-edit-own',    'post-edit'],
		'destroy' => 'post-destroy',
	);
	

	public function __construct ()
	{
		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$query = Post::with('user');

		$search = strtolower(Input::get('search'));

		if($search) {
			$query->where('title', 'like', '%' . $search . '%');
			$query->orWhere('body', 'like', '%' . $search . '%');
			$query->orWhereHas('user', function($q) {
				$search = Input::get('search');
				$q->where('first_name', 'like', '%' . $search . '%');
			});
			$query->orWhereHas('user', function($q) {
				$search = Input::get('search');
				$q->where('last_name', 'like', '%' . $search . '%');
			});
		}
			$posts = $query->orderBy('updated_at')->paginate(4);
		return View::make('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		return View::make('posts.create');
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$post = new Post();
        // validation succeeded, create and save the post
		Log::info("Post created successfully.");

		Log::info("Log Message", array('context' => Input::all()));
	
		if (Entrust::hasRole('guest')) {
			Entrust::user()->detachPermission('post-create-once');
		}
		return $this->validateAndSave($post);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);

		if (!$post) {
			App::abort(404);
		}

		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);

		if (!$post) {
			App::abort(404);
		}
		
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);

		if (!$post) {
			App::abort(404);
		}
		
		return $this->validateAndSave($post);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);		
		$post->delete();

		Session::flash('successMessage', 'This post has been successfully deleted.');

		return Redirect::action('PostsController@index');
	}

	public function validateAndSave($post)
	{
		// create the validator
	    $validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	    	Session::flash('errorMessage', 'Ohh no! Something went wrong...You should be seeing some errors down below...');
	    	Log::info('Validator failed', Input::all());
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {

			$post->title   = Input::get('title');
			$post->body    = Input::get('body');
			$post->user_id = Auth::id();
			$post->save();

			Session::flash('successMessage', 'Your post has been successfully saved.');

			return Redirect::action('PostsController@show', array($post->id));
		}
	}
}
