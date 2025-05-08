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
                    <form action={{ route('edit_category',['category' => $category->id]) }} method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="title">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby=""
                                placeholder="Enter name" name="name" value="{{ old('name', $category->name) }}">
                            <small id="titleHelp" class="form-text text-muted">Enter Task Title</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    @endsection
