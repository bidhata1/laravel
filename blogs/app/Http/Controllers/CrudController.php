<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function storeData(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'post' => 'required|max:30',
        ]);
        $data = new Post;
        $data->title = $request->title;
        $data->post = $request->post;
        $data->save();
        return redirect()->route('viewdata');
    }
    public function viewData()
    {
        /*
            $posts= Post::all();
            return view('dashboard', compact('post'));
            $posts=Post::all();
            dd($posts);
            return view('dashboard', ['post'=>$posts]); */
        $data = Post::all();

        return view('viewdata', ['data' => $data]);
    }

    //delete data
    public function destroy($id)
    {
        $data = Post::find($id);
        $data->delete();
        return redirect()->back();
    }

    //edit data

    public function edit($id)
    {
        $data = Post::find($id);
        //dd($data);
        return view('edit', ['data' => $data]);
    }

    public function updateData(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'post' => 'required',

        ]);
        $data = Post::find($id);
        $data->title = $request->title;
        $data->post = $request->post;
        $data->Update();
        return redirect()->route('viewdata')->with('success', 'info is updated successfully');
    }
}
