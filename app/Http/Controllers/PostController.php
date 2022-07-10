<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
// models
use App\Models\Post;

class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $posts = Post::all();
    $images = array();
    foreach($posts as $p) {
      array_push($images, Storage::url($p->image_path));
    }
    return Inertia::render('Home', [
      'posts' => $posts,
      'images' => $images
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\StorePostRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StorePostRequest $request)
  {
    Log::debug($request);
    $images = $request->images;
    $imagePath = '';
    foreach ($images as $image) {
      $imagePath = $image->store('image', 'public');
    }
    Log::debug($imagePath);
    Post::create([
      'title' => $request->title,
      'user_id' => $request->user_id,
      'image_path' => $imagePath,
      'ip_address' => 'default value'
    ]);
    return redirect()->route('post.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    return view('post.show', [
      'post' => Post::find($id),
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function edit(Post $post)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Http\Requests\UpdatePostRequest  $request
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function update(UpdatePostRequest $request, Post $post)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function destroy(Post $post)
  {
    //
  }
}
