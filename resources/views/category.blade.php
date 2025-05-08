@extends('layouts.master')
@section('title')
    Categories
@endsection
@section('content')
    <h2 style="display:block;text-align:center" class="mt-5 mb-3">Categories Table</h2>
    <table class="table table-dark w-75 mx-auto">
        <thead>
        <tr class="table-primary">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">
                Operation
                <a href="create_category">
                    <button type="button" class="border-2 rounded float-end">create</button>
                </a>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{$category->name}}</td>
                <td>
                    <form action="{{ route('edit_cat',['category' => $category->id]) }}" method="GET"
                          style="display: inline">
                        @csrf
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                    <form action="{{ route('delete_category',['category' => $category->id]) }}" method="POST"
                          style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
