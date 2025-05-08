<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TodoController extends Controller
{
    //
    public function index(){
        $tasks = Task::paginate(2);
        $categories = Category::all();
        // dd($tasks);
        return view('home',compact('tasks','categories'));
    }

    public function create(){
        $categories = Category::all();
        return view('newTask',compact('categories'));

    }

    public function create_task(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required|min:5',
            'image' => 'required|min:10|max:5000|image',
            'category_id' => 'required|integer',
            'confirm' => 'accepted'
        ]);

        $file_name = time().'_'. $request->image->getClientOriginalName();
        $request->image->storeAs('images/'. $file_name);
        Task::create([
            'title' => $request['title'],
            'content' => $request['content'],
            'image' => $file_name,
            'category_id' => $request->category_id
        ]);
        return redirect()->route('home')->with('Successfully created');
    }
    public function delete_task(Request $request){
        $id = $request->id;
        $task = Task::find($id)->delete();
        return redirect()->back()->with('Task with id'. $id . 'successfully deleted');
    }

    public function edit(Request $request){
        $id = $request->id;
        $task = Task::where('id',$request->id)->first();
        $categories = Category::all();
        // dd($task);
        return view('editTask',compact('id','task','categories'));
    }
    public function edit_task(Request $request){

        $task = Task::where('id',$request->id)->first();
        $request->validate([
            'title' => 'required',
            'content' => 'required|min:5',
            'image' => 'image'
        ]);
        if ($request->image) {
            Storage::delete('images/' . $task->image);
            $file_name = time() . '_' . $request->image->getClientOriginalName();
            $request->image->storeAs('images/' . $file_name);
        }
            $task->update([
                'title' => $request->title,
                'content' => $request->content,
                'image' => $request->image ? $file_name: $task->image,
                'category_id' => $request->category_id
            ]);

        return redirect()->route('home')->with('Successfully edited');
    }

}
