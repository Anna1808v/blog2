@extends('layouts.main')
@section('content')
    <div>
        this is a page with all comments
    </div>
    @foreach($comments as $comment)
        <div> {{ $comment->title }} </div>
        <div> {{ $comment->comment_content }}</div>
        <div> {{ $comment->likes }} лайков </div>
    @endforeach
@endsection
