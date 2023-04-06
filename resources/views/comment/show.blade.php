@extends('layouts.main')
@section('content')
  <div>
    <div> {{ $comment->id}}. {{ $comment->title }} </div>
    <div> {{ $comment->content }} </div>
  </div>
@endsection
