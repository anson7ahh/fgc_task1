<?php

namespace Modules\Blog\Http\Controllers;

use App\Models\post;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Str;

class PostsController extends Controller
{
    private $post;
    public function index()
    {
        return view('blog::manage');
    }
    public function __construct()
    {
        $this->post = new Post();
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(Request $request)
    {

        $this->post->title = $request->input('title');
        $this->post->slug = Str::slug($request->title, '-');
        $this->post->content = $request->input('content');
        $this->post->status = $request->input('status');
        $this->post->save();
        return  redirect('/post')->with("succsess", 'thanh cong');
    }



    public function show()
    {

        $getpost = $this->post->getpost();
        return view('blog::manage', compact('getpost'));
    }

    public function showDetail($slug)
    {

        $getslug =  $this->post->show($slug);

        return view('blog::post', compact('getslug'));
    }
}
