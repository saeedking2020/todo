@extends('layouts.master')
@section('content')
{{--    {{multiply(5,6)}}--}}
    <h2 style="display:block;text-align:center" class="mt-5 mb-3">ToDo Table</h2>
    <table class="table table-dark w-75 mx-auto">
        <thead>
            <tr class="table-primary">
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Image</th>
                <th scope="col">
                    Operation
                    <a href="create_task">
                        <button type="button" class="border-2 rounded float-end">create</button>
                    </a>

                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{$task->category->name}}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->content }}</td>
                    <td><img src="{{asset('images/'.$task->image)}}" width="100" height="100"></td>
                    <td>
                        <form action="{{ route('edit',['id' => $task->id]) }}" method="GET" style="display: inline">
                            @csrf
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                        <form action="{{ route('delete_task',['id' => $task->id]) }}" method="POST" style="display: inline">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{$tasks->links()}}
            </div>
        </div>
    </div>

@endsection
