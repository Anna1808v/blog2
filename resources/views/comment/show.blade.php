@extends('layouts.main')
@section('content')
  <div>
    <div> {{ $comment->id}}. {{ $comment->title }} </div>
    <div> {{ $comment->content }} </div>
  </div>

  <div>
    <a href="{{ route('comment.edit', $comment->id) }}" >Edit</a>
  </div>

  <div>
    <form action="{{ route('comment.delete', $comment->id) }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete" class="btn btn-danger">
    </form>
  </div>

  <div>
    <a href="{{ route('comment.index') }}">Back</a>
  </div>

@endsection
