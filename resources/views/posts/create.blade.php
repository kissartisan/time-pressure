@extends('layouts.app')

@section('content')
<h1>Create Post</h1>

<form action="">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" value="{{ $post->title }}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" cols="30" rows="10">
            {{ $post->description }}
        </textarea>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <input type="checkbox" value="{{ $post->status }}">
    </div>
</form>

@endsection
