@csrf

<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" value="{{ $post->title }}" placeholder="Title">
</div>
<div class="form-group">
    <label for="description">description</label>
    <textarea name="description" cols="30" rows="10" class="form-control">{{ $post->description }}</textarea>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" name="status" {{ $post->status ? 'checked' : '' }}>
    <label class="form-check-label" for="status">Status</label>
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
<a href="{{ route('posts.index') }}">Cancel</a>
