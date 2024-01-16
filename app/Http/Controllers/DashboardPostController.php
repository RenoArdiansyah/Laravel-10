<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		$post = Post::where('user_id', \auth()->user()->id)->get();
		return \view('dashboard.posts.index', [
			'posts' => $post
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return \view('dashboard.posts.create', [
			'categories'    => Category::all()
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		$validateData = $request->validate([
			'title' => 'required|max:255',
			'slug'  => 'required|unique:posts',
			'category_id' => 'required',
			'image' => 'image|max:1024',
			'body'  => 'required'
		]);

		if ($request->file('image')) {
			$validateData['image'] = $request->file('image')->store('post-images');
		};

		$validateData['user_id'] = \auth()->user()->id;
		$validateData['excerpt'] = Str::limit(\strip_tags($request->body), 200);

		Post::create($validateData);

		return \redirect('dashboard/posts')->with('success', 'data berhasil ditambahkan');
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Post $post)
	{

		return \view('dashboard.posts.show', [
			'post' => $post
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Post $post)
	{
		return \view('dashboard.posts.edit', [
			'post'  => $post,
			'categories'    => Category::all()
		]);
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, Post $post)
	{
		$rules = [
			'title' => 'required|max:255',
			'image' => 'image|max:1024',
			'category_id' => 'required',
			'body'  => 'required'
		];

		if ($request->slug != $post->slug) {
			$rules['slug'] = 'required|unique:posts';
		}

		$validateData = $request->validate($rules);

		if ($request->file('image')) {
			if($request->oldImage) {
				Storage::delete($request->oldImage);
			}
			$validateData['image'] = $request->file('image')->store('post-images');
		};

		$validateData['user_id'] = \auth()->user()->id;
		$validateData['excerpt'] = Str::limit(\strip_tags($request->body), 200);

		Post::Where('id', $post->id)->update($validateData);

		return \redirect('dashboard/posts')->with('success', 'Post berhasil diupdate');
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Post $post)
	{
		if($post->image) {
			Storage::delete($post->image);
		}

		Post::destroy($post->id);
	
		return \redirect('dashboard/posts')->with('destroy', 'data berhasil dihapus');
	}

	public function checkSlug(Request $request)
	{
		$this->validate($request, [
			'title' => 'required|string',
		]);

		$slug = SlugService::createSlug(Post::class, 'slug', $request->title);
		return response()->json(['slug' => $slug], 200);
	}
}
