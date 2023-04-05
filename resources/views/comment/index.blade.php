@extends('layouts.main')
@section('content')
  <div>
    @foreach($comments as $comment)
      <div> {{ $comment->id}}. {{ $comment->title }} </div>
    @endforeach
  </div>
@endsection
