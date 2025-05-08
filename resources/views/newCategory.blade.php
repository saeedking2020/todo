@extends('layouts.master')
@section('title')
    Create Category
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
                <form action={{ route('create_category') }} method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby=""
                               placeholder="Enter name" name="name">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
