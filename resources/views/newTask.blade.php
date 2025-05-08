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
                <form action={{ route('create_task') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title"
                               placeholder="Enter title" name="title"
                               value="{{old('content', request()->input('title'))}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="content">Content</label>
                        <input type="text" class="form-control" id="content" placeholder="Enter Content" name="content"
                               value="{{ old('content', request()->input('content')) }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="category_id">Category</label>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                            @if($categories->isNotEmpty())
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            @else
                                <option value="">Create new categories to be able to create new tasks</option>
                            @endif
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="" placeholder="Image" name="image">
                    </div>
                    <div class="form-group form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="" name="confirm">
                        <label class="form-check-label" for="exampleCheck1">I want to create a new task</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
