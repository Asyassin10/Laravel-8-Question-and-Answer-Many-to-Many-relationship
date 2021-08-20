@foreach ($comments as $item)
    <div @if ($item->parent_id != null) style="margin-left:60px;color:red" @endif>
        <strong>{{ $item->user->name }}</strong>
        <p>{{ $item->description }}</p>
        <form method="POST" action="{{ route('comment.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="descriptiion">
                <input type="hidden" class="form-control" name="posts_id" value="{{ $posts_id }}">
                <input type="hidden" class="form-control" name="parent_id" value="{{ $item->id }}">
            </div>
            <button type="submit" class="btn btn-primary">Reply</button>
        </form>
        @include('posts.comments', ['comment'=>$item->replies])
    </div>
@endforeach
