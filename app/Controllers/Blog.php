<?php namespace App\Controllers;

class Blog extends BaseController
{
	public function index()
	{
		$data = [
			// 'meta_title' => 'Codeigniter 4 Blog',
			'title' => 'This is a Blog Page'
		];

		$posts = ['title 1', 'title 2', 'title 3'];
		$data['posts'] = $posts;

		return view('blog', $data);

	}

	public function post() {
		$data = [
			'meta_title' => 'Codeigniter 4 Post Page',
			'title' => 'This is an Awesome Blog'
		];

		return view('single_post', $data);

	}

}
