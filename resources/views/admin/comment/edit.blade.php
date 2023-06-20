@extends('layouts.admin')
@section('content')
<div>
  <form action="{{ route('admin.comment.update', $comment->id) }}" method="post">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{ $comment->title }}">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea class="form-control" name="content" id="content" placeholder="content" >{{ $comment->content }}</textarea>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="text" name="image" class="form-control" id="image" placeholder="image" value="{{ $comment->image }}">
    </div>
    <div class="form-group">
      <label for="category">Category</label>
      <select class="form-control" id="category" name="category_id">
        @foreach($categories as $category)
          <option
            {{ $category->id == $comment->category->id ? ' selected' : '' }}

          value="{{ $category->id }}">{{ $category->title }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <select class="form-control" multiple aria-label="multiple select example" id="tags" name="tags[]">
        @foreach($tags as $tag)
          <option
            @foreach($comment->tags as $commentTag)
              {{ $tag->id == $commentTag->id ? ' selected' : '' }}
            @endforeach
          value="{{ $tag->id }}">{{ $tag->title }}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Update</button>

  </form>
</div>
@endsection
