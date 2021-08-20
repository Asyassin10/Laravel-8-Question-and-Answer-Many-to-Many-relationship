@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Posts</h1>
                <a href="{{ route('post.create') }}" class="btn btn-success" style="float: right ">Create Post</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">tital</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->tital }}</td>
                                <td><a href="{{ route('post.show', $item->id) }}" class="btn btn-danger">Show</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
