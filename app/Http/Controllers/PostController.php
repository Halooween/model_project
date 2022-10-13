<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Post::withTrashed()->paginate(5);
         $data = Post::withoutTrashed()->paginate(5);

       //$data = Post::paginate(5);
        return view('post.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new  Post();
        $data->position= $request->input('position');
        $data->status= $request->input('status');
        $data->description= $request->input('description');

        $data->save();

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Post::findOrFail($id);
        return view('post.show', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Post::findOrFail($id);

        return view('post.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data= Post::find($id);
        $data->position= $request->input('position');
        $data->status= $request->input('status');
        $data->description= $request->input('description');
    
        $data->update();

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data= Post::where('id', '=' , $id)->delete();

        return redirect()->route('post.index');
    }

    public function restore()
    {
      Post::onlyTrashed()->restore();
  
      return redirect()->route('post.index'); 
   }
}
