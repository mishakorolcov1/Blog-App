<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;




use Validator;

class BlogsController extends Controller
{
    //
    public function index(){

        $blogs = Blog::all();

        return view('blogs.index', ['blogs' => $blogs]);
    }


    public function create(){
        return view('blogs.create');
    }

    public function store(Request $request){
        $rules = [
            'title' => 'required|min:2|max:150',
            'content' => 'required|min:2|max:5000',
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();
        return redirect()->route('blogs_path');  

    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blogs.article', ['blog' => $blog]);
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blogs.edit', ['blog' => $blog]);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'title' => 'required|min:2|max:150',
            'content' => 'required|min:2|max:5000',
        ];
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->update();
        return redirect()->route('blog_path', ['blog' => $blog]);
    }


    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('blogs_path');
    }

}
