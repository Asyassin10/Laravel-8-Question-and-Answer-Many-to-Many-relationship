@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col md-8">
                <h1>Create Posts</h1>
                <div class="body">
                    <form action="{{ route('post.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <h4>Title</h4>
                            <input type="text" class="form-control" name="tital" required>
                        </div>
                        <div class="form-group">
                            <h4>Description</h4>
                            <textarea type="text" class="form-control" name="descriptiion" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
