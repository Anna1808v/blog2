@extends('layouts.main')
@section('content')
  <div>
    <div class="mb-3">
      <h2>{{ $comment->id}}. {{ $comment->title }}</h2>
    </div>
    <div class="mb-3">
      <h3>Текст комментария:</h3>
      <div> {{ $comment->content }} </div>
    </div>
    <div class="mb-3">
      <h3>Категория</h3>
      <div> {{ $comment->category->title }} </div>
    </div>
    <div class="mb-3">
      <h3>Тэги:</h3>
      <div>
        @foreach($comment->tags as $tag)
          {{ $tag->title }}
        @endforeach
      </div>
    </div>

  </div>

  <div>
    <a href="{{ route('admin.comment.edit', $comment->id) }}" >Edit</a>
  </div>

  <div>
    <form action="{{ route('admin.comment.delete', $comment->id) }}" method="post">
    @csrf
    @method('delete')
    <input type="submit" value="Delete" class="btn btn-danger">
    </form>
  </div>

  <div>
    <a href="{{ route('admin.comment.index') }}">Back</a>
  </div>

@endsection
