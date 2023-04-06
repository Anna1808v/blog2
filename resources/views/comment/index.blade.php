@extends('layouts.main')
@section('content')
  <div>
    @foreach($comments as $comment)
      <div><a href="{{ route('comment.show', $comment->id) }}">{{ $comment->id}}. {{ $comment->title }}</a></div>
    @endforeach
  </div>
@endsection
