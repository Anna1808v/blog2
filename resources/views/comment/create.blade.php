@extends('layouts.main')
@section('content')
<div>
  <form action="{{ route('comment.store') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">

      @error('title')
        <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea class="form-control" name="content" id="content" placeholder="content">{{ old('content') }}</textarea>

      @error('content')
        <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="text" name="image"
       class="form-control" id="image" placeholder="image" value="{{ old('image') }}">

       @error('image')
        <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group">
      <label for="category">Category</label>
      <select class="form-control" id="category" name="category_id">
        @foreach($categories as $category)
          <option 
            {{ old('category_id') == $category->id ? ' selected' : '' }}
            value="{{ $category->id }}">{{ $category->title }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <select class="form-control" multiple aria-label="multiple select example" id="tags" name="tags[]">
        @foreach($tags as $tag)
          <option 
            {{ is_array(old('tags')) && in_array($tag->id, old('tags'))  ? ' selected' : '' }}
            value="{{ $tag->id }}">{{ $tag->title }}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Create</button>

  </form>
</div>   
@endsection
