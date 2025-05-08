@extends('layouts.master')
@section('title')
    Create Task
@endsection
@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif

    <div class="container">
        <div class="row">
            <div class="col-12 m-5 bg-secondary p-5 rounded text-light">
                <form action={{ route('edit_task',['id' => $id]) }} method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" aria-describedby="emailHelp"
                               placeholder="Enter title" name="title" value="{{ old('title', $task->title) }}">
                        <small id="titleHelp" class="form-text text-muted">Enter Task Title</small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="content">Content</label>
                        <input type="text" class="form-control" id="content" placeholder="Content" name="content"
                               value="{{ old('content', $task->content) }}">
                    </div>
                    <img src="{{asset('images/'.$task->image)}}" class="rounded" width="200">
                    <div class="form-group mb-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="" placeholder="Image" name="image">
                    </div>
                    <div class="form-group mb-3">
                        <label for="category_id">Category</label>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                            @foreach($categories as $category)
                                <option @if($category->id == $task->category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
