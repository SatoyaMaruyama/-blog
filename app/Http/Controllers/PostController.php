<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Record;


class PostController extends Controller
{
  public function index(Post $post)
  {
     return view('posts/index')->with(['posts'=>$post->getPaginateByLimit()]);
  }
  
  /**
 * 特定IDのpostを表示する
 * @params Object Post // 引数の$postはid=1のPostインスタンス
 * @return Reposnse post view
 */
public function show(Post $post)
{
    return view('posts/show')->with(['post' => $post]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}

public function create(Record $record)
{
    return view('posts.create')->with(['records' => $record->get()]);
}

public function store(PostRequest $request, Post $post)
{
   $input = $request['post'];
   $post->fill($input)->save();
    return redirect('/posts/' . $post->id);
}

}
