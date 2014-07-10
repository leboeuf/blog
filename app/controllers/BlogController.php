<?php

class BlogController extends BaseController {

	public function index()
	{
		return View::make('index');
	}

	public function show($permalink)
	{
		$post = null;
		$file = "$permalink.html";

		$posts_path = getcwd() . '/app/views/posts';
		$posts = array_diff(scandir($posts_path), array('..', '.'));

		if (in_array($file, $posts))
			$post = file_get_contents("$posts_path/$file");
		else
			App::abort(404);

		return View::make('post')->with(['post' => $post]);
	}

}
