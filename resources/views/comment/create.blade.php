@extends('layouts.main')
@section('content')
<div>
  <form action="{{ route('comment.store') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" class="form-control" id="title" placeholder="title">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea class="form-control" name="content" id="content" placeholder="content"></textarea>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="text" name="image"
       class="form-control" id="image" placeholder="image">
    </div>
    <button type="submit" class="btn btn-primary mb-3">Create</button>

  </form>
</div>   
@endsection
