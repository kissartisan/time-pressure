@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>

<form action="">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" value="{{ $post->title }}" placeholder="Title">
    </div>
    <div class="form-group">
        <label for="description">description</label>
        <textarea name="description" cols="30" rows="10" class="form-control"
        >{{ $post->description }}</textarea>
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" value="{{ $post->status }}" name="status">
        <label class="form-check-label" for="status">Status</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
