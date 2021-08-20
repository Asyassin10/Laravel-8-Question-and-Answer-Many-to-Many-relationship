@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col md-8">
                <div class="card">
                    <div class="header">
                        <div class="card-body">
                            <h2 class="text-center text-promary">Q & A system</h2>
                            <br>
                            <h3>{{ $posts->tital }}</h3>
                            <p>{{ $posts->descriptiion }}</p>

                            <hr>

                            <h4>Comments</h4>
                            @include('posts.comments', ['comments'=>$posts->comments, 'post_id'=>$posts->id])

                            <hr>
                            <form method="POST" action="{{ route('comment.store') }}">
                                @csrf
                                <div class="form-group">
                                    <textarea type="text" class="form-control" name="descriptiion"></textarea>
                                    <input type="hidden" class="form-control" name="post_id" value="{{ $posts->id }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Add comments</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
