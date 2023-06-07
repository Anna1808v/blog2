@extends('layouts.main')
@section('content')
  <div>
    <a href="{{ route('comment.create') }}" class="btn btn-success mb-3">Create comment</a>
  </div>  
  <div>
    @foreach($comments as $comment)
      <div>
        <a href="{{ route('comment.show', $comment->id) }}">{{ $comment->id}}. {{ $comment->title }}</a>
      </div>
    @endforeach
  </div>

  <div class="mb-3">
    {{ $comments->withQueryString()->links() }}
  </div>
@endsection
